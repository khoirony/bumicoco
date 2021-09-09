<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="css/style4.css">

    <title>BUMI HARTA INTERNUSA | Contact Us</title>
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
            <h1 class="display-3 font-weight-bold  mb-5 pb-5">CONTACT US</h1> 
          </div>
          </div>
        </div>
      </div>
    </div>

    <br><br>  

    <div class="container">
      <div class="row mt-5">
        <div class="col-md-7 pr-5">
          <h6>ABOUT THE COMPANY</h6><br>
          <p class="cream text-secondary pr-2">
          PT Bumi Harta Internusa is a consistent exporter of coconut products such as Coconut full Husked, Coconut charcoal briquette, Coconut fiber, and Coconut brooms stick  that conform to the international standards in terms of taste, flavor, effect and applications. We procure these items from the reputed vendors and farmer for export these in the worldwide market, after doing stringent quality inspections and advanced packaging. <br><br>
          We never compromise with the quality of our products and try to achieve total customer satisfaction through sourcing best quality products from branded vendors reckoned as key players in Indonesia Our products are economically priced and we ensure timely delivery at all instances.
          </p>
        </div>
        <div class="col-md-5">
          <h6 class="text-center">SEND US A MESSAGE</h6>
          <br>
          <?php 
            $Msg = "";
            if(isset($_GET['error'])){
              $Msg = " Please Fill in the Blanks ";
              echo '<div class="alert alert-danger">'.$Msg.'</div>';
            }
            if(isset($_GET['success'])){
              $Msg = " Your Message Has Been Sent ";
              echo '<div class="alert alert-success">'.$Msg.'</div>';
            } 
          ?>
          <form action="process.php" method="post">
          <div class="form-group" method="post">
            <label for="exampleFormControlInput1">YOUR NAME</label>
            <div class="border-bottom">
            <input type="text" name="userName" id="userName" class="form-control form-control-sm border-0"></div> <br>
          
            <label for="exampleFormControlInput1">YOUR EMAIL</label>
            <div class="border-bottom">
            <input type="email" name="Email" id="Email" class="form-control form-control-sm border-0"></div> <br>
          
            <label for="exampleFormControlInput1">SUBJECT</label>
            <div class="border-bottom">
            <input type="text" name="Subject" id="Subject" class="form-control form-control-sm border-0"></div> <br>
          
            <label for="exampleFormControlTextarea1">YOUR MESSAGE</label>
            <div class="border-bottom">
            <textarea name="msg" id="msg" class="form-control border-0" rows="3"></textarea></div>
          </div>
          <input class="btn btn-primary" type="submit" name="btn-send" value="Submit">
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