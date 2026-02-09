# PHP 8.4 Backend (MariaDB 10.3.32)

Dieses Template ist auf ein **separates PHP-Backend** ausgelegt. Die Frontend-App kann z.B. weiterhin Next.js nutzen, während die APIs in PHP 8.4 laufen.

## Empfohlene Struktur

```
backend/
├── public/
│   └── api/
│       └── tasks.php
├── src/
│   ├── Controllers/
│   ├── Services/
│   ├── Repositories/
│   └── Validation/
├── config/
│   └── database.php
├── migrations/
├── bootstrap.php
└── .env
```

## Environment Variables (.env)

```bash
APP_ENV=local
APP_DEBUG=true

DB_HOST=127.0.0.1
DB_PORT=3306
DB_NAME=your_database
DB_USER=your_user
DB_PASSWORD=your_password
```

## Hinweise
- Nutze **PDO + Prepared Statements** für alle Queries.
- Lege SQL-Migrations in `backend/migrations/` ab.
- Verwende serverseitige Validation (z.B. Respect/Validation) für alle Inputs.
- Für Auth: Session oder JWT, abhängig vom Feature.
