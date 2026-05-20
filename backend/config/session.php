<?php
// Avvia la sessione in modo centralizzato
if (session_status() === PHP_SESSION_NONE) {
    session_start();
}

function utente_loggato(): bool
{
    return !empty($_SESSION['id_utente']);
}

function esegui_login(int $id_utente, string $email, string $nome): void
{
    $_SESSION['id_utente'] = $id_utente;
    $_SESSION['email_utente'] = $email;
    $_SESSION['nome_utente'] = $nome;
}

function esegui_logout(): void
{
    $_SESSION = [];
    if (ini_get('session.use_cookies')) {
        $parametri = session_get_cookie_params();
        setcookie(
            session_name(),
            '',
            time() - 42000,
            $parametri['path'],
            $parametri['domain'],
            $parametri['secure'],
            $parametri['httponly']
        );
    }
    session_destroy();
}
