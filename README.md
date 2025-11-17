# Test Projekt

Ein kleines Übungsprojekt zum Lernen von Git und GitHub.

## 🎯 Zweck

Dieses Repository dient dazu, sich mit Git-Befehlen und GitHub-Features vertraut zu machen:

- Branches erstellen und wechseln
- Commits erstellen und pushen
- Pull Requests bearbeiten
- Merge-Konflikte lösen

## 🚀 Nützliche Git-Befehle

```bash
git clone                   # Repository klonen
git checkout -b <branch>    # Erstellen eines Zweig-Branches aus dem aktuell ausgecheckten Branch
git status                  # Aktueller Status
git add .                   # Alle Änderungen hinzufügen
git add <file>              # Spezifische Änderungen hinzufügen
git commit -m "Message"     # Commit erstellen
git pull                    # Änderungen holen und (default) HEAD mergen
git push                    # Zum Remote-Repository pushen
```

## ✅ Best Practices
Um die Zusammenarbeit im Team zu optimieren, ist die Anwendung sogenannter Best Practices unerlässlich.
Deren konsequente Einhaltung steigert erheblich die Nachvollziehbarkeit der Änderungen, sowie die Wartbarkeit 
und dadurch maßgeblich die Qualität der Software. Folgende Empfehlungen haben sich etabliert:

- Tickernummern müssen im Branch-Namen erkenntlich sein
  -    origin/3050_main
- Änderungen sollten in kleineren Commits dokumentiert werden
  - einheitliche und englischsprachige Commit-Nachrichten verwenden
  - Ticketnummer in eckigen Klammern und kurzer Titel des Tickets
  - Präfixe wie z.B. fix, feat, docs, usw. verwenden
  - Der Betreff sollte mit einem Großbuchstaben beginnen
- regelmäßiges Synchronisieren des Forkes um Merge-Konflikte zu minimieren
### Example commit-msg:
```
# [3050] Betreffzeile (max. 50 Zeichen)
#
# Längere Beschreibung mit 72 Zeichen pro Zeile (wrapped)
# Kurz erklären warum die Änderungen gemacht wurden
# und welche Auswirkungen diese haben
#
# Link zum Ticket kann hier optional eingefügt werden
```


## 🥳 Git Online Browser Game
Wer ein paar Git Grundlagen lernen oder auffrischen möchte, für den ist folgendes
Browser Online Game etwas. In diesem Spiel kann man Git in kleinen Schritten spielerisch lernen.

- kein Download
- keine Anmeldung
- kostenlos

[learngitbranching.js.org DE](https://learngitbranching.js.org/?locale=de_DE)

*Einfach mal ausprobieren! 🧪*
