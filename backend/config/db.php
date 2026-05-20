<?php
// Connessione PDO a PostgreSQL usando DATABASE_URL
$url_database = getenv('DATABASE_URL');
if (!$url_database) {
    throw new Exception('DATABASE_URL non impostato');
}
$parametri = parse_url($url_database);
if ($parametri === false || empty($parametri['host']) || empty($parametri['path'])) {
    throw new Exception('DATABASE_URL non valida');
}
$host = $parametri['host'];
$porta = $parametri['port'] ?? 5432;
$nome_database = ltrim($parametri['path'], '/');
$utente = $parametri['user'] ?? '';
$password = $parametri['pass'] ?? '';
$dsn = "pgsql:host={$host};port={$porta};dbname={$nome_database}";
try {<?php

declare(strict_types=1);

// ======================================
// CONFIGURAZIONE DATABASE
// ======================================

// Se esiste DATABASE_URL usa quella
$url_database = getenv('DATABASE_URL');

if ($url_database) {
    $parametri = parse_url($url_database);

    if (
        $parametri === false ||
        empty($parametri['host']) ||
        empty($parametri['path'])
    ) {
        throw new Exception('DATABASE_URL non valida');
    }

    $host = $parametri['host'];
    $porta = isset($parametri['port']) ? (int)$parametri['port'] : 5432;
    $nome_database = ltrim($parametri['path'], '/');
    $utente = $parametri['user'] ?? '';
    $password = $parametri['pass'] ?? '';
} else {
    // Session Pooler Supabase
    $host = getenv('DB_HOST') ?: 'aws-1-eu-west-2.pooler.supabase.com';
    $porta = (int)(getenv('DB_PORT') ?: 5432);
    $nome_database = getenv('DB_NAME') ?: 'postgres';
    $utente = getenv('DB_USER') ?: 'postgres.dtxasfkglhooiynogatl';
    $password = getenv('DB_PASS') ?: 'Drinkcraft2026';
}

if ($host === '' || $nome_database === '' || $utente === '' || $password === '') {
    die('Configurazione database incompleta.');
}

// ======================================
// CONNESSIONE PDO
// ======================================

$dsn = "pgsql:host={$host};port={$porta};dbname={$nome_database};sslmode=require";

try {
    $pdo = new PDO(
        $dsn,
        $utente,
        $password,
        [
            PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION,
            PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC,
        ] 
    );
} catch (PDOException $errore) {
    error_log('Errore DB: ' . $errore->getMessage());
    die('Impossibile connettersi al database.');
}

// ======================================
// FUNZIONE CONNESSIONE
// ======================================

function connessione_database(): PDO
{
    global $pdo;
    return $pdo;
}
    $pdo = new PDO(
        $dsn,
        $utente,
        $password,
        [
            PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION,
            PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC,
        ]
    );
} catch (PDOException $errore) {
    error_log('Errore DB: ' . $errore->getMessage());
    throw new Exception('Impossibile connettersi al database');
}

function connessione_database(): PDO
{
    global $pdo;
    return $pdo;
}
