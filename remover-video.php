<?php

$dbPah = __DIR__ . "/banco.sqlite";
$pdo = new PDO("sqlite:$dbPah");

$id = $_GET['id'];
$sql = 'DELETE FROM videos where id = ?';
$statemante = $pdo->prepare($sql);
$statemante->bindValue(1, $id);
$statemante->execute();
header('Location: /index.php');