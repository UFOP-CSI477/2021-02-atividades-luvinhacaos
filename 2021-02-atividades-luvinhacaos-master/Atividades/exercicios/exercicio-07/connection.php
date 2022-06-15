<?php

$dbfile = "./db/produtos.sqlite";
$dbuser = "";
$dbpassword = "";
$dbhost = "";

$strConnection = "sqlite:" . $dbfile;

$connection = new PDO($strConnection, $dbuser, $dbpassword);

$produtos = $connection->query("SELECT * FROM produtos");
