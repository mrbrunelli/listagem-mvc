<?php

require_once __DIR__ . "/../core/database.php";

$campos[0] = "ano_de_lancamento";
$campos[1] = "duracao_do_filme";
$campos[2] = "preco_da_locacao";

$or = $_GET['or'];

$list = $pdo->query("SELECT * FROM filme ORDER BY {$campos[$or]}");

$list->execute();

$data = $list->fetchAll();

require_once __DIR__ . "/../views/filme.php";
