# AI Coding Starter Kit – PHP + MariaDB

> **Reines PHP/MySQL‑Starter‑Kit** für produktionsreife Apps – ohne Node.js.

Dieses Template ist auf **klassische PHP‑Entwicklung** ausgelegt:
- ✅ **PHP 8.4 + MariaDB 10.3.32** als Basis
- ✅ **KI‑Agenten** für Requirements → Architektur → Frontend → Backend → QA → Deployment
- ✅ **Produktions‑Guides** (Security, Performance, Deployment)
- ✅ **Feature‑Changelog‑System** für sauberes Tracking
- ✅ **Optional:** **n8n** für Automationen & Workflows

---

## Schnellstart

### 1. Klonen

```bash
git clone https://github.com/YOUR_USERNAME/ai-coding-starter-kit.git my-project
cd my-project
```

### 2. Environment‑Variablen

```bash
cp .env.example .env
```

Passe die DB‑Zugangsdaten in `.env` an.

### 3. Entwicklungsserver starten

```bash
php -S localhost:8000 -t public
```

Öffne [http://localhost:8000](http://localhost:8000) im Browser.

---

## Projektstruktur

```
ai-coding-starter-kit/
├── .claude/
│   └── agents/              ← KI‑Agenten (Requirements, Architect, Frontend, Backend, QA, DevOps)
├── config/                  ← Konfiguration (z.B. Datenbank)
├── features/                ← Feature‑Specs + Testergebnisse
├── migrations/              ← SQL‑Migrations
├── public/                  ← Public Web Root (index.php)
├── src/                     ← PHP‑Code (Services, Repositories, etc.)
├── bootstrap.php            ← Bootstrap (Env + DB)
├── PROJECT_CONTEXT.md       ← Projekt‑Dokumentation
├── TEMPLATE_CHANGELOG.md    ← Template‑Versionshistorie
└── .env.example             ← Environment‑Variablen‑Vorlage
```

---

## Tech Stack

| Kategorie | Tool | Warum? |
|----------|------|--------|
| **Sprache** | PHP 8.4 | Stabil, weit verbreitet |
| **Datenbank** | MariaDB 10.3.32 | SQL‑Standard, performant |
| **Deployment** | Nginx/Apache + PHP‑FPM | Klassisches PHP‑Hosting |
| **Automationen (optional)** | n8n | Workflows + Integrationen |

---

## n8n (Optional)

Wenn du Automationen brauchst (z.B. Webhooks, Cron‑Jobs, Integrationen):

- Verbinde n8n via Webhooks mit deiner PHP‑API
- Lege `N8N_BASE_URL`/`N8N_WEBHOOK_SECRET` in `.env` an

---

## Agent‑Team‑Workflow

### 1. Anforderungen
```bash
# Sage Claude:
"Lies .claude/agents/requirements-engineer.md und erstelle eine Feature‑Spezifikation für [deine Idee]."
```

### 2. Architektur
```bash
# Sage Claude:
"Lies .claude/agents/solution-architect.md und entwirf die Architektur für /features/PROJ-1-feature.md"
```

### 3. Umsetzung (Frontend/Backend)
```bash
# Sage Claude:
"Lies .claude/agents/backend-dev.md und implementiere /features/PROJ-1-feature.md"

# Optional UI/Views:
"Lies .claude/agents/frontend-dev.md und implementiere /features/PROJ-1-feature.md"
```

### 4. Testen
```bash
# Sage Claude:
"Lies .claude/agents/qa-engineer.md und teste /features/PROJ-1-feature.md"
```

### 5. Deployment
```bash
# Sage Claude:
"Lies .claude/agents/devops.md und deploye auf deinem PHP‑Hosting"
```

---

## Nächste Schritte

1. **PROJECT_CONTEXT.md ausfüllen**
2. **Erstes Feature definieren** (Requirements → Architektur → Backend)
3. **Migrations & APIs implementieren**
4. **Optional: n8n anbinden**

Viel Erfolg! 🚀
