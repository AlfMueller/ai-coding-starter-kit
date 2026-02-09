# Wie nutze ich die AI Agents?

## ⚠️ Wichtig: Das sind KEINE Claude Code Skills!

Die Agent-Files in `.claude/agents/` sind **keine registrierten Skills** im Claude Code System.

Du kannst sie **nicht** mit `/requirements-engineer` aufrufen.

## ✅ So nutzt du die Agents richtig:

### Methode 1: Referenziere die Agent-Files im Chat (Empfohlen)

```
Hey Claude, lies bitte die Datei .claude/agents/requirements-engineer.md
und handle genau nach diesen Anweisungen.

Ich möchte ein User-Authentifizierung Feature bauen.
[... beschreibe dein Feature ...]
```

**Warum funktioniert das?**
- Claude liest die Agent-Instructions
- Befolgt den Workflow (inkl. AskUserQuestion für interaktive Fragen!)
- Erstellt Output wie im Agent definiert

---

### Methode 2: Copy-Paste Agent-Instructions in Custom Prompts

1. Öffne `.claude/agents/requirements-engineer.md`
2. Kopiere den Inhalt
3. Erstelle einen eigenen Prompt:

```
Du bist ein Requirements Engineer. [paste Agent-Instructions]

Jetzt erstelle eine Feature Spec für: [deine Feature-Idee]
```

---

## 🎯 Best Practice Workflow

### Phase 1: Requirements

```markdown
Hey Claude, lies .claude/agents/requirements-engineer.md und handle danach.

Ich möchte ein Kanban-Board Feature für mein Projekt bauen.
User sollen Tasks zwischen Columns verschieben können (Drag & Drop).
```

**Claude wird:**
1. ✅ `AskUserQuestion` nutzen für interaktive Single/Multiple-Choice Fragen
2. ✅ Edge Cases klären (mit AskUserQuestion)
3. ✅ Feature Spec erstellen in `/features/PROJ-X.md`
4. ✅ Finale Approval fragen (mit AskUserQuestion)

---

### Phase 2: Architecture

```markdown
Hey Claude, lies .claude/agents/solution-architect.md und handle danach.

Lies die Feature Spec in /features/PROJ-1-kanban-board.md und
designe die Tech-Infrastruktur (Database Schema, Components, APIs).
```

**Claude wird:**
1. ✅ Feature Spec lesen
2. ✅ Fragen stellen (mit AskUserQuestion)
3. ✅ Database Schema + API Endpoints designen
4. ✅ Spec erweitern mit Tech-Design

---

### Phase 3: Implementation (Frontend/Backend)

```markdown
Hey Claude, lies .claude/agents/backend-dev.md und handle danach.

Lies /features/PROJ-1-kanban-board.md und baue die APIs + Database.

# Optional UI/Views:
Hey Claude, lies .claude/agents/frontend-dev.md und handle danach.

Lies /features/PROJ-1-kanban-board.md und baue die UI-Views.
```

---

### Phase 4: Testing

```markdown
Hey Claude, lies .claude/agents/qa-engineer.md und handle danach.

Teste das Kanban-Board Feature gegen die Acceptance Criteria
in /features/PROJ-1-kanban-board.md.
```

---

### Phase 5: Deployment

```markdown
Hey Claude, lies .claude/agents/devops.md und handle danach.

Deploy das Projekt auf dein PHP Hosting (Production).
```

---

## 💡 Pro-Tipps

### 1. Voice-First Development (empfohlen!)

Nutze Whispr Flow (oder Apple Dictation):

```
*Hotkey drücken, sprechen:*

"Hey Claude, lies bitte die Datei punkt claude slash agents slash
requirements engineer punkt md und handle genau danach.

Ich möchte ein Kanban-Board Feature bauen.
User sollen Tasks per Drag and Drop verschieben können.
Das Board soll drei Spalten haben: Todo, In Progress, Done.

Ein paar Details die mir wichtig sind:
- Mobile-friendly, also Touch-Support
- Real-time Updates wenn mehrere User gleichzeitig arbeiten
- Tasks sollen Priorities haben

Kannst du mit mir durchgehen, wie wir das am besten umsetzen?"
```

**Vorteil:**
- 3x schneller als Tippen
- Mehr Context automatisch
- Natürlicher Flow

---

### 2. Nutze Plan Mode für komplexe Features

Für größere Features:

```markdown
Hey Claude, bitte starte im Plan Mode.

Lies .claude/agents/requirements-engineer.md und erstelle
eine Feature Spec für [komplexes Feature].
```

**Plan Mode Benefits:**
- Claude exploriert Codebase zuerst
- Stellt durchdachte Fragen
- User approved Plan bevor Implementation

---

### 3. Agents in Serie nutzen

Ein Feature komplett durchbauen:

```markdown
Phase 1: Lies .claude/agents/requirements-engineer.md → Erstelle Spec
[Warte auf Output]

Phase 2: Lies .claude/agents/solution-architect.md → Designe Infrastruktur
[Warte auf Output]

Phase 3: Lies .claude/agents/backend-dev.md → Baue APIs
[Optional] Lies .claude/agents/frontend-dev.md → Baue UI-Views
[Warte auf Output]

Phase 4: Lies .claude/agents/qa-engineer.md → Teste
[Warte auf Output]

Phase 5: Lies .claude/agents/devops.md → Deploy
```

**Tipp:** Nutze `/clear` zwischen Phasen für bessere Performance!

---

## 🔄 Warum `.claude/agents/` statt `.claude/skills/`?

**Skills** sind registrierte Commands im Claude Code System (z.B. `/commit`, `/review-pr`).

**Agents** in diesem Template sind **Prompt-Templates** / **Role-Definitions**.

Sie sind **nicht** im System registriert, aber genauso mächtig wenn du sie referenzierst!

---

## ⚡ Quick Reference

| Agent | File | Wann nutzen? |
|-------|------|--------------|
| **Requirements Engineer** | `.claude/agents/requirements-engineer.md` | Feature-Idee → Spec |
| **Solution Architect** | `.claude/agents/solution-architect.md` | Spec → Tech-Design |
| **Frontend Developer** | `.claude/agents/frontend-dev.md` | Design → Views + UI |
| **Backend Developer** | `.claude/agents/backend-dev.md` | Design → APIs + DB |
| **QA Engineer** | `.claude/agents/qa-engineer.md` | Implementation → Testing |
| **DevOps** | `.claude/agents/devops.md` | Tested → Production |

---

## 🎓 Beispiel: Kompletter Workflow

**Feature:** User-Authentifizierung

### 1. Requirements (5-10 Min)

```
Hey Claude, lies .claude/agents/requirements-engineer.md und handle danach.

Ich möchte User-Authentifizierung bauen.
```

**Claude antwortet mit AskUserQuestion:**
- Zielgruppe? (Single/Multiple-Choice)
- MVP Features? (Multiple-Choice: Email, Google OAuth, etc.)
- Session-Persistence? (Single-Choice: Ja/Nein/Remember Me)
- Edge Cases? (Was bei doppelter Email?)

**Output:** `/features/PROJ-1-user-authentication.md`

---

### 2. Architecture (5 Min)

```
Hey Claude, lies .claude/agents/solution-architect.md und handle danach.

Lies /features/PROJ-1-user-authentication.md und designe die Infrastruktur.
```

**Output:** Database Schema + API Endpoints

---

### 3. Frontend/Backend (15 Min)

```
Hey Claude, lies .claude/agents/backend-dev.md und handle danach.

Lies /features/PROJ-1-user-authentication.md und baue die APIs.

# Optional UI/Views:
Hey Claude, lies .claude/agents/frontend-dev.md und handle danach.

Lies /features/PROJ-1-user-authentication.md und baue die UI-Views.
```

**Output:** MariaDB SQL Migrations, Auth-Logik in PHP, API Routes (+ optional Views)

---

### 4. Testing (10 Min)

```
Hey Claude, lies .claude/agents/qa-engineer.md und handle danach.

Teste PROJ-1 gegen Acceptance Criteria.
```

**Output:** Test-Report mit Bugs (falls vorhanden)

---

### 5. Deployment (5 Min)

```
Hey Claude, lies .claude/agents/devops.md und handle danach.

Deploy zu deinem PHP Hosting.
```

**Output:** Production URL

---

**Gesamt:** ~45 Minuten für production-ready Feature 🚀

---

## 🆘 Troubleshooting

### "Claude ignoriert die Agent-Instructions"

**Lösung:** Sei expliziter im Prompt:

```
Hey Claude, lies GENAU die Datei .claude/agents/requirements-engineer.md
und befolge ALLE Anweisungen darin, inklusive der Nutzung von AskUserQuestion!
```

---

### "AskUserQuestion wird nicht genutzt"

**Lösung:** Claude muss wissen, dass das Tool verfügbar ist:

```
Hey Claude, lies .claude/agents/requirements-engineer.md.

WICHTIG: Nutze das AskUserQuestion Tool für alle Fragen
(Single/Multiple-Choice statt Text-Fragen)!
```

---

### "Zu viele Fragen auf einmal"

**Lösung:** Claude sollte max. 3-4 Fragen pro AskUserQuestion Batch stellen.

Gib Feedback:
```
Bitte stelle nicht mehr als 3 Fragen gleichzeitig.
```

---

## ✅ Ready to start!

Probier es aus:

```
Hey Claude, lies .claude/agents/requirements-engineer.md und handle danach.

Ich möchte [deine Feature-Idee].
```

Viel Erfolg! 🚀
