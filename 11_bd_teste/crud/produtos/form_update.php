<?php
session_start();
if (!isset($_SESSION["login"])) {
  header("Location:../../login/pages-login.php");
  die();
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>Pages / FARIAS UPDATE</title>
  <meta content="" name="description">
  <meta content="" name="keywords">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>

  <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js" integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r" crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.min.js" integrity="sha384-BBtl+eGJRgqQAUMxJ7pMwbEyER4l1g+O15P+16Ep7Q9Q+zqX6gSbd85u4mG4QzX+" crossorigin="anonymous"></script>
  <!-- Google Fonts -->


  <link href="../css/style.css" rel="stylesheet">

</head>

<body>
  <?php
  require '../../database/bd_conf.php';

  $id = $_GET["productId"];

  $dados = [];
  if ($id) {

    $sql = $conn->prepare("SELECT * FROM produto WHERE id = :id");
    $sql->bindvalue(':id', $id);
    $sql->execute();

    if ($sql->rowCount() > 0) {
      $dados = $sql->fetch(PDO::FETCH_ASSOC);
    }
  }
  ?>

  <!-- precisa de um prepare antes bindParam e um fach -->
  <!-- 
tem q criar um value em cada informacao e colocar um echo dentro dele contendo as informacoes q ja foram feitas ( 26 de outubro)-->

  <!-- nao sei fazer isso  tem q chamar o hugonbr -->


  <main>
    <div class="container">

      <section class="section register min-vh-100 d-flex flex-column align-items-center justify-content-center py-4">
        <div class="container">
          <div class="row justify-content-center">
            <div class="col-lg-4 col-md-6 d-flex flex-column align-items-center justify-content-center">

              <div class="d-flex justify-content-center py-4">
                <a href="index.html" class="logo d-flex align-items-center w-auto">

                </a>
              </div><!-- End Logo -->

              <div class="card mb-3">

                <div class="card-body">

                  <div class="pt-4 pb-2">
                    <h5 class="card-title text-center pb-0 fs-4">Modificar produtos</h5>
                  </div>

                  <form class="row g-3 needs-validation" action="update.php" method="POST">
                    <input type="hidden" name="id" value="<?= $dados['id']; ?>">
                    <div class="col-12">
                      <label for="yourUsername" class="form-label">nome</label>
                      <div class="input-group has-validation">
                        <input type="text" name="nome" class="form-control" id="yourUsername" required value="<?= $dados['nome']; ?>">
                        <input type="hidden" name="id" value="<?= $dados['id']; ?>">
                        <!-- <div class="invalid-feedback">Please enter your username.</div> -->
                      </div>
                    </div>

                    <div class="col-12">
                      <label for="yourPassword" class="form-label">Quantidade</label>
                      <input type="text" name="quantidade" class="form-control" id="yourPassword" required value=" <?= $dados['quantidade']; ?>">
                      <!-- <div class="invalid-feedback">Please enter your password!</div>-->
                    </div>

                    <div class="col-12">
                      <label for="yourPassword" class="form-label">Preço</label>
                      <input type="text" name="preço" class="form-control" id="yourPassword" required value=" <?= $dados['preço']; ?>">
                      <!-- <div class="invalid-feedback">Please enter your password!</div>-->
                    </div>


                    <a href="read.php">
                      <div>
                        <button class="btn btn-primary w-100" type="submit" name="acao">Enviar</button>

                      </div>
                    </a>

                    <a href="read.php">
                      <div>
                        <button class="btn btn-danger w-100">cancelar</button>

                      </div>
                    </a>

                  </form>

                </div>
              </div>
            </div>

      </section>

    </div>
</body>

</html>