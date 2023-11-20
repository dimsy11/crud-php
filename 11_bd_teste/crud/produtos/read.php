<?php
require 'Header.php';
require '../../database/bd_conf.php';
?>
<link rel="stylesheet" href="../../css/style.css">


<div id="main">
    <h1 class="text-primary">Pagina Inicial</h1>
    <div class=" d-flex p-2">
        <h3 class="col-10">Produtos: <?php
            $sql = "SELECT COUNT(id) AS produtos FROM produto";
            $stmt = $conn->prepare($sql);
            $stmt->execute();
            $contprod = $stmt->fetch(PDO::FETCH_ASSOC);
            echo  $contprod['produtos']
            ?>
        </h3>
        <div class="col-1">
            <a href="create_form.php">
                <button class="btn btn-success w-100" type="submit">cadastrar</button>
            </a>
        </div>
    </div>
    <table class="table main">
        <thead>
            <tr>
                <th class="col-1">id</th>
                <th class="col-4">nome</th>
                <th class="col-2">quantidade</th>
                <th class="col-2">preço</th>
                <th class="col-3">ações</th>
            </tr>
        </thead>

        <?php


    require_once "../../database/bd_conf.php";

    $stmt = $conn->prepare('SELECT * FROM produto');

    $stmt->execute();

    $produto = $stmt->fetchALL(PDO::FETCH_ASSOC);
    if ($produto) {

      foreach ($produto as $produtos) {
        echo "<tr>";
        echo '<th scope="row"> ' . $produtos['id'] . " <td>" . $produtos['nome'] . " </td> <td>" . $produtos['quantidade'] . " </td> <td>" . $produtos['preço'] . " </td> " . '<td><a onclick="confirmupdate(' . $produtos['id'] . ');" class="btn btn-warning">update</a>' . ' ' . ' <a onclick="confirmDelete(' . $produtos['id'] . ');" class="btn btn-danger"> delete </a></td>'; 
        echo "</tr>";
      }
    } else {
      echo '<div class="alert alert-danger" role="alert"> nenhum produto cadastrado </div>';
    }

    echo "</table>";

    ?>
</div>
<?php
require 'Footer.php';
?>

<script>
function confirmDelete(productId) {
    var confirmDelete = confirm("tem crtz q deseja deletar? ID=" + productId);

    if (confirmDelete) {
        window.location.href = "delete.php?productId=" + productId;
    }
}

function confirmupdate(productId) {
    var confirmupdate = confirm("tem crtz q deseja fazer um update? ID=" + productId);

    if (confirmupdate) {
        window.location.href = "form_update.php?productId=" + productId;
    }
}
</script>