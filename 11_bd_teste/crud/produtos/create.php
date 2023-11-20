<?php
require '../../database/bd_conf.php';


//  if(isset($_POST['nome'])){
//     $sql = $conn->prepare("INSERT INTO produto VALUES(null,?,?,?)");
//     $sql->execute(array($_POST['nome'],$_POST['quantidade'],$_POST['preco']));
//     echo"aaaaaaaaaaaaaaaaaaa";
//   }

$nome = $_POST["nome"];
$quantidade = $_POST["quantidade"];
$preco = $_POST["preco"];

$sql = "INSERT INTO produto (nome, quantidade, preço) VALUES (:nome, :quantidade, :preco)";



$res = $conn->prepare($sql);

$res->bindParam(":nome", $nome);
$res->bindParam(":quantidade", $quantidade);
$res->bindParam(":preco", $preco);
header("location:read.php");

$res->execute();

?>