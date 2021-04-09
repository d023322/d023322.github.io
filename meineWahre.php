<!DOCTYPE html>
<html lang="de">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

  <meta name="description" content="Homepage Mode-Beratung">
  <meta name="keywords" content="Second, Hand, Mode, Beratung, Simone, Wolbeck, Markt, MÃ¼nster, Giessen, DÃ¼sseldorf, KÃ¶ln, Dortmund, Schmuck, Schuhe, Kleider">
  <meta name="author" content="Uwe Specht">
  <title>Mode-Beratung.de</title>

  <!-- Bootstrap CSS -->
  <link rel="stylesheet" href="dist/css/bootstrap.min.css"
    integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
  <link rel="stylesheet" href="dist/css/style.css" type="text/css">
  <link rel="stylesheet" href="dist/css/w3.css" type="text/css">
  <link rel="stylesheet" href="dist/css/wc.css" type="text/css">
  <link rel="stylesheet" href="dist/css/uikit.css" type="text/css">
  

</head>

<body>



  <!-- <div class="container"> -->
    <div class=container-fluid>
      <div class="row">
        <nav class="navbar navbar-expand-sm navbar-light bg-light">
          <!-- <p class="simone">Simone Frieler <br>mode-beratung.de</p> -->
          <a class="navbar-brand"><img src="images/simone/drawing.svg" alt="logo"  height="60" width="150"></a>
          <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavDropdown"
            aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">Menü
            <span class="navbar-toggler-icon"></span>
          </button>
          <div class="collapse navbar-collapse" id="navbarNavDropdown">
            <ul class="navbar-nav">
              <li class="nav-item">
                <a class="nav-link box" href="index.php">Aktuelles</a>
              </li>
              <li class="nav-item">
                <a class="nav-link box" href="maerkte.php">Märkte</a>
              </li>
              <li class="nav-item">
                <a class="nav-link box" href="ueberMich.php">Über&nbsp;Mich</a>
              </li>
              <li class="nav-item">
                <a class="nav-link box" href="kontakt.php">Kontakt</a>
              </li>
              <li class="nav-item active">
                <a class="nav-link box" href="meineWahre.php">Meine&nbsp;Ware<span class="sr-only">(current)</span></a>
              </li>
            </ul>
          </div>
        </nav>
      </div>
    </div>
  <!-- </div> -->

  <!-- Grid row -->

  <?php
    include "top.php";
  ?>

  <div class="container-fluid">

    <div class="row">

      <!-- Grid column -->
      <div class="col-md-12 d-flex justify-content-lg-start mb-5">
        <div class="btn-group-sm m-3">
          <button type="button" class="btn btn-outline-black waves-effect filter btn-success" data-rel="all">Alle Bilder</button>
          <button type="button" class="btn btn-outline-black waves-effect filter btn-danger"  data-rel="1">Kleidung</button>
          <button type="button" class="btn btn-outline-black waves-effect filter btn-info"    data-rel="2">Schuhe</button>
          <button type="button" class="btn btn-outline-black waves-effect filter btn-dark"    data-rel="3">Schmuck</button>
          <button type="button" class="btn btn-outline-black waves-effect filter btn-primary" data-rel="4">Accessoires</button>
        </div>
      </div>
      <!-- Grid column -->

    </div>
    <!-- Grid row -->
  </div>
  <!-- <button class="btn--info thing2"><h6>Kontakt@Mode-Beratung.de</h6></button> -->






 
<?php
    include "meineWahre2.php";
?>
   
</div>
  <!-- </div>
  </div> -->



  <div class="container">
    <div id="footer" class="text-center p-5">
      <div class="wc-foot">
        <ul>
          <li><a href="https://www.ebay-kleinanzeigen.de/s-bestandsliste.html?userId=22989981"><img
                src="images/EBay_Kleinanzeigen2.png" alt="ebay kleinanzeigen"></a></li>
          <!-- <li><a href="https://www.facebook.com"> <img src="images/Facebook.png"></a></li> -->
        </ul>
      </div>
    </div>
  </div>
  <div class="container">
    <div class="row">
      <div class="col-6 wc-foot text-right">
        <ul>
          <li><a href="impressum.html">Impressum</a></li>
          <li><a href="datenschutz.html">Datenschutz</a></li>
        </ul>
      </div>
      <div class="col-6 wc-foot text-left">
        <ul>
          <li><a href="kontakt.php">Kontakt</a></li>
        </ul>
      </div>
    </div>
  </div>



  <!-- Optional JavaScript -->
  <!-- jQuery first, then Popper.js, then Bootstrap JS -->
  <!-- <script src="dist/js/jquery.js"></script> -->
  <script src="https://code.jquery.com/jquery-3.4.1.js"></script>
  </script>
  <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js"
    integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous">
  </script>
  <script src="dist/js/bootstrap.min.js"
    integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous">
  </script>

  <script src="dist/js/script.js"></script>





</body>

</html>
