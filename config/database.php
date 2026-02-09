<?php

declare(strict_types=1);

return [
    'host' => getenv('DB_HOST') ?: '127.0.0.1',
    'port' => getenv('DB_PORT') ?: '3306',
    'database' => getenv('DB_NAME') ?: 'your_database',
    'username' => getenv('DB_USER') ?: 'your_user',
    'password' => getenv('DB_PASSWORD') ?: 'your_password',
];
