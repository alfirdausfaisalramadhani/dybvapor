<?php 
    session_start();
      if(!isset($_SESSION['login_user'])) {
        header("location: index.php");
      }else{
?>

<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">
    <link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="index.css">
    <link rel="stylesheet" type="text/css" href="fontawesome/css/all.min.css">

    <title>DYB VAPOR STORE</title>
  </head>
  <body>

    <nav class="navbar navbar-expand-lg bg-dark sticky-top">
        <div class="container">
        <a class="navbar-brand text-warning js-scroll-trigger" href="admin.php"><strong>DYB VAPOR</strong></a>
        <button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" data-target="#navbarResponsive"
        aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
          Menu
                    <i class="fas fa-bars ml-1"></i>
        </button>
        <div class="collapse navbar-collapse" id="navbarResponsive">
          <ul class="navbar-nav ml-auto">
            <li class="nav-item">
              <a class="nav-link mr-3 js-scroll-trigger" href="admin.php">HOME</a>
            </li>
            <li class="nav-item">
              <a class="nav-link mr-3 js-scroll-trigger" href="daftar_menu.php">TAMBAH ITEM</a>
            </li>
            <li class="nav-item">
              <a class="nav-link mr-3 js-scroll-trigger" href="pesanan.php">CEK ORDER</a>
            </li>
            <li class="nav-item">
              <a class="nav-link mr-3 js-scroll-trigger" href="logout.php">LOGOUT</a>
            </li>
          </ul>
        </div>
        </div> 
      </nav>

    <header>
      <div class="jumbotron jumbotron-fluid text-center">
        <div class="container">
          <h1 class="display-4 text-xl-center"><span class="font-weight-bold text-warning">WELCOME TO DYB VAPOR</span></h1>
          <p class="lead font-weight-bold text-warning">THE BEST SERVICE FOR YOU IS OUR SATISFACTION</p>
        </div>
      </div>
    </header>

    <section class="page-section bg-light">   
      <div class="container">
        <div class="row mb-5 mt-5 d-flex justify-content-center">
          <div class="col-lg-4 col-sm-6">
            <div class="card bg-dark text-white border-light">
              <img src="assets/img/map.png" class="card-img" alt="Lihat Daftar Menu">
              <div class="card-img-overlay mt-5 text-center">
                <a href="menu_pembeli.php" class="btn btn-warning d-flex justify-content-center">TAMBAH ITEM</a>
              </div>
            </div>
          </div>

          <div class="col-lg-4 col-sm-6">
            <div class="card bg-dark text-white border-light">
              <img src="assets/img/map.png" class="card-img" alt="Lihat Pesanan">
              <div class="card-img-overlay mt-5 text-center">
                <a href="pesanan_pembeli.php" class="btn btn-warning d-flex justify-content-center">CEK ORDER</a>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>

        <footer class="footer bg-dark py-4">
            <div class="container"><div class="small text-center text-muted">DYB VAPOR - Copyright©2021</div></div>
        </footer>

    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js" integrity="sha384-OgVRvuATP1z7JjHLkuOU7Xw704+h835Lr+6QL9UvYjZE3Ipu6Tp75j7Bh/kR0JKI" crossorigin="anonymous"></script>
    <script type="text/javascript" src="js/bootstrap.min.js"></script>
    <script type="text/javascript" src="js/jquery.js"></script>
  </body>
</html>
<?php } ?>