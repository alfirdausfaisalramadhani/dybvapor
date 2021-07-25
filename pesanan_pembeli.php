<?php  
include('koneksi.php');
    session_start();
      if(!isset($_SESSION['login_user'])) {
        header("location: index.php");
      }else{
?>
<?php 
if(empty($_SESSION["pesanan"]) OR !isset($_SESSION["pesanan"]))
{
  echo "<script>alert('Pesanan kosong, Silahkan Pesan dahulu');</script>";
  echo "<script>location= 'menu_pembeli.php'</script>";
}
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

  <section>  
    <div class="container">
      <div class="mt-5 mb-5 col-lg-12">
          <div class="judul-pesanan">
            <h3 class="text-center font-weight-bold">PESANAN ANDA</h3> 
          </div>
          <table class="table table-bordered" id="example">
            <thead class="thead-light">
              <tr>
                <th scope="col-lg-2">No</th>
                <th scope="col-lg-2">Nama Pesanan</th>
                <th scope="col-lg-2">Harga</th>
                <th scope="col-lg-2">Jumlah</th>
                <th scope="col-lg-2">Subharga</th>
                <th scope="col-lg-2">Opsi</th>
              </tr>
            </thead>
            <tbody>
                <?php $nomor=1; ?>
                <?php $totalbelanja = 0; ?>
                <?php foreach ($_SESSION["pesanan"] as $id_menu => $jumlah) : ?>

                <?php 
                  include('koneksi.php');
                  $ambil = mysqli_query($koneksi, "SELECT * FROM produk WHERE id_menu='$id_menu'");
                  $pecah = $ambil -> fetch_assoc();
                  $subharga = $pecah["harga"]*$jumlah;
                ?>
              <tr>
                <td><?php echo $nomor; ?></td>
                <td><?php echo $pecah["nama_menu"]; ?></td>
                <td>Rp. <?php echo number_format($pecah["harga"]); ?></td>
                <td><?php echo $jumlah; ?></td>
                <td>Rp. <?php echo number_format($subharga); ?></td>
                <td>
                  <a href="hapus_pesanan.php?id_menu=<?php echo $id_menu ?>" class="badge badge-danger">Hapus</a>
                </td>
              </tr>
                <?php $nomor++; ?>
                <?php $totalbelanja+=$subharga; ?>
                <?php endforeach ?>
            </tbody>
            <tfoot>
              <tr>
                <th colspan="4">Total Belanja</th>
                <th colspan="2">Rp. <?php echo number_format($totalbelanja) ?></th>
              </tr>
            </tfoot>
          </table><br>
          <form method="POST" action="">
            <a href="menu_pembeli.php" class="btn btn-primary btn-sm">Lihat Menu</a>
            <button class="btn btn-success btn-sm" name="konfirm" ><i class="fab fa-whatsapp"></i> Konfirmasi Pembayaran</button>   
          </form>  
          
          <?php 
          if(isset($_POST['konfirm'])) {
              $tanggal_pemesanan=date("Y-m-d");

              $insert = mysqli_query($koneksi, "INSERT INTO pemesanan (tanggal_pemesanan, total_belanja) VALUES ('$tanggal_pemesanan', '$totalbelanja')");

              $id_terbaru = $koneksi->insert_id;

              foreach ($_SESSION["pesanan"] as $id_menu => $jumlah)
              {
                $insert = mysqli_query($koneksi, "INSERT INTO pemesanan_produk (id_pemesanan, id_menu, jumlah) 
                  VALUES ('$id_terbaru', '$id_menu', '$jumlah') ");
              }          

              unset($_SESSION["pesanan"]);

              echo "<script>alert('Pemesanan Sukses!');</script>";
              echo "<script>location= 'https://api.whatsapp.com/send?phone=6288213648909&text=Konfirmasi%20pembayaran%20melalui%20Whatsapp%20dengan%20mengirimkan%20bukti%20Transfer'</script>";
          }
          ?>
      </div>
    </div>
  </section>

        <footer class="footer bg-dark py-4 fixed-bottom">
            <div class="container"><div class="small text-center text-muted">DYB VAPOR - Copyright©2021</div></div>
        </footer>

    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js" integrity="sha384-OgVRvuATP1z7JjHLkuOU7Xw704+h835Lr+6QL9UvYjZE3Ipu6Tp75j7Bh/kR0JKI" crossorigin="anonymous"></script>
    <script type="text/javascript" src="js/bootstrap.min.js"></script>
    <script type="text/javascript" src="js/jquery.js"></script>
    <script src="https://code.jquery.com/jquery-3.5.1.js"></script>
    <script src="https://cdn.datatables.net/1.10.21/js/jquery.dataTables.min.js"></script>
    <script src="https://cdn.datatables.net/1.10.21/js/dataTables.bootstrap4.min.js"></script>
    <script>
      $(document).ready(function() {
          $('#example').DataTable();
      } );
    </script>
  </body>
</html>
<?php } ?>