<?php

require_once 'globals.php';

try{

$db_name =DB_NAME;
$db_host = DB_HOST;

$dsn = "mysql:host=$db_host;dbname=$db_name";


$pdo = new PDO($dsn, DB_USER, DB_PASSWORD);
$pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

} catch (PDOException $e) {
    echo "Message:" . $e->getMessage();


//var_dump($pdo);