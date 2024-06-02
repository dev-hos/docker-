<?php

const DBHOST = 'mysql';
const DBUSER = 'test';
const DBPASS = 'pass';
const DBNAME = 'demo';

$dsn = 'mysql:host='. DBHOST. ';dbname='. DBNAME;

try {
    $pdo = new PDO($dsn, DBUSER, DBPASS);
} catch (PDOException $e) {
    echo 'Echec' . $e->getMessage();
}