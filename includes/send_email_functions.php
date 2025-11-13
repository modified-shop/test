<?php

declare(strict_types=1);

use App\Service\MailSender;

/**
 * Erstellt die E-Mail-Nachricht
 *
 * @return string Die formatierte E-Mail-Nachricht
 */
function createEmailMessage(): string
{
    $message = "Hallo liebes modified-shop Team! 👋\n\n";
    $message .= "Ein mutiger Admin hat gerade auf einen mysteriösen Button geklickt...\n\n";
    $message .= "🤡 Witz des Tages:\n";
    $message .= "Letzter Wunsch des Programmierers:\n";
    $message .= "Bitte ein Bit. 🍺🍺🍺\n\n";
    $message .= "Wie viele Software-Entwickler braucht man, um eine Glühbirne zu wechseln?\n";
    $message .= "Keinen. Das ist ein Hardware-Problem.\n\n";
    $message .= "Mit freundlichen Grüßen,\n";
    $message .= "Ihr automatisiertes E-Mail-System\n\n";
    $message .= "P.S.: Diese E-Mail wurde am " . date('d.m.Y \u\m H:i:s') . " Uhr versendet.\n";

    return $message;
}

/**
 * Gibt eine Erfolgsmeldung aus
 *
 * @param string $to Empfänger-Adresse
 * @param string $subject Betreff
 * @param string $message Nachricht
 */
function displaySuccessMessage(string $to, string $subject, string $message): void
{
    echo "✅ E-Mail erfolgreich versendet an $to!<br>";
    echo "📧 Betreff: $subject<br>";
    echo "<hr>";
    echo "<h3>Nachricht:</h3>";
    echo "<pre>" . htmlspecialchars($message) . "</pre>";
}

/**
 * Gibt eine Fehlermeldung aus
 */
function displayErrorMessage(): void
{
    echo "❌ Fehler beim Versenden der E-Mail.";
}
