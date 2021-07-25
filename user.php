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
        <a class="navbar-brand text-warning js-scroll-trigger" href="user.php"><strong>DYB VAPOR</strong></a>
        <button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" data-target="#navbarResponsive"
        aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
          Menu
                    <i class="fas fa-bars ml-1"></i>
        </button>
        <div class="collapse navbar-collapse" id="navbarResponsive">
          <ul class="navbar-nav ml-auto">
            <li class="nav-item">
              <a class="nav-link mr-3 js-scroll-trigger" href="user.php">HOME</a>
            </li>
            <li class="nav-item">
              <a class="nav-link mr-3 js-scroll-trigger" href="menu_pembeli.php">SHOP</a>
            </li>
            <li class="nav-item">
              <a class="nav-link mr-3 js-scroll-trigger" href="pesanan_pembeli.php">CEK ORDER</a>
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
                <a href="menu_pembeli.php" class="btn btn-warning d-flex justify-content-center">GO SHOP</a>
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

        <section class="page-section" id="history">
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-lg-8 text-center">
                        <hr class="divider light my-4" />
                        <h2 class="text-black mt-3">VAPE</h2>
                        <hr class="divider light my-4" />
                        <p class="text-black-50 mb-4">Rokok elektronik adalah sebuah inovasi dari bentuk rokok konvensional menjadi rokok modern. Rokok elektronik pertama kali dikembangkan pada tahun 2003 oleh SBT Co Ltd, sebuah perusahaan yang berbasis Beijing, RRC, yang sekarang dikuasai oleh Golden Dragon Group Ltd Pada tahun 2004, Ruyan mengambil alih proyek untuk mengembangkan teknologi yang muncul. Diserap secara resmi Ruyan SBT Co Ltd dan nama mereka diubah menjadi SBT RUYAN Technology & Development Co, Ltd.</p>
                        <br>
                        <p class="text-black-50 mb-4">Rokok elektronik diklaim sebagai rokok yang lebih sehat dan ramah lingkungan daripada rokok biasa dan tidak menimbulkan bau dan asap. Selain itu, rokok elektronik lebih hemat daripada rokok biasa karena bisa diisi ulang. Bentuknya seperti batang rokok biasa, tetapi tidak membakar tembakau seperti produk rokok konvensional. Rokok ini memanaskan cairan menggunakan baterai dan uapnya masuk ke paru-paru pemakai. Produk itu dipasarkan dengan banyak nama, di antaranya rokok elektronik, ecigarro, electro-smoke, green-cig, dan smartsmoker.</p>
                        <br>
                        <p class="text-black-50 mb-4">Rokok elektronik dianggap sebagai alat penolong bagi mereka yang kecanduan rokok supaya berhenti merokok. Alat ini dipasarkan sebagai alternatif yang lebih aman dari produk tembakau biasa. Label "HEALTH" pun terpasang jelas pada kemasannya. Namun hingga kini keberadaannya masih menuai kontroversi dan di sebagian besar negara dianggap sebagai produk yang ilegal dan terlarang.</p>
                    </div>
                </div>
            </div>
        </section>

        <section class="page-section" id="infodevice">
            <div class="container">
                <div class="text-center">
                    <hr class="divider light my-4" />
                    <h2 class="text-black mt-3">INFO DEVICE</h2>
                    <hr class="divider my-4" />
                    <h3 class="section-subheading text-muted">Mengenal bagian komponen vape</h3>
                </div>
                <div class="row text-center">
                    <div class="col-md-12">
                        <img src="assets/img/driptip.jpg" width="500" height="400">
                        <h4 class="my-3">Driptip</h4>
                        <p class="text-justify">Driptip adalah bagian paling ujung dari vape yang kita gunakan untuk menghidap uap yang di hasilkan vape Kebanyakan driptip berbentuk seperti pipa kecil yang ukuran diameter lubangnya berbeda-beda tergantung selera. Namun biasanya menyusaikan dengan body dan desain dari vape.</p>
                        <p class="text-justify">Desain driptip pun banyak pilihan karena bahkan hampir setiap pabrik vapor memiliki desain sendiri yang sama-sama unik. Tentunya hal ini juga di pengaruhi harga jualnya nanti. Sedangkan untuk bahan pembuatan driptip juga bervariasi mulai dari logam kemarik, nikel dan lainnya.</p>
                    </div>
                    <div class="col-md-12">
                        <img src="assets/img/rda.jpg" width="500" height="400">
                        <h4 class="my-3">Atomizer</h4>
                        <p class="text-justify">Atomizer adalah salah satu terdiri dari koil, eleqiud dan kapas berfungsi untuk proses pemanasan eliquid menjadi uap. Disinilah mesin utama dari vape karena di dalam atomizer terdapat banyak komponen penting lain yang sangat menentukan rasa serta enikmatan dari liquid.</p>
                        <p class="text-justify">Komponen penting yang ada di dalam atomizer yakni koli,  kapas vapor, , tube tank dan power button. Dengan fakta tersebyt maka bisa dikatakan bahwasannya atomizer merupakan satu kesatuan komponen yang saling mendukung dan sangat vital. Atomizer bak dapur rumah menjadi wadah pengolahan liqud menjadi uap melalui pemanasan koil yang berupa sumbu kawat dan di hubungkan di kedua kutub listrik dari baterai.</p>
                    </div>
                    <div class="col-md-12">
                        <img src="assets/img/mod2.jpg" width="500" height="400">
                        <h4 class="my-3">Mod</h4>
                        <p class="text-justify">Mod atau Box adalah Dimana sebuah bagian dari vaporizer biasanya berbentuk tabung atau box yang berfungsi untuk menampung baterai dan komponen chip elektrik pendukung untuk bisa dialirkan ke koil. Mod vape sendiri di bagi menjadi 2 yakni mechanical mod atau banyak yang menyebut mod mecha dan yang kedua mod elektrik.</p>
                    </div>
                    <div class="col-md-12">
                        <img src="assets/img/liquid.png" width="500" height="400">
                        <h4 class="my-3">Liquid</h4>
                        <p class="text-justify">Liquid adalah suatu ramuan caoran yang terdiri dari beberapa bahan seperti air, vegatebel, nikotin dan aroma perasa yang nantinya akan di ubah menjadi uap sehingga bisa kita hirup lewat drip. Liquid merupakan cairan yang ada dalam tangki atomizer atau bisa teteskan ke dalam kapas, lalu koil akan dipanaskan menjadi uap yang miliki rasa dan aroma yang nikmat.</p>
                    </div>
                    <div class="col-md-12">
                        <img src="assets/img/baterai1.jpg" width="500" height="400">
                        <h4 class="my-3">Baterai</h4>
                        <p class="text-justify">Baterai tak kalah penting dengan bagian vapor lainnya yang sudah kita ulas. Baterai untuk vapor tidak boleh sembarang baterai agar perangkat anda awet dan tahan lama. Jenis baterai yang digunakan adalah high drain.</p>
                    </div>
                </div>
            </div>
        </section>

        <section class="page-section bg-light" id="contact">
            <div class="container">
                <div class="row justify-content-center">
                        <div class="col-lg-8 text-center">
                        <hr class="divider light my-4" />
                        <h2 class="text-black mt-3">CONTACT</h2>
                        <hr class="divider my-4" />
                        <p class="text-muted mb-5">Jika informasi di website ini masih kurang jelas atau kurang lengkap. Bisa sharing ke kontak yang tertera dibawah.</p>
                    </div>
                </div>
                <div class="">
                    <div class="text-center">
                        <img src="assets/img/whatsapp.png" class="text-center">
                        <div class="mb-3">WHATSAPP: 088213648909</div>
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