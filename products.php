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
        <ul class="list-group list-group-flush mt-5">
        <?php
        $sql = "SELECT* FROM produk order by id";
        $query = mysqli_query($conn, $sql);
        while ($row = mysqli_fetch_array($query)){
            $tagline = substr($row['keterangan'], 0, 150);
            echo '
            <li class="list-group-item">
            <div class="row pt-2 pb-2">
                <div class="col-sm-4">
                <div class="card"><img src="images/'.$row['gambar'].'" class="w-100 rounded-top"></div>
                </div>
                <div class="col-sm-8">
                <h6 class="roboto-light text-center">'.$row['nama'].'</h6> <br>
                '.$tagline.'..Continued<br>
                <div class="row">
                <div class="col-md-7">'.$row['detail'].'</div>
                <div class="col-md-5 align-text-bottom"><div class="text-center"><a href="view.php?id='.$row['id'].'"> <button type="button" class="btn btn-outline-success rounded-0 pl-4 pr-4 pt-2 pb-2 mt-3 text-dark" style="border-width: 3px;"><i class="fas fa-shopping-cart mr-1"></i> VIEW MORE </button></a></div></div>
                </div>
                
                </div>
            </div>
            </li>';
        }
        ?>

        </ul>
    </div>

    <br><br><br>

    <?php 
      include('footer.php');
    ?>

  </body>
</html>