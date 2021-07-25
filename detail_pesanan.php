<?php 
    include('koneksi.php');
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
    <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.1.3/css/bootstrap.css">
    <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.10.21/css/dataTables.bootstrap4.min.css">

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

    <div class="container">
      <div class="judul-pesanan mt-5">
      
        <h3 class="text-center font-weight-bold">DATA PESANAN PRODUK</h3>
        
      </div>
      <table class="table table-bordered" id="example">
        <thead class="thead-light">
          <tr>
            <th scope="col">No.</th>
            <th scope="col">ID Pemesanan Produk</th>
            <th scope="col">Nama Pesanan</th>
            <th scope="col">Harga</th>
            <th scope="col">Jumlah</th>
            <th scope="col">Subharga</th>
          </tr>
        </thead>
        <tbody>
          <?php $nomor=1; ?>
          <?php $totalbelanja = 0; ?>
          <?php 
              $ambil = $koneksi->query("SELECT * FROM pemesanan_produk JOIN produk ON pemesanan_produk.id_menu=produk.id_menu 
                WHERE pemesanan_produk.id_pemesanan='$_GET[id]'");
          ?>
          <?php while ($pecah=$ambil->fetch_assoc()) { ?>
          <?php $subharga1=$pecah['harga']*$pecah['jumlah']; ?>
          <tr>
            <th scope="row"><?php echo $nomor; ?></th>
            <td><?php echo $pecah['id_pemesanan_produk']; ?></td>
            <td><?php echo $pecah['nama_menu']; ?></td>
            <td>Rp. <?php echo number_format($pecah['harga']); ?></td>
            <td><?php echo $pecah['jumlah']; ?></td>
            <td>
              Rp. <?php echo number_format($pecah['harga']*$pecah['jumlah']); ?>
            </td>
          </tr>
          <?php $nomor++; ?>
          <?php $totalbelanja+=$subharga1; ?>
          <?php } ?>
        </tbody>
        <tfoot>
          <tr>
            <th colspan="5">Total Bayar</th>
            <th>Rp. <?php echo number_format($totalbelanja) ?></th>
          </tr>
        </tfoot>
      </table><br>
      
      <?php
        $id = $_GET['id'];
        $query = "select statuspembayaran from pemesanan where id_pemesanan = '$id' ";
        $query_run = mysqli_query($koneksi, $query);
        $row =  mysqli_fetch_assoc($query_run);
        $statuspembayaran = $row['statuspembayaran'];
      ?>

        <a href="pesanan.php" class="btn btn-success btn-sm">Kembali</a>
        <?php if ($statuspembayaran == "Belum dikonfirmasi") {
          ?>
        <a class="btn btn-primary btn-sm" href="responseKonfirmasi.php?id=<?php echo $_GET['id'] ?>">Konfirmasi Pembayaran</a>
    </div>

    <?php } ?>

  <footer class="footer bg-dark py-4 fixed-bottom">
    <div class='container footer-inner'>
      <div class="container"><div class="small text-center text-muted">DYB VAPOR - Copyright©2021</div></div>
    </div>
  </footer>

    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js" integrity="sha384-OgVRvuATP1z7JjHLkuOU7Xw704+h835Lr+6QL9UvYjZE3Ipu6Tp75j7Bh/kR0JKI" crossorigin="anonymous"></script>
    <script type="text/javascript" src="js/bootstrap.min.js"></script>
    <script type="text/javascript" src="js/jquery.js"></script>
  </body>
</html>
<?php } ?>