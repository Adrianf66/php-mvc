<?php

$dbPah = __DIR__ . "/banco.sqlite";
$pdo = new PDO("sqlite:$dbPah");

$url = filter_input(INPUT_POST, 'url', FILTER_VALIDATE_URL);
$titulo = filter_input(INPUT_POST, 'title', FILTER_SANITIZE_STRING);
if($url === false || $titulo === false){
    header("Location: index.php");
    exit();
}


$sql = 'INSERT INTO videos (url, title) VALUES (?, ?)';
$statement = $pdo->prepare($sql);
$statement->bindValue(1, $url);
$statement->bindValue(2, $titulo);

$statement->execute();

header('Location: index.php');
