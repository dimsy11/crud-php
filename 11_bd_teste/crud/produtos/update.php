<?php

session_start();
if (!isset($_SESSION["login"])) {
  header("Location:login/pages-login.php");
  die();
}

require '../../database/bd_conf.php';
?>
<link rel="stylesheet" href="../../css/style.css">

<?php

$id = filter_input(INPUT_POST, 'id');
$quantidade = filter_input(INPUT_POST, 'quantidade');
$preco = filter_input(INPUT_POST, 'preço');
$nome = filter_input(INPUT_POST, 'nome');

if ($id && $quantidade && $preco && $nome) {
  $sql = $conn->prepare("UPDATE produto SET nome = :nome, quantidade =:quantidade, preço= :preco WHERE id = :id");


  $sql->bindValue(':nome', $nome);
  $sql->bindValue(':quantidade', $quantidade);
  $sql->bindValue(':preco', $preco);
  $sql->bindValue(':id', $id);
  header("location:read.php");
  $sql->execute();
} else {


  echo 'DIMITRIZINdoPAPOCO';
}


?>