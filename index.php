<?php
require 'config.php';
// require é como se fosse import

$lista = [];
$sql = $pdo->query("SELECT * FROM cities");
if($sql->rowCount() > 0){
  $lista = $sql->fetchAll(PDO::FETCH_ASSOC);
}
// para pegar oq tem dentro da tabela cities
?>

<h1>Cadastro de cidades</h1>

<table border="1">
  <tr>
    <th>ID</th>
    <th>Nome da cidade</th>
    <th>Ações</th>
  </tr>
  <?php foreach($lista as $cities): ?>

    <tr>
      <td><?=$cities['id']; ?></td>
      <td><?=$cities['name']; ?></td>
      <td>
        
        <a href="excluir.php?id=<?=$cities['id']; ?>">Excluir</a>
        
      </td>
    </tr>

    <?php endforeach; ?>

</table>
<a class="cadastrar" href="./cadastrar.php">Cadastrar cidade</a>

<link rel="stylesheet" href="style.css">