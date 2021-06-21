<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="style3.css">

    <title>BUMI HARTA INTERNUSA | Contact Us</title>
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
          <img src="images/slider1.jpg" class="d-block w-100" style="background: rgba(0, 0, 0, 0.1);" alt="...">
          <div class="carousel-caption d-none d-md-block">
          
          <div class="tombol">
            <h6 class="font-weight-bold">WELCOME TO OUR COMPANY</h6>
            <h1 class="display-3 font-weight-bold">SPECIALIZED IN COCONUT PRODUCT</h1> 
            
          </div>
          </div>
        </div>
        <div class="carousel-item active">
          <img src="images/slider2.jpg" class="d-block w-100" alt="...">
          <div class="carousel-caption d-none d-md-block">
          <div class="tombol">
            <h6 class="font-weight-bold">WELCOME TO OUR COMPANY</h6>
            <h1 class="display-3 font-weight-bold">SPECIALIZED IN COCONUT PRODUCT</h1> 
            
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

    <br><br>  

    <div class="container">
      <div class="row">
        <div class="col-md">
          <h6>ABOUT THE COMPANY</h6><br>
          <p class="cream text-secondary pr-2">
          PT Bumi Harta Internusa is a consistent exporter of coconut products such as Coconut full Husked, Coconut charcoal briquette, Coconut fiber, and Coconut brooms stick  that conform to the international standards in terms of taste, flavor, effect and applications. We procure these items from the reputed vendors and farmer for export these in the worldwide market, after doing stringent quality inspections and advanced packaging. <br><br>
          We never compromise with the quality of our products and try to achieve total customer satisfaction through sourcing best quality products from branded vendors reckoned as key players in Indonesia Our products are economically priced and we ensure timely delivery at all instances.
          </p>
        </div>
        <div class="col-md">
          <h6>SEND US A MESSAGE</h6>
          <hr>
          <form action="/" >
          <div class="form-group" method="post">
            <label for="exampleFormControlInput1">YOUR NAME</label>
            <input type="text" class="form-control border-0">
          
            <label for="exampleFormControlInput1">YOUR EMAIL</label>
            <input type="email" class="form-control border-0">
          
            <label for="exampleFormControlInput1">SUBJECT</label>
            <input type="text" class="form-control border-0">
          
            <label for="exampleFormControlTextarea1">YOUR MESSAGE</label>
            <textarea class="form-control border-0" rows="3"></textarea>
          </div>
          <input class="btn btn-primary" type="submit" name="Submit" value="Submit">
          </form>
        </div>
      </div>
    </div>

    <br><br><br>

    <?php 
      include('footer.php');
    ?>

  </body>
</html>