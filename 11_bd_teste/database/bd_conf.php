<?php
$servername = "localhost";
$username = "root";
$password = "";
$bd_nome = "controle_de_estoque";

try {
  $conn = new PDO("mysql:host=$servername;dbname=$bd_nome", $username, $password);
  // set the PDO error mode to exception
  $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
  // echo "Connected successfully";
} catch(PDOException $e) {
  echo "Connection failed: " . $e->getMessage();
  
}

?>

<?php 
//define ('host', 'localhost');
//define ('user', 'root');
//define ('pass', '');
//define ('base', 'controle_de_estoque');

//$conn = new mysqli(host,user,pass,base)
?>

