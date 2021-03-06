<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="css/bootstrap.min.css" integrity="sha384-B0vP5xmATw1+K9KRQjQERJvTumQW0nPEzvF6L/Z6nronJ3oUOFUFpCjEUQouq2+l" crossorigin="anonymous">

    <script src="https://kit.fontawesome.com/c12c059ff2.js" crossorigin="anonymous"></script>
  </head>
  <body>
    <nav class="navbar navbar-expand-md navbar-dark fixed-top pt-5" style="background: rgba(0, 0, 0, 0.1);">
      <div class="container">
      <a class="navbar-brand font-weight-bold" href="index.php"><img src="images/logo.png" class="w-25"></a>
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarNav">
        <ul class="navbar-nav ml-auto">
          <li class="nav-item active">
            <a class="nav-link font-weight-bold mr-2" href="index.php#">HOME</a>
          </li>
          <li class="nav-item active">
            <a class="nav-link font-weight-bold mr-2" href="index.php#about">ABOUT</a>
          </li>
          <li class="nav-item dropdown active">
            <a class="nav-link font-weight-bold mr-2 dropdown-toggle" href="#" id="navbarScrollingDropdown" role="button" data-toggle="dropdown" aria-expanded="false">
              PRODUCTS
            </a>
            <ul class="dropdown-menu rounded-0 mt-3 border-0" aria-labelledby="navbarScrollingDropdown">
              <?php 
                include('sambungan.php');
                $sql = "SELECT* FROM produk order by id";
                $query = mysqli_query($conn, $sql);
                while ($row = mysqli_fetch_array($query)){
                echo '
                <li><a class="dropdown-item" href="view.php?id='.$row['id'].'">'.$row['nama'].'</a></li>';
                }
              ?>
            </ul>
          </li>
          <li class="nav-item active">
            <a class="nav-link font-weight-bold" href="contact.php#">CONTACT</a>
          </li>
        </ul>
      </div></div>
    </nav>

    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-Piv4xVNRyMGpqkS2by6br4gNJ7DXjqk09RmUpJ8jgGtD7zP9yug3goQfGII0yAns" crossorigin="anonymous"></script>

    
  </body>
</html>