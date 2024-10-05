<?php
require_once realpath(__DIR__ . "vendor/autoload.php");
// phpinfo();

use Dotenv\Dotenv;

$dotenv = Dotenv::createImmutable(__DIR__);
$dotenv->load();

$host     = getenv("HOST");
$port     = getenv("DB_PORT");
$user     = getenv("DB_USER");
$password = getenv("DB_PASSWORD");
$dbname   = getenv("DB_NAME");

// Set DSN
$dsn = "pgsql:host=$host;port=$port;dbname=$dbname";

// Create a PDO instance
$pdo = new PDO($dsn, $user, $password);

# PDO QUERY

$statement = $pdo->query('SELECT * FROM car');

while($row = $statement->fetch(PDO::FETCH_ASSOC)) {
    echo $row['model'] . '<br>';
}