<?php

//presi dal docker-compose

$host = 'db';
$dbname = 'root_db';
$user = 'user';
$password = 'user';
$port = 3306;


$connection = new mysqli($host, $user, $password, $dbname, $port);

if ($connection->connect_error){
    die("Connection failed: " . $connection->connect_error);
}

echo "Connessione al database avvenuta con successo!";
$connection->close();
?>
