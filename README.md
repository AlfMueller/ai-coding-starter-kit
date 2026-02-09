# AI Coding Starter Kit – Produktionsreifes Template

> **Baue skalierbare, produktionsreife Web-Apps schneller** – mit KI‑Agenten für Anforderungen, Architektur, Entwicklung, QA und Deployment.

Dieses Template enthält alles, was du für professionelle KI‑gestützte Entwicklung brauchst:
- ✅ **Next.js 16** (aktuell) mit TypeScript + Tailwind CSS
- ✅ **6 produktionsreife KI‑Agenten** (Anforderungen → Deployment)
- ✅ **Produktions‑Guides** (Error Tracking, Security, Performance, Scaling)
- ✅ **Feature‑Changelog‑System** (Agenten wissen, was schon existiert → Code‑Reuse)
- ✅ **PM‑freundlich** (keine Code‑Snippets in Specs, automatische Übergaben zwischen Agenten)
- ✅ **PHP 8.4 + MariaDB 10.3.32 Backend** (statt Supabase/Node.js)
- ✅ **shadcn/ui‑bereit** (Komponenten nach Bedarf hinzufügen)
- ✅ **Deployment‑ready** (PHP‑FPM + Nginx/Apache)

---

## Schnellstart

### 1. Klonen & Installieren

```bash
git clone https://github.com/YOUR_USERNAME/ai-coding-starter-kit.git my-project
cd my-project
npm install
```

### 2. (Optional) PHP + MariaDB Backend Setup

Wenn du ein Backend brauchst:

1. Richte eine MariaDB 10.3.32 Datenbank ein
2. Kopiere `.env.local.example` zu `.env.local` (oder `.env` im PHP‑Backend)
3. Trage deine DB‑Zugangsdaten ein
4. Implementiere die API in PHP 8.4 (siehe `backend/README.md` für Struktur)

**Diesen Schritt überspringen**, wenn du nur Frontend baust (Landing Pages, Portfolio, etc.).

### 3. Entwicklungsserver starten

```bash
npm run dev
```

Öffne [http://localhost:3000](http://localhost:3000) im Browser.

### 4. KI‑Agenten nutzen

⚠️ **Wichtig:** Agenten sind **keine Skills** – du kannst sie nicht mit `/requirements-engineer` aufrufen!

**So nutzt du Agenten:**

```
Hey Claude, lies .claude/agents/requirements-engineer.md und erstelle eine Feature‑Spezifikation für [deine Idee].
```

**Vollständiger Guide:** Siehe [HOW_TO_USE_AGENTS.md](HOW_TO_USE_AGENTS.md)

**Verfügbare Agenten:**
- `requirements-engineer.md` – Feature‑Specs mit interaktiven Fragen
- `solution-architect.md` – PM‑freundliches Tech‑Design (keine Code‑Snippets)
- `frontend-dev.md` – UI‑Komponenten + automatische Backend/QA‑Übergabe
- `backend-dev.md` – APIs + Datenbank + **Performance‑Best‑Practices**
- `qa-engineer.md` – Testing + Regression‑Tests
- `devops.md` – Deployment + **Production‑Ready Essentials**

---

## Projektstruktur

```
ai-coding-starter-kit/
├── .claude/
│   └── agents/              ← 6 KI‑Agenten (produktionsreif)
├── features/                ← Feature‑Specs (inkl. Spezifikationen, Testergebnisse, Deployment‑Status)
│   └── README.md
├── src/
│   ├── app/                 ← Pages (Next.js App Router)
│   │   ├── layout.tsx
│   │   ├── page.tsx
│   │   └── globals.css
│   ├── components/          ← React‑Komponenten
│   │   └── ui/              ← shadcn/ui‑Komponenten (bei Bedarf hinzufügen)
│   └── lib/                 ← Utility‑Funktionen
│       └── utils.ts
├── backend/                 ← PHP 8.4 API (optional, separater Service)
├── public/                  ← Statische Dateien
├── PROJECT_CONTEXT.md       ← Projekt‑Dokumentation (bitte ausfüllen!)
├── TEMPLATE_CHANGELOG.md    ← Template‑Versionshistorie (v1.0 – v1.3)
├── HOW_TO_USE_AGENTS.md     ← Agenten‑Nutzungsanleitung
├── .env.local.example       ← Environment‑Variablen‑Vorlage
└── package.json
```

---

## Produktionsreife Features ⚡

Dieses Template enthält produktionsreife Guides, die in die Agenten integriert sind:

### DevOps‑Agent beinhaltet:
- **Error‑Tracking‑Setup** (Sentry) – 5‑Minuten‑Setup mit Code‑Beispielen
- **Security Headers** (XSS/Clickjacking‑Schutz) – Copy‑Paste `next.config.js`
- **Best Practices für Environment‑Variablen** – Secrets‑Management
- **Performance‑Monitoring** (Lighthouse) – integrierte Chrome DevTools

### Backend‑Agent beinhaltet:
- **Datenbank‑Indexierung** – Queries 10–100x schneller machen
- **Query‑Optimierung** – N+1‑Probleme mit SQL‑Joins vermeiden
- **Caching‑Strategie** – PHP OPcache/Redis‑Beispiele
- **Input‑Validierung** – Best Practices für Server‑Side‑Validierung
- **Rate Limiting** – Optionales Redis/NGINX‑Rate‑Limiting

Alle Guides sind **praxisnah** mit **Copy‑Paste‑Code‑Beispielen** – keine Theorie!

---

## Agent‑Team‑Workflow

### 1. Anforderungen
```bash
# Sage Claude:
"Lies .claude/agents/requirements-engineer.md und erstelle eine Feature‑Spezifikation für [deine Idee]"
```

Agent stellt Fragen → Du antwortest → Agent erstellt Feature‑Spec in `/features/PROJ-1-feature.md`

### 2. Architektur
```bash
# Sage Claude:
"Lies .claude/agents/solution-architect.md und entwirf die Architektur für /features/PROJ-1-feature.md"
```

Agent erstellt PM‑freundliches Tech‑Design (kein Code!) → Du prüfst

### 3. Umsetzung
```bash
# Frontend:
"Lies .claude/agents/frontend-dev.md und implementiere /features/PROJ-1-feature.md"

# Backend (PHP + MariaDB):
"Lies .claude/agents/backend-dev.md und implementiere /features/PROJ-1-feature.md"
```

**Hinweis:** Der Frontend‑Agent prüft automatisch, ob ein Backend nötig ist, und übergibt nach Abschluss an QA!

### 4. Testen
```bash
# Sage Claude:
"Lies .claude/agents/qa-engineer.md und teste /features/PROJ-1-feature.md"
```

Agent testet alle Akzeptanzkriterien → fügt Testergebnisse zur Feature‑Spec hinzu

### 5. Deployment
```bash
# Sage Claude:
"Lies .claude/agents/devops.md und deploye auf deinem PHP‑Hosting"
```

Agent führt dich durch Deployment + Produktions‑Setup (Error Tracking, Security, Performance)

---

## Tech Stack

| Kategorie | Tool | Warum? |
|----------|------|--------|
| **Framework** | Next.js 16 | React + Server Components + Routing |
| **Sprache** | TypeScript | Typsicherheit |
| **Styling** | Tailwind CSS | Utility‑First CSS |
| **UI‑Library** | shadcn/ui | Copy‑Paste‑Komponenten |
| **Backend** | PHP 8.4 + MariaDB 10.3.32 | REST‑APIs + SQL |
| **Deployment** | Nginx/Apache + PHP‑FPM | Standard‑PHP‑Hosting |
| **Error Tracking** | Sentry (optional) | Monitoring für Produktionsfehler |

---

## Nächste Schritte

1. **PROJECT_CONTEXT.md ausfüllen**
   - Definiere deine Vision
   - Füge Features zur Roadmap hinzu

2. **Dein erstes Feature bauen**
   - Requirements Engineer für die Feature‑Spec nutzen
   - Agent‑Team‑Workflow befolgen

3. **shadcn/ui‑Komponenten hinzufügen** (bei Bedarf)
   ```bash
   npx shadcn@latest add button
   npx shadcn@latest add card
   # etc.
   ```

4. **Produktions‑Setup** (erste Deployment‑Runde)
   - DevOps‑Agent‑Guides befolgen:
     - Error Tracking (Sentry) – 5 Minuten
     - Security Headers (`next.config.js`) – Copy‑Paste
     - Performance‑Check (Lighthouse) – Chrome DevTools
