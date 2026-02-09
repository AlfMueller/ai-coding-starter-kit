# AI Coding Starter Kit – Production-Ready Template

> **Build scalable, production-ready web apps faster** with AI agents handling Requirements, Architecture, Development, QA, and Deployment.

This template includes everything you need for professional AI-powered development:
- ✅ **Next.js 16** (latest) with TypeScript + Tailwind CSS
- ✅ **6 Production-Ready AI Agents** (Requirements → Deployment)
- ✅ **Production Guides** (Error Tracking, Security, Performance, Scaling)
- ✅ **Feature Changelog System** (Agents know what already exists → Code Reuse)
- ✅ **PM-Friendly** (No code in specs, automatic handoffs between agents)
- ✅ **PHP 8.4 + MariaDB 10.3.32 Backend** (statt Supabase/Node.js)
- ✅ **shadcn/ui-Ready** (add components as needed)
- ✅ **Deployment-Ready** (PHP-FPM + Nginx/Apache)

---

## Quick Start

### 1. Clone & Install

```bash
git clone https://github.com/YOUR_USERNAME/ai-coding-starter-kit.git my-project
cd my-project
npm install
```

### 2. (Optional) PHP + MariaDB Backend Setup

Wenn du ein Backend brauchst:

1. Richte eine MariaDB 10.3.32 Datenbank ein
2. Kopiere `.env.local.example` zu `.env.local` (oder `.env` im PHP-Backend)
3. Trage deine DB-Zugangsdaten ein
4. Implementiere die API in PHP 8.4 (siehe `backend/README.md` für Struktur)

**Skip this step** wenn du nur Frontend baust (Landing Pages, Portfolio, etc.)

### 3. Start Development Server

```bash
npm run dev
```

Open [http://localhost:3000](http://localhost:3000) in your browser.

### 4. Use AI Agents

⚠️ **Important:** Agents are **not Skills** – you can't call them with `/requirements-engineer`!

**How to use Agents:**

```
Hey Claude, read .claude/agents/requirements-engineer.md and create a feature spec for [your idea].
```

**Full Guide:** See [HOW_TO_USE_AGENTS.md](HOW_TO_USE_AGENTS.md)

**Available Agents:**
- `requirements-engineer.md` - Feature Specs with interactive questions
- `solution-architect.md` - PM-friendly Tech Design (no code snippets)
- `frontend-dev.md` - UI Components + Automatic Backend/QA Handoff
- `backend-dev.md` - APIs + Database + **Performance Best Practices**
- `qa-engineer.md` - Testing + Regression Tests
- `devops.md` - Deployment + **Production-Ready Essentials**

---

## Project Structure

```
ai-coding-starter-kit/
├── .claude/
│   └── agents/              ← 6 AI Agents (Production-Ready)
├── features/                ← Feature Specs (includes specs, test results, deployment status)
│   └── README.md
├── src/
│   ├── app/                 ← Pages (Next.js App Router)
│   │   ├── layout.tsx
│   │   ├── page.tsx
│   │   └── globals.css
│   ├── components/          ← React Components
│   │   └── ui/              ← shadcn/ui components (add as needed)
│   └── lib/                 ← Utility functions
│       └── utils.ts
├── backend/                 ← PHP 8.4 API (optional, separate service)
├── public/                  ← Static files
├── PROJECT_CONTEXT.md       ← Project Documentation (fill this out!)
├── TEMPLATE_CHANGELOG.md    ← Template Version History (v1.0 - v1.3)
├── HOW_TO_USE_AGENTS.md     ← Agent Usage Guide
├── .env.local.example       ← Environment Variables Template
└── package.json
```

---

## Production-Ready Features ⚡

This template includes production-readiness guides integrated into the agents:

### DevOps Agent includes:
- **Error Tracking Setup** (Sentry) – 5-minute setup with code examples
- **Security Headers** (XSS/Clickjacking Protection) – Copy-paste `next.config.js`
- **Environment Variables Best Practices** – Secrets management
- **Performance Monitoring** (Lighthouse) – Built-in Chrome DevTools

### Backend Agent includes:
- **Database Indexing** – Make queries 10-100x faster
- **Query Optimization** – Avoid N+1 problems with SQL joins
- **Caching Strategy** – PHP OPcache/Redis examples
- **Input Validation** – Server-side validation best practices
- **Rate Limiting** – Optional Redis/NGINX rate limiting

All guides are **practical** with **copy-paste code examples** – no theory!

---

## Agent-Team Workflow

### 1. Requirements Phase
```bash
# Tell Claude:
"Read .claude/agents/requirements-engineer.md and create a feature spec for [your idea]"
```

Agent asks questions → You answer → Agent creates Feature Spec in `/features/PROJ-1-feature.md`

### 2. Architecture Phase
```bash
# Tell Claude:
"Read .claude/agents/solution-architect.md and design the architecture for /features/PROJ-1-feature.md"
```

Agent designs PM-friendly Tech Design (no code!) → You review

### 3. Implementation Phase
```bash
# Frontend:
"Read .claude/agents/frontend-dev.md and implement /features/PROJ-1-feature.md"

# Backend (PHP + MariaDB):
"Read .claude/agents/backend-dev.md and implement /features/PROJ-1-feature.md"
```

**Note:** Frontend Agent automatically checks if Backend is needed and hands off to QA when done!

### 4. Testing Phase
```bash
# Tell Claude:
"Read .claude/agents/qa-engineer.md and test /features/PROJ-1-feature.md"
```

Agent tests all Acceptance Criteria → Adds test results to feature spec

### 5. Deployment Phase
```bash
# Tell Claude:
"Read .claude/agents/devops.md and deploy to your PHP hosting"
```

Agent guides you through deployment + Production-Ready setup (Error Tracking, Security, Performance)

---

## Tech Stack

| Category | Tool | Why? |
|----------|------|------|
| **Framework** | Next.js 16 | React + Server Components + Routing |
| **Language** | TypeScript | Type Safety |
| **Styling** | Tailwind CSS | Utility-First CSS |
| **UI Library** | shadcn/ui | Copy-Paste Components |
| **Backend** | PHP 8.4 + MariaDB 10.3.32 | REST APIs + SQL |
| **Deployment** | Nginx/Apache + PHP-FPM | Standard PHP hosting |
| **Error Tracking** | Sentry (optional) | Production Error Monitoring |

---

## Next Steps

1. **Fill out PROJECT_CONTEXT.md**
   - Define your vision
   - Add features to roadmap

2. **Build your first feature**
   - Use Requirements Engineer for Feature Spec
   - Follow the Agent-Team workflow

3. **Add shadcn/ui components** (as needed)
   ```bash
   npx shadcn@latest add button
   npx shadcn@latest add card
   # etc.
   ```

4. **Production Setup** (first deployment)
   - Follow DevOps Agent guides:
     - Error Tracking (Sentry) – 5 minutes
     - Security Headers (`next.config.js`) – Copy-paste
     - Performance Check (Lighthouse) – Chrome DevTools

5. **Deploy**
   - Push to GitHub
   - Deploy Frontend (z.B. Vercel) und Backend (PHP Hosting)
   - Use DevOps Agent for deployment help

---

## What's Included

### ✅ Works out-of-the-box

- Next.js 16 with App Router
- TypeScript (strict mode)
- Tailwind CSS (configured)
- ESLint 9 (Next.js defaults)
- 6 Production-Ready AI Agents
- Feature Changelog System (Code-Reuse!)
- Project Structure (best practices)
- Environment Variables Setup
- .gitignore (Node modules, .env, etc.)

### 📦 You add yourself

- shadcn/ui Components (as needed)
- PHP 8.4 + MariaDB Backend Setup (optional)
- Your Features (with Agent-Team)
- Production Setup (Error Tracking, Security Headers)

---

## Why This Template?

### For Product Managers
- **No deep tech background needed** – Agents explain in PM-friendly language
- **Automatic handoffs** – Frontend → Backend Check → QA (no manual coordination)
- **Production-ready** – Security, Performance, Error Tracking included

### For Solo Founders
- **Build faster** – Agents handle Requirements → Deployment
- **Built for scale** – Database indexing, query optimization, caching
- **MVP to Production** – One template for both

### For Small Teams (2-5 people)
- **Consistent workflow** – Everyone follows the same agent system
- **Code reuse** – Git history shows what exists, prevents duplication
- **Knowledge sharing** – All decisions documented in Feature Specs

---

## Documentation

### Template Docs
- [HOW_TO_USE_AGENTS.md](HOW_TO_USE_AGENTS.md) – Agent usage guide
- [PROJECT_CONTEXT.md](PROJECT_CONTEXT.md) – Project documentation template
- [TEMPLATE_CHANGELOG.md](TEMPLATE_CHANGELOG.md) – Template version history
- [features/README.md](features/README.md) – Feature spec format

### External Docs
- [Next.js Docs](https://nextjs.org/docs)
- [Tailwind CSS Docs](https://tailwindcss.com/docs)
- [shadcn/ui Docs](https://ui.shadcn.com)
- [PHP Docs](https://www.php.net/docs.php)
- [MariaDB Docs](https://mariadb.com/kb/en/documentation/)

---

## Scripts

```bash
npm run dev        # Start development server (localhost:3000)
npm run build      # Production build
npm run start      # Start production server
npm run lint       # Run ESLint
```

---

## Template Versions

**Current:** v1.4.0 (Git-Based Workflow)

See [TEMPLATE_CHANGELOG.md](TEMPLATE_CHANGELOG.md) for full version history.

**Updates:**
- v1.4.0 – Git-Based Workflow (removed FEATURE_CHANGELOG, test-reports)
- v1.3.0 – Production-Ready Guides (Error Tracking, Security, Performance)
- v1.2.0 – Agent System Improvements (Interactive Questions, PM-Friendly Output)
- v1.1.0 – Enhanced Documentation
- v1.0.0 – Initial Release

---

## License

MIT License – feel free to use for your projects!

---

**Built with AI Agent Team System + Claude Code** 🚀

Ready to build production-ready apps? Start with the Requirements Engineer!

```bash
"Read .claude/agents/requirements-engineer.md and create a feature spec for [your idea]"
```
