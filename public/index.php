<?php

declare(strict_types=1);

$connection = require dirname(__DIR__) . '/bootstrap.php';

header('Content-Type: application/json; charset=utf-8');

echo json_encode([
    'status' => 'ok',
    'message' => 'PHP + MariaDB starter kit is ready.',
    'database_configured' => getenv('DB_NAME') !== false,
    'timestamp' => (new DateTimeImmutable())->format(DATE_ATOM),
]);
