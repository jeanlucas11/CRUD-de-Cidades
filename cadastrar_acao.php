<?php
require 'config.php';

$name = filter_input(INPUT_POST,'name');

if($name){

  $sql = $pdo->prepare("SELECT * FROM cities WHERE name = :name");
  $sql->bindValue(':name', $name);
  $sql->execute();

  if($sql->rowCount() === 0){

    $sql = $pdo->prepare("INSERT INTO cities (name) VALUES (:name)");
    $sql->bindValue(':name', $name);
    $sql->execute();
    
    header("Location: index.php");
    exit;
    // exit sai do if
  } else{
    header("Location: cadastrar.php");
  }
  

} else {
  header("Location: cadastrar.php");
  exit;
}
// cadastro da ação