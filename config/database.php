<?php
$db_connection = pg_connect("host=localhost dbname=test user=urosivanovic password=password");

if ($db_connection) {
    echo "Connection to PostgreSQL database successful!";
} else {
    echo "Connection to PostgreSQL database failed!";
}