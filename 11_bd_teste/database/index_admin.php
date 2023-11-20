<?php

session_destroy();
session_start();


if (isset($_POST["login"]) && isset($_POST["senha"])) {
  $usuario = $_POST["login"];
  $senha = $_POST["senha"];


  require 'bd_conf.php';

  $sql = "SELECT * FROM admin WHERE usuario = :usuario AND senha = :senha";
  $stml = $conn->prepare($sql);
  $stml->bindparam(':usuario', $usuario);
  $stml->bindparam(':senha', $senha);
  $stml->execute();


  if ($stml->rowcount() == 1) {

    $_SESSION["login"] = $usuario;
    header("Location:../index.php");

  } else {

    header("Location:../login/login-errouu.php");
  
  }

}

?>