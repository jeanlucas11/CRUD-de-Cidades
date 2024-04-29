<?php 
require 'config.php';

$id = filter_input(INPUT_GET,'id');

if($id) {
  $sql = $pdo->prepare("DELETE FROM cities WHERE id = :id");
  $sql->bindValue(':id', $id);
  $sql->execute();
}

header("Location: index.php");

?>
<!-- excluir a cidade da tabela -->