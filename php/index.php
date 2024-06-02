<?php

require_once 'connect.php';

$req = 'SELECT * FROM `clients`';

$stmt = $pdo->query($req);

$clients = $stmt->fetchAll(PDO::FETCH_ASSOC);

var_dump($clients);