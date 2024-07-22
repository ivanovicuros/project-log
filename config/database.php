<?php
// phpinfo();
$host     = 'localhost';
$port     = '5432';
$user     = 'urosivanovic';
$password = 'Bagzisha10$';
$port     = '5432';
$dbname   = 'test';

// Set DSN
$dsn = "pgsql:host=$host;port=$port;dbname=$dbname";

// Create a PDO instance
$pdo = new PDO($dsn, $user, $password);

# PDO QUERY

$statement = $pdo->query('SELECT * FROM car');

while($row = $statement->fetch(PDO::FETCH_ASSOC)) {
    echo $row['model'] . '<br>';
}