<?php
/**
 * Configuração de conexão com o banco de dados MySQL.
 * Ajuste os valores abaixo conforme o seu ambiente (XAMPP, WAMP, Laragon, servidor real, etc).
 */

define('DB_HOST', 'localhost');
define('DB_NAME', 'landing_page_informativa');
define('DB_USER', 'root');
define('DB_PASS', '');
define('DB_CHARSET', 'utf8mb4');

/**
 * Pasta onde as imagens enviadas pelo Admin são salvas.
 * Aponta para a pasta assets/img/ da própria Landing Page,
 * assumindo que a pasta /admin fica na raiz do projeto, ao lado de assets/.
 * Ajuste o caminho se a estrutura de pastas do seu projeto for diferente.
 */
define('UPLOAD_DIR', __DIR__ . '/../../assets/img/');
define('UPLOAD_URL', '../assets/img/');

function getConexao(): PDO
{
    static $pdo = null;

    if ($pdo === null) {
        $dsn = 'mysql:host=' . DB_HOST . ';dbname=' . DB_NAME . ';charset=' . DB_CHARSET;
        try {
            $pdo = new PDO($dsn, DB_USER, DB_PASS, [
                PDO::ATTR_ERRMODE            => PDO::ERRMODE_EXCEPTION,
                PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC,
                PDO::ATTR_EMULATE_PREPARES   => false,
            ]);
        } catch (PDOException $e) {
            http_response_code(500);
            die('Não foi possível conectar ao banco de dados. Verifique config/database.php. Detalhes: ' . htmlspecialchars($e->getMessage()));
        }
    }

    return $pdo;
}