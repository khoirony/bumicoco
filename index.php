<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="css/style4.css">

    <link href="https://fonts.googleapis.com/css2?family=Roboto&display=swap" rel="stylesheet">

    <style type="text/css">
    #font1{
      font-size: 19px;
      font-family: 'Roboto', sans-serif;
    }
    </style>

    <title>BUMI HARTA INTERNUSA</title>
  </head>
  <body>
    <?php 
      include('sambungan.php');
      include('navbar.php');
    ?>

    <div id="carouselExampleCaptions" class="carousel slide" data-ride="carousel">
      <ol class="carousel-indicators">
        <li data-target="#carouselExampleCaptions" data-slide-to="0" class="active"></li>
        <li data-target="#carouselExampleCaptions" data-slide-to="1"></li>
      </ol>
      <div class="carousel-inner">
        <div class="carousel-item">
          <img src="images/slider1c.jpg" class="d-block w-100" style="background: rgba(0, 0, 0, 0.1);" alt="...">
          <div class="carousel-caption d-none d-md-block">
          
          <div class="tombol">
            <h6 class="tagline font-weight-bold">WELCOME TO OUR COMPANY</h6>
            <h1 class="display-3 font-weight-bold mb-5 pb-5">SUPPLYING ACROSS THE GLOBE</h1> 
            
          </div>
          </div>
        </div>
        <div class="carousel-item active">
          <img src="images/slider2c.jpg" class="d-block w-100" alt="...">
          <div class="carousel-caption d-none d-md-block">
          <div class="tombol">
            <h6 class="tagline font-weight-bold">WELCOME TO OUR COMPANY</h6>
            <h1 class="display-3 font-weight-bold mb-5 pb-5">SPECIALIZED IN COCONUT PRODUCT</h1> 
            
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
    <div id="about"></div>
    </div>
  

  <br><br><br><br><br><br><br>
  <div class="container">
  <h2 class="code text-success text-left ml-5">DESCRIPTION COMPANY</h2><br><br>
  <div class="row">
    <div class="col-md-9"><p class="cream text-secondary text-right mr-5 ml-5 pr-2 pl-2">Indonesia is the largest coconut producer in the world. The 2017 data in The World Atlas notes that the amount of coconut production in Indonesia reaches 19.4 million tonnes. Coconut plant that grows in tropical areas in Indonesia easyly. Coconut is a strategic commodity that has a social, cultural and economic role in the life of Indonesian society. The benefits of the coconut plant lie not only in the flesh that can be processed into coconut milk, copra, and coconut oil, but all parts of the coconut plant have great benefits. The main reason that makes coconut a commercial commodity is because all parts of the coconut can be used for various purposes.
  </p></div>
    <div class="col-md-3">
      <img src="images/coconut.png" class="w-75">
    </div>
  </div>
  
  </div>
 <br><br><br><br><br><br><br><br>
<div class="about" style="background-color: #e9eceb;">
  <br><br>
  <br><br>

  <div class="justify-content-center" id="product">
    <h2 class="code text-success text-center">OUR PRODUCTS</h2><br><br><br>
      <div class="container">
      <div class="row justify-content-center">
        <?php
        $sql = "SELECT* FROM produk order by id";
        $query = mysqli_query($conn, $sql);
        $no=0;
        while ($row = mysqli_fetch_array($query)){
            if($no == 3){
              break;
            }
            echo '
              <div class="col-sm-4 mb-3">
              <img src="images/'.$row['gambar'].'" class="w-100">
               
                <a href="view.php?id='.$row['id'].'" method="GET">
                <p id="font1" class="roboto-light mt-4 text-dark"><i class="fas fa-chevron-circle-right text-success ml-1 mr-2"></i> '.$row['nama'].'</p>
                </a>
               
            </div>';
            $no++;
        }
        ?>
      </div>
        <br>
        <div class="text-center"><a href="products.php"> <button type="button" class="btn btn-outline-success rounded-0 pl-4 pr-4 pt-2 pb-2 mt-3 text-dark" style="border-width: 3px;"><i class="fas fa-shopping-cart mr-1"></i> VIEW MORE </button></a></div>
      </div>
  </div>
  <br><br><br><br><br>
  </div>
    <?php 
      include('footer.php');
    ?>
  </body>
</html>