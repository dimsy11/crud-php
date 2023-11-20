<?php 
  // session_start();
  // if (!isset($_SESSION["login"])) {
  //   header("Location:login/pages-login.php");
  //   die();
  // }
?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>farias</title>
  <meta content="" name="description">
  <meta content="" name="keywords">


  <!-- Template Main CSS File -->
  <link href="css/style.css" rel="stylesheet">

  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
  <script defer src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
  <script defer src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js" integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r" crossorigin="anonymous"></script>
  <script defer src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.min.js" integrity="sha384-BBtl+eGJRgqQAUMxJ7pMwbEyER4l1g+O15P+16Ep7Q9Q+zqX6gSbd85u4mG4QzX+" crossorigin="anonymous"></script>

</head>

<body>
<?php  
// require '../database/bd_conf.php';
?>
  <!-- ======= Header ======= -->
  <header id="header" class="header fixed-top d-flex align-items-center">

    <div class="d-flex align-items-center justify-content-between">
      <a href="../index.php" class="logo d-flex align-items-center">
        <span class="d-none d-lg-block">  DIMSY</span>
      </a>

    </div><!-- End Logo -->

    <nav class="header-nav ms-auto">

      
<!-- AJEITAR ISSO  DEPOIS, as coisas de cima-->

<!-- modificar isso -->
<div class="btn-group" role="group">
<button type="button" class="btn " >
<?php echo $_SESSION["login"]; ?>
</button>
</div>
<a  href="login/pages-login.php">
<button type="button" class="btn btn-danger" >sair</button>
</a>
<!-- End Profile Nav -->

</nav>

  </header>
  <!-- End Header -->
  




  <!-- ======= Sidebar ======= -->
  <aside id="sidebar" class="sidebar">


    <ul class="sidebar-nav" id="sidebar-nav">

      <li class="nav-item">
        <a class="nav-link " href="index.php">
          <i class="bi bi-grid"></i>
          <span>Dashboard</span>
        </a>
      </li><!-- End pagina Nav -->

      <li class="nav-item">
        <a class="nav-link collapsed" data-bs-target="#forms-nav" href="index.php">
          <i class="bi bi-journal-text"></i>
          <span>painel inicial</span>
          <i class="bi bi-chevron-down ms-auto"></i>
        </a>
      </li><!-- End pagina inicial Nav -->


      <li class="nav-heading">Pages</li>

      <li class="nav-item">
        <a class="nav-link collapsed" href="crud/produtos/read.php">
          <i class="bi bi-person"></i>
          <span>Produtos</span>
        </a>
      </li><!-- End produtos Nav -->

      <li class="nav-item">
        <a class="nav-link collapsed" href="crud/produtos/error.php">
          <i class="bi bi-question-circle"></i>
          <span>Funcionarios</span>
        </a>
      </li><!-- End Funcionarios Nav -->

    </ul>

  </aside>
  <!-- End Sidebar-->