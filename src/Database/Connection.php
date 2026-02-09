<?php

declare(strict_types=1);

namespace StarterKit\Database;

use PDO;
use PDOException;

final class Connection
{
    /** @var array{host:string,port:string,database:string,username:string,password:string} */
    private array $config;

    /** @var PDO|null */
    private ?PDO $pdo = null;

    /** @param array{host:string,port:string,database:string,username:string,password:string} $config */
    public function __construct(array $config)
    {
        $this->config = $config;
    }

    public function pdo(): PDO
    {
        if ($this->pdo instanceof PDO) {
            return $this->pdo;
        }

        $dsn = sprintf(
            'mysql:host=%s;port=%s;dbname=%s;charset=utf8mb4',
            $this->config['host'],
            $this->config['port'],
            $this->config['database']
        );

        try {
            $this->pdo = new PDO($dsn, $this->config['username'], $this->config['password'], [
                PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION,
                PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC,
                PDO::ATTR_EMULATE_PREPARES => false,
            ]);
        } catch (PDOException $exception) {
            throw new PDOException('Database connection failed: ' . $exception->getMessage(), (int) $exception->getCode());
        }

        return $this->pdo;
    }
}
