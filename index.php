<!doctype html>
<?php
  $_SESSION['page'] = "home";
  if(isset($_GET['page'])){
    $_SESSION['page'] = $_GET['page'];
  }
?>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <link rel="stylesheet" href="style.css">
    <script src="https://www.google.com/recaptcha/api.js" async defer></script>
    <title>Penzion Sklenařice</title>
  </head>
  <body class="d-flex flex-column h-100">
    <header>
      <nav class="navbar navbar-expand-lg navbar-dark">
        <a class="navbar-brand navbar-dark" href="#"><span class='navbar-smaller'>penzion</span> Sklenařice</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
          <div class="navbar-nav"></div>
            <a class="nav-item nav-link" data-id="home" href="?page=home"> Uvítání</a>
            <a class="nav-item nav-link" data-id="gallery" href="?page=gallery"> Galerie</a>
            <a class="nav-item nav-link" data-id="prices" href="?page=prices"> Ceník</a>
            <a class="nav-item nav-link" data-id="contact" href="?page=contact"> Kontakt</a>
          </div>
        </div>
      </nav>
      <!-- Optional JavaScript -->
      <!-- jQuery first, then Popper.js, then Bootstrap JS -->
      <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
      <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
      <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
      <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
      <script src="https://kit.fontawesome.com/67f8f2b923.js" crossorigin="anonymous" type="text/javascript"></script>
    </header>

    <main role="main" class="flex-shrink-0">
      <div class="container" id="content-div">
        <?php 
          include("pages/".$_SESSION['page'].".php");
        ?>
      </div>
    </main>
    <img id='backgroundimg' class='bg-img' src='imgs/bg/3.jpg'>
    <footer class="footer mt-auto py-3">
      <div class="container">
      <p class="text-center">© Jeník, 2020</p>
      </div>
    </footer>
  </body>
  
</html>