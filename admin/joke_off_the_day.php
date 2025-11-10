<?php

declare(strict_types=1);

use App\Service\JokeService;

// Security-related headers for HTML response
header('Content-Type: text/html; charset=utf-8');
header('X-Content-Type-Options: nosniff');
header('Referrer-Policy: no-referrer');

require_once __DIR__ . '/../includes/JokeService.php';

$service = new JokeService();
$joke = $service->fetchJoke();

// Basic HTML-Ausgabe (ohne externe Abhängigkeiten)
?>
<!DOCTYPE html>
<html lang="de">
<head>
<meta charset="utf-8" />
<title>Joke of the Day</title>
<meta name="viewport" content="width=device-width, initial-scale=1" />
<style>
body {
    font-family: system-ui, -apple-system, Segoe UI, Roboto, sans-serif;
    line-height: 1.45;
    margin: 2rem;
    background: #f5f7fa;
    color: #222;
}
main {
    max-width: 640px;
    margin: auto;
    background: #fff;
    padding: 1.25rem 1.5rem;
    border-radius: 12px;
    box-shadow: 0 4px 16px rgba(0, 0, 0, .08);
}
h1 {
    font-size: 1.4rem;
    margin-top: 0;
}
.joke {
    font-size: 1.1rem;
    margin: 1rem 0;
}
small {
    color: #666;
}
button {
    background: #2563eb;
    color: #fff;
    border: none;
    padding: .6rem 1rem;
    border-radius: 8px;
    cursor: pointer;
    font-size: .9rem;
}
button:hover {
    background: #1d4ed8;
}
</style>
</head>
<body>
<main>
    <h1>Joke of the Day</h1>
    <p class="joke"><?php echo htmlspecialchars($joke, ENT_QUOTES | ENT_SUBSTITUTE, 'UTF-8'); ?></p>
  <form method="post">
    <button type="submit">Neuer Witz</button>
  </form>
  <small>Quellen: icanhazdadjoke.com, jokeapi.dev</small>
</main>
</body>
</html>
