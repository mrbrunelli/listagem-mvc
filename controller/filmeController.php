<?php

require_once __DIR__ . "/../core/database.php";

$list = $pdo->query("SELECT * FROM filme");

$list->execute();

$data = $list->fetchAll();

require_once __DIR__ . "/../views/filme.php";
