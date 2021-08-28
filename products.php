<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="css/style4.css">

    <title>BUMI HARTA INTERNUSA | Our Product</title>
  </head>
  <body>
    <?php 
      include('sambungan.php');
      include('navbar.php');
    ?>

    <div id="carouselExampleCaptions" class="carousel slide" data-ride="carousel">
      <div class="carousel-inner">
        <div class="carousel-item active">
          <img src="images/slider2.jpg" class="d-block w-100" alt="...">
          <div class="carousel-caption d-none d-md-block">
          <div class="tombol">
            <h1 class="display-3 font-weight-bold  mb-5 pb-5">OUR PRODUCT</h1> 
          </div>
          </div>
        </div>
      </div>
    </div>

    <br><br>  

    <div class="container">
      <?php
        $id = $_GET['id'];
        $sql = "SELECT* FROM produk where id=$id";
        $query = mysqli_query($conn, $sql);
        while ($row = mysqli_fetch_array($query)){
            echo '
            <div class="text-center">
              <img src="images/'.$row['gambar'].'" class="w-50">
                <h3 id="font1" class="roboto-light mt-4 text-dark"> '.$row['nama'].'</h3>  
                <br/><br/>
                <p class="text-left">'.$row['keterangan'].'</p>
            </div>';
        }
        ?>
    </div>

    <br><br><br>

    <?php 
      include('footer.php');
    ?>

  </body>
</html>