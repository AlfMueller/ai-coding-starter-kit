# AI Coding Starter Kit – PHP + MariaDB

> Reines PHP‑Template mit AI‑Agent‑Workflow (ohne Node.js).

## Vision
Build web applications faster with AI agents handling Requirements, Architecture, Frontend + Backend Development, QA, and Deployment. Each agent has clear responsibilities and a human-in-the-loop workflow for quality control.

---

## Aktueller Status
Template ready – starte mit deinem ersten Feature!

---

## Tech Stack

### Backend
- **Sprache:** PHP 8.4
- **Database:** MariaDB 10.3.32
- **API Style:** REST (klassisch), optional JSON‑Responses

### Deployment
- **Hosting:** PHP Hosting (Nginx/Apache + PHP‑FPM)

### Optional
- **Automationen:** n8n (Webhooks, Integrationen, Cron‑Workflows)

---

## Features Roadmap

### Your Features Will Appear Here

Start by defining your first feature using the Requirements Engineer agent:
```
Read .claude/agents/requirements-engineer.md and create a feature spec for [your feature idea]
```

Example roadmap structure:
- [PROJ-1] Your First Feature → 🔵 Planned → [Spec](/features/PROJ-1-feature-name.md)
- [PROJ-2] Your Second Feature → ⚪ Backlog

---

## Status-Legende
- ⚪ Backlog (noch nicht gestartet)
- 🔵 Planned (Requirements geschrieben)
- 🟡 In Review (User reviewt)
- 🟢 In Development (Wird gebaut)
- ✅ Done (Live + getestet)

---

## Development Workflow

1. **Requirements Engineer** erstellt Feature Spec → User reviewt
2. **Solution Architect** designed Schema/Architecture → User approved
3. **PROJECT_CONTEXT.md** Roadmap updaten (Status: 🔵 Planned → 🟢 In Development)
4. **Frontend/Backend Dev** implementiert Views/APIs + SQL → User testet
5. **QA Engineer** führt Tests aus → Bugs werden gemeldet
6. **DevOps** deployed → Status: ✅ Done

---

## Environment Variables

```bash
APP_ENV=local
APP_DEBUG=true

DB_HOST=127.0.0.1
DB_PORT=3306
DB_NAME=your_database
DB_USER=your_user
DB_PASSWORD=your_password

# Optional: n8n Webhooks
# N8N_BASE_URL=https://your-n8n-instance.example.com
# N8N_WEBHOOK_SECRET=change-me
```

---

## Agent-Team Verantwortlichkeiten

- **Requirements Engineer** (`.claude/agents/requirements-engineer.md`)
  - Feature Specs in `/features` erstellen
  - User Stories + Acceptance Criteria + Edge Cases

- **Solution Architect** (`.claude/agents/solution-architect.md`)
  - Database Schema + Component Architecture designen
  - Tech-Entscheidungen treffen

- **Frontend Developer** (`.claude/agents/frontend-dev.md`)
  - PHP Views + HTML/CSS umsetzen (ohne Node.js)
  - Responsives Layout + Accessibility

- **Backend Developer** (`.claude/agents/backend-dev.md`)
  - PHP APIs + SQL Queries (prepared statements)
  - API Routes + Server-Side Logic

- **QA Engineer** (`.claude/agents/qa-engineer.md`)
  - Features gegen Acceptance Criteria testen
  - Bugs dokumentieren + priorisieren

- **DevOps** (`.claude/agents/devops.md`)
  - Deployment zu PHP Hosting (Nginx/Apache)
  - Environment Variables verwalten
  - Production-Ready Essentials (Security, Performance)

---

## Production-Ready Features

This template includes production-readiness guides integrated into the agents:

- **Error Tracking:** Sentry setup instructions (DevOps Agent)
- **Security Headers:** XSS/Clickjacking protection (DevOps Agent)
- **Performance:** Database indexing, query optimization (Backend Agent)
- **Input Validation:** Server-side validation best practices (Backend Agent)
- **Caching:** OPcache/Redis examples (Backend Agent)

All guides are practical and include code examples ready to copy-paste.

---

## Folder Structure

```
ai-coding-starter-kit/
├── .claude/
│   └── agents/              ← 6 AI Agents (Requirements, Architect, Frontend, Backend, QA, DevOps)
├── config/                  ← Config (DB)
├── features/                ← Feature Specs
├── migrations/              ← SQL migrations
├── public/                  ← Public web root
├── src/                     ← PHP classes
├── bootstrap.php            ← Bootstrap
├── PROJECT_CONTEXT.md       ← This file
└── .env.example             ← Environment template
```

---

## Getting Started

1. **Environment Variables:**
   ```bash
   cp .env.example .env
   # Add your DB credentials
   ```

2. **Start development server:**
   ```bash
   php -S localhost:8000 -t public
   ```

3. **Start using the AI Agent workflow:**
   - Tell Claude to read `.claude/agents/requirements-engineer.md` and define your first feature
   - Follow the workflow: Requirements → Architecture → Backend → QA → Deployment

---

**Built with AI Agent Team System + Claude Code**
