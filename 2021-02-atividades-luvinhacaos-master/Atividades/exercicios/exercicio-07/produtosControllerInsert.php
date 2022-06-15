<?php

require_once 'connection.php';

$id = $_POST['id'];
$nome = $_POST['nome'];
$um = $_POST['um'];

if (empty($id) || empty($nome) || empty($um)) {
  echo '<div> <a href="produtosViewInsert.php"> Voltar </a> </div>';
  die('Preencha todos os dados!');
}

try {

  $connection->beginTransaction();

  $stmt = $connection->prepare("INSERT INTO produtos (id, nome, um) VALUES (:id, :nome, :um)");

  $stmt->bindParam(':id', $id);
  $stmt->bindParam(':nome', $nome);
  $stmt->bindParam(':um', $um);

  $stmt->execute();

  $connection->commit();

  header('Location: index.php');
  exit();
} catch (Exception $p) {
  $connection->rollBack();
  die("Não foi possível cadastrar o produto: " . $p->getMessage());
}
