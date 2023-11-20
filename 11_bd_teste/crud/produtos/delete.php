<?php 
// session_start();
// if (!isset($_SESSION["login"])) {
//   header("Location:login/pages-login.php");
//   die();
//   }


require '../../database/bd_conf.php';
?>
<link rel="stylesheet" href="../../css/style.css">

<?php 
// try {


//   // sql to delete a record
//   $sql = "DELETE FROM produto WHERE id= :id";

//   // use exec() because no results are returned
//   $conn->exec($sql);
//   echo "Record deleted successfully";
// } catch(PDOException $e) {
//   echo $sql . "<br>" . $e->getMessage();
// }

// $conn = null;

$id = $_GET["productId"];
 
if ($id) {

  $sql = $conn->prepare( "DELETE FROM produto WHERE id = :id");
  $sql->bindParam(':id',$id);

  $sql->execute();
  require 'read.php';
}

?>