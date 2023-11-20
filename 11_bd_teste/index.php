<?php
session_start();
if (!isset($_SESSION["login"])) {
  header("Location:login/pages-login.php");
  die();
}
include_once 'database/bd_conf.php';
?>
<?php
require 'template/Header.php';
?>
<link rel="stylesheet" href="css/style.css">
<!-- modificar isso-->
<main id="main" class="main">

  <div class="pagetitle">
    <h1>Dashboard</h1>
    <nav>
      <ol class="breadcrumb">
        <li class="breadcrumb-item active">Dashboard</li>
      </ol>
    </nav>
  </div><!-- End Page Title -->

  <section class="section dashboard">
    <div class="row">

      <!--tabelas  -->
      <div class="col-lg-8">
        <div class="row">

          <!-- Sales Card -->
          <div class="col-xxl-4 col-md-6">
            <div class="card info-card sales-card">

              <div class="filter">
                <a class="icon" href="#" data-bs-toggle="dropdown"><i class="bi bi-three-dots"></i></a>
                <ul class="dropdown-menu dropdown-menu-end dropdown-menu-arrow">
                  <li class="dropdown-header text-start">
                    <h6>Filter</h6>
                  </li>

                  <li><a class="dropdown-item" href="#">Today</a></li>
                  <li><a class="dropdown-item" href="#">This Month</a></li>
                  <li><a class="dropdown-item" href="#">This Year</a></li>
                </ul>
              </div>

              <!-- Card dos produtos-->
              <div class="card-body">
                <h4 class="card-title"> Produtos
                  <?php

                  $sql = "SELECT COUNT(id) AS produtos FROM produto";
                  $stmt = $conn->prepare($sql);
                  $stmt->execute();
                  $contprod = $stmt->fetch(PDO::FETCH_ASSOC);
                  echo $contprod['produtos']
                    ?>
                </h4>

                <div class="d-flex align-items-center">
                  <div class="card-icon rounded-circle d-flex align-items-center justify-content-center">
                    <i class="bi bi-cart"></i>
                  </div>
                  <div class="ps-5">
                    <!-- botao -->
                    <a href="crud/produtos/read.php">
                      <div class="uiverse">
                        <span>Entrar</span>
                      </div>
                    </a>
                    <!-- End botao -->
                  </div>
                </div>
              </div>

            </div>
          </div><!-- End Sales Card -->

          <!--  Card funcionarios -->

          <div class="col-xxl-4 col-md-5">

            <div class="card info-card revenue-card">

              <div class="filter">
                <a class="icon" href="../login/login.php" data-bs-toggle="dropdown"><i class="bi bi-three-dots"></i></a>
                <ul class="dropdown-menu dropdown-menu-end dropdown-menu-arrow">
                  <li class="dropdown-header text-start">
                  </li>

                </ul>
              </div>

              <div class="card-body">
                <h5 class="card-title">Funcionarios <span>| Today</span></h5>

                <div class="d-flex align-items-center">
                  <div class="card-icon rounded-circle d-flex align-items-center justify-content-center">
                    <i class="bi bi-currency-dollar"></i>
                  </div>
                  <div class="ps-5">
                    <!-- botao -->
                    <a href="crud/produtos/error.php">
                      <div class="uiverse">
                        <span>Entrar</span>
                      </div>
                    </a>
                    <!-- End botao -->

                  </div>
                </div>
              </div>

            </div>
          </div><!-- Card funcionarios  -->

          
        </div>
      </div><!-- End tabelas -->



    </div><!-- End Right side columns -->

  </section>

</main><!-- End #main -->


<?php
require 'template/Footer.php';
?>