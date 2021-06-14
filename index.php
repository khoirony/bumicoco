<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="style2.css">

    <title>PT BUMI HARTA INTERNUSA</title>
  </head>
  <body>
    <?php 
      include('sambungan.php');
    ?>
    <nav class="navbar navbar-expand-md navbar-dark fixed-top pt-5" style="background: rgba(0, 0, 0, 0.1);">
      <div class="container">
      <a class="navbar-brand font-weight-bold" href="#"><img src="images/logo.png" class="w-25"></a>
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarNav">
        <ul class="navbar-nav ml-auto">
          <li class="nav-item active">
            <a class="nav-link font-weight-bold mr-2" href="#">HOME</a>
          </li>
          <li class="nav-item active">
            <a class="nav-link font-weight-bold mr-2" href="#">ABOUT</a>
          </li>
          <li class="nav-item active">
            <a class="nav-link font-weight-bold mr-2" href="#">PRODUCT</a>
          </li>
          <li class="nav-item active">
            <a class="nav-link font-weight-bold" href="#">CONTACT</a>
          </li>
        </ul>
      </div></div>
    </nav>

    <div id="carouselExampleCaptions" class="carousel slide" data-ride="carousel">
      <ol class="carousel-indicators">
        <li data-target="#carouselExampleCaptions" data-slide-to="0" class="active"></li>
        <li data-target="#carouselExampleCaptions" data-slide-to="1"></li>
      </ol>
      <div class="carousel-inner">
        <div class="carousel-item">
          <img src="images/slider1.jpg" class="d-block w-100" style="background: rgba(0, 0, 0, 0.1);" alt="...">
          <div class="carousel-caption d-none d-md-block">
          
          <div class="tombol">
            <h6 class="font-weight-bold">WELCOME TO OUR COMPANY</h6>
            <h1 class="display-3 font-weight-bold">SPECIALIZED IN COCONUT PRODUCT</h1> 
            <a href="about.php" class="btn btn-primary">ABOUT THE COMPANY</a>
          </div>
          </div>
        </div>
        <div class="carousel-item active">
          <img src="images/slider2.jpg" class="d-block w-100" alt="...">
          <div class="carousel-caption d-none d-md-block">
          <div class="tombol">
            <h6 class="font-weight-bold">WELCOME TO OUR COMPANY</h6>
            <h1 class="display-3 font-weight-bold">SPECIALIZED IN COCONUT PRODUCT</h1> 
            <a href="about.php" class="btn btn-primary">ABOUT THE COMPANY</a>
          </div>
          </div>
        </div>
      </div>
      <a class="carousel-control-prev" href="#carouselExampleCaptions" role="button" data-slide="prev">
          <span class="carousel-control-prev-icon" aria-hidden="true"></span>
          <span class="sr-only">Previous</span>
      </a>
      <a class="carousel-control-next" href="#carouselExampleCaptions" role="button" data-slide="next">
          <span class="carousel-control-next-icon" aria-hidden="true"></span>
          <span class="sr-only">Next</span>
      </a>
    </div>
  <br><br><br><br><br>
  <div class="container">
  <h1 class="code text-success text-center">ABOUT COMPANY</h1><br><br><br>
  <p class="cream text-secondary text-justify mr-5 ml-5 pr-2 pl-2">Indonesia is the largest coconut producer in the world. The 2017 data in The World Atlas notes that the amount of coconut production in Indonesia reaches 19.4 million tonnes. Coconut plant that grows in tropical areas in Indonesia easyly. Coconut is a strategic commodity that has a social, cultural and economic role in the life of Indonesian society. The benefits of the coconut plant lie not only in the flesh that can be processed into coconut milk, copra, and coconut oil, but all parts of the coconut plant have great benefits. The main reason that makes coconut a commercial commodity is because all parts of the coconut can be used for various purposes. <br><br>
  PT Bumi Harta Internusa is a consistent exporter of coconut products such as Coconut full Husked, Coconut charcoal briquette, Coconut fiber, and Coconut brooms stick  that conform to the international standards in terms of taste, flavor, effect and applications. We procure these items from the reputed vendors and farmer for export these in the worldwide market, after doing stringent quality inspections and advanced packaging. <br><br>
We never compromise with the quality of our products and try to achieve total customer satisfaction through sourcing best quality products from branded vendors reckoned as key players in Indonesia Our products are economically priced and we ensure timely delivery at all instances.
</p>
  </div>

  <br><br>
  <br><br>

  <div class="container">
    <h1 class="text-center text-success">OUR PRODUCT</h1>
    <div class="row">
    <?php
    $sql = "SELECT* FROM produk order by id";
    $query = mysqli_query($conn, $sql);
    while ($row = mysqli_fetch_array($query)){
      $isi=$row['keterangan'];
      $sebagian=substr($isi, 0, 100);
    	echo '
        <div class="col-sm-4 pl-4 pr-4 mb-4 pb-5">
          <img src="images/'.$row['gambar'].'" class="w-100 rounded-top" ><br>
          <h5 class="roboto-light">'.$row['nama'].'</h5> <br>
          <p class="text-justify">'.$sebagian.'</p>
        </div>
       <br>
      ';
    }
    ?>
    </div>
  </div>

  <br><br><br><br><br>

  <footer>
    <div class="container text-center">
      <div class="container">
        <div class="row text-left pt-5 pl-2">
          <div class="col-sm-5 mr-5">
            <h5 class="text-white"> PT. BUMI HARTA INTERNUSA</h5>
            <p> We also continue to update the information about the company through social media, for the latest information you can follow our social media.</p>
            <br>
          </div>
          <div class="col-sm text-white">
            <h5> SITEMAP</h5>
            <a href="/#home" class="text-white">Home</a>  <br>
            <a href="/about.php" class="text-white">About the company</a>  <br>
            <a href="/product.php" class="text-white">Our Business</a> 

            <br><br>
          </div>
          <div class="col-sm text-white">
            <h5> BUSINESS WITH US</h5>
            <a href="/contact.php" class="text-white">Contact us</a> 
          </div>
        </div>
      </div>
    </div>
      <div class="row text-center" style="background: rgba(0, 0, 0, 1);">
        <div class="col-sm-12 mt-3 pt-3 pb-5">
          <p> &copy; Copy Right 2021 PT. Bumi Harta Internusa. All rights reserved.</p>
        </div>
      </div>
</footer>

    

    <!-- Optional JavaScript; choose one of the two! -->

    <!-- Option 1: jQuery and Bootstrap Bundle (includes Popper) -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-Piv4xVNRyMGpqkS2by6br4gNJ7DXjqk09RmUpJ8jgGtD7zP9yug3goQfGII0yAns" crossorigin="anonymous"></script>
  </body>
</html>