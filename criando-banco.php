<?php

$dbPah = __DIR__ . "/banco.sqlite";
$pdo = new PDO("sqlite:$dbPah");
$pdo->exec('CREATE TABLE videos (id INTEGER PRIMARY KEY, title TEXT);');
echo "Conectei";

