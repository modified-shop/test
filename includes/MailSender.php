<?php

declare(strict_types=1);

namespace App\Service;

/**
 * MailSender Klasse
 * Verantwortlich für das Versenden von E-Mails
 */
class MailSender
{
    private string $from;
    private string $charset;

    /**
     * Konstruktor
     *
     * @param string $from Standard-Absender-Adresse
     * @param string $charset Standard-Zeichensatz
     */
    public function __construct(string $from = 'noreply@test-system.local', string $charset = 'UTF-8')
    {
        $this->from = $from;
        $this->charset = $charset;
    }

    /**
     * Sendet eine E-Mail
     *
     * @param string $to Empfänger-Adresse
     * @param string $subject Betreff
     * @param string $message Nachricht
     * @param string|null $from Optionale abweichende Absender-Adresse
     * @return bool True bei Erfolg, False bei Fehler
     */
    public function send(string $to, string $subject, string $message, ?string $from = null): bool
    {
        $headers = $this->buildHeaders($from ?? $this->from);
        return mail($to, $subject, $message, $headers);
    }

    /**
     * Erstellt die E-Mail-Header
     *
     * @param string $from Absender-Adresse
     * @return string Header-String
     */
    private function buildHeaders(string $from): string
    {
        $headers = "From: $from\r\n";
        $headers .= "Content-Type: text/plain; charset=$this->charset\r\n";
        return $headers;
    }

    /**
     * Setzt die Standard-Absender-Adresse
     *
     * @param string $from Absender-Adresse
     */
    public function setFrom(string $from): void
    {
        $this->from = $from;
    }

    /**
     * Setzt den Standard-Zeichensatz
     *
     * @param string $charset Zeichensatz
     */
    public function setCharset(string $charset): void
    {
        $this->charset = $charset;
    }
}
