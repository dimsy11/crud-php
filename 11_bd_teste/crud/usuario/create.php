<?php

//Criar a consulta SQL (para inserir os dados no banco de dados.)
require '../../database/bd_conf.php';

$usuario = $_POST["newusuario"];
$senha = $_POST["newsenha"];
$CPF = $_POST["newCPF"];


$sql = "INSERT INTO admin (usuario, senha, CPF) VALUES (:usuario, :senha, :CPF)";

$res = $conn->prepare($sql);

$res->bindParam(":usuario", $usuario);
$res->bindParam(":senha", $senha);
$res->bindParam(":CPF", $CPF);
header("location:../../login/login_conta_criada.php");


$res->execute();


// if (isset($_POST["newusuario"]) && isset($_POST["newsenha"])) {

//     $usuario = $_POST["newusuario"];
//     $senha = $_POST["newsenha"];
//     $CPF = $_POST["newCPF"];

//     //INSERT INTO `admin` (`id`, `CPF`, `usuario`, `senha`) VALUES (NULL, $usuario, 'Feijó', $CPF);
//     $sql = "SELECT * FROM admin WHERE usuario = :usuario AND senha = :senha AND CPF = :CPF";

//     $stml = $conn->prepare($sql);
//     $stml->bindParam(":usuario", $usuario);
//     $stml->bindParam(":senha", $senha);
//     $stml->bindParam(":CPF", $CPF);

//     $stml->execute();


//     if ($stml->rowcount() == 1) {

//         header("location:../../login/conta_criada.php");

//     } else {

//     }

// }




/*
$sql = "INSERT INTO admin (usuario, senha, CPF) VALUES (:usuario, :senha, :CPF)";

$res = $conn->prepare($sql);

$res->bindParam(":usuario", $usuario);
$res->bindParam(":senha", $senha);
$res->bindParam(":CPF", $CPF);
$res->execute();

if ($conn->query($sql) === TRUE) {
    header("location:../../login/conta_criada.php");
    //colocar o negocio para entra no login conta criada
} else {
    // echo "Erro ao criar registro: "; 
}
*/

?>