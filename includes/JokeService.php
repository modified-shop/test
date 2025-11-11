<?php

declare(strict_types=1);

namespace App\Service;

/**
 * Simple service to fetch a random joke from public APIs.
 */
final class JokeService
{
    /** @var array<int, array{url:string, headers:array<int,string>, key:string}> */
    private array $apis = [
        [
            'url' => 'https://icanhazdadjoke.com/',
            'headers' => ['Accept: application/json', 'User-Agent: JokeFetcher/1.0 (+https://example.local)'],
            'key' => 'joke',
        ],
        [
            'url' => 'https://v2.jokeapi.dev/Joke/Any?type=single&safe-mode',
            'headers' => ['Accept: application/json'],
            'key' => 'joke',
        ],
    ];

    public function fetchJoke(): string
    {
        foreach ($this->apis as $api) {
            $data = $this->httpGetJson($api['url'], $api['headers']);
            if ($data !== null && isset($data[$api['key']]) && is_string($data[$api['key']])) {
                $joke = trim($data[$api['key']]);
                if ($joke !== '') {
                    return $joke;
                }
            }
        }

        return 'Heute leider kein Witz verfügbar.';
    }

    /**
     * @param array<int, string> $headers
     * @return array<string, mixed>|null
     */
    private function httpGetJson(string $url, array $headers, int $timeout = 4): ?array
    {
        $raw = $this->curlGet($url, $headers, $timeout);
        if ($raw === null) {
            $raw = $this->streamGet($url, $headers, $timeout);
        }

        if ($raw === null) {
            return null;
        }

        $decoded = json_decode($raw, true);
        if (!is_array($decoded)) {
            return null;
        }

        return $decoded;
    }

    /**
     * @param array<int, string> $headers
     */
    private function curlGet(string $url, array $headers, int $timeout): ?string
    {
        if (!function_exists('curl_init')) {
            return null;
        }

        $ch = curl_init($url);
        if ($ch === false) {
            return null;
        }

        curl_setopt_array($ch, [
            CURLOPT_RETURNTRANSFER => true,
            CURLOPT_FOLLOWLOCATION => true,
            CURLOPT_TIMEOUT => $timeout,
            CURLOPT_HTTPHEADER => $headers,
            CURLOPT_USERAGENT => 'JokeFetcher/1.0',
        ]);

        $result = curl_exec($ch);
        $error  = curl_error($ch);
        $code   = curl_getinfo($ch, CURLINFO_HTTP_CODE);
        curl_close($ch);

        if ($result === false || $code >= 400) {
            return null;
        }

        return is_string($result) ? $result : null;
    }

    /**
     * @param array<int, string> $headers
     */
    private function streamGet(string $url, array $headers, int $timeout): ?string
    {
        $context = stream_context_create([
            'http' => [
                'method' => 'GET',
                'timeout' => $timeout,
                'header' => implode("\r\n", $headers),
            ],
        ]);

        $raw = @file_get_contents($url, false, $context);
        if ($raw === false) {
            return null;
        }

        return $raw;
    }
}
