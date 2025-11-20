# Contributing zum modified-shop System

Vielen Dank, dass du zu modified-shop beitragen möchtest. Dieses Dokument soll dir helfen, dich im Projekt zurechtzufinden.

## 1. Kommunikation & Verhalten

- Sei respektvoll und konstruktiv.
- Lies bitte auch unseren [Code of Conduct](./CODE_OF_CONDUCT.md), falls vorhanden.
- Nutze GitHub-Issues nur für Bugs und Feature-Requests, nicht für allgemeinen Support.

## 2. Issues erstellen

- Nutze die bereitgestellten Issue-Templates (Bug, Feature Request, Question).
- Beschreibe Problembeschreibung, Umgebung und Schritte zum Reproduzieren so genau wie möglich.
- Ein Issue pro Problem.

## 3. Branches & Pull Requests

- Änderungen gehen **immer** über Pull Requests in `main`.
- Erstelle Feature-Branches nach diesem Schema:
  - `feat/123-kurzbeschreibung`
  - `fix/456-bugfix`
  - `docs/789-doku-aktualisieren`
  - `refactor/321-code-aufraeumen`
- Stelle die Issue Nummer vorne an, wenn sich der Branch auf ein Issue bezieht.
- Ein PR sollte sich auf **ein** Thema konzentrieren.
- Für größere Änderungen:
  - Vorher einen Issue erstellen und diskutieren, bevor ein PR erstellt wird.

## 4. Welche Art von PRs akzeptieren wir?

- ✅ Fokusierte Bugfixes mit klarer Beschreibung und Reproduktion.
- ✅ Kleine, klar abgegrenzte Features, die ein Issue referenzieren.
- ✅ Refactorings, wenn:
  - sie erklärten Nutzen haben (Lesbarkeit, Testbarkeit, etc.),
  - und idealerweise durch Tests abgesichert sind.
- ⚠️ Reine Formatierungs-PRs nur, wenn ein offizielles Tool (z. B. `phpcs` / `php-cs-fixer`) verwendet wird.
- ❌ Wir akzeptieren in der Regel **nicht**:
  - „Alles-mal-aufgeräumt“-PRs mit riesigem Diff ohne Issue.
  - Vermischung von Style-Änderungen und Logikänderungen.
  - PRs ohne Beschreibung.
  - Neue Features die nicht vorher im Issue diskutiert wurden.

## 5. Coding-Standards

- PHP-Code folgt [PSR-12](https://www.php-fig.org/psr/psr-12/).
- Bitte nutze unser `phpcs.xml.dist` / `.php-cs-fixer.dist.php`, um deinen Code vor dem Commit zu prüfen.
- Templates, JS, CSS folgen den jeweiligen Styleguides (siehe `/docs/coding-style.md`).

## 6. Tests

- Wenn du Code änderst, der bereits getestet wird:
  - Aktualisiere die bestehenden Tests.
- Falls keine Tests existieren:
  - Beschreibe im PR, wie du getestet hast.
- Langfristiges Ziel ist es, Testabdeckung auszubauen, kleine Schritte sind willkommen.

## 7. Releases & Versionierung

- Wir verwenden [SemVer](https://semver.org/lang/de/) (MAJOR.MINOR.PATCH).
- Breaking Changes müssen in der Release-Planung diskutiert und dokumentiert werden.
