<?php

define('__ROOT__', dirname(__DIR__));

require_once (__ROOT__."/vendor/autoload.php");

// phpinfo();

$dotenv = Dotenv\Dotenv::createImmutable(__ROOT__);
$dotenv->load();

$host     = $_ENV["HOST"];
$port     = $_ENV["DB_PORT"];
$user     = $_ENV["DB_USER"];
$password = $_ENV["DB_PASSWORD"];
$dbname   = $_ENV["DB_NAME"];

// Set DSN
$dsn = "pgsql:host=$host;port=$port;dbname=$dbname";

// Create a PDO instance
$pdo = new PDO($dsn, $user, $password);

# PDO QUERY

$statement = $pdo->query('SELECT * FROM car');

while($row = $statement->fetch(PDO::FETCH_ASSOC)) {
    echo $row['model'] . '<br>';
}