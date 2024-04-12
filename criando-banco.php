<?php

$dbPah = __DIR__ . "/banco.sqlite";
$pdo = new PDO("sqlite:$dbPah");
$pdo->exec('CREATE TABLE videos (id INTEGER PRIMARY KEY, url TEXT, title TEXT);');

//$pdo->exec('ALTER TABLE videos ADD url TEXT');
