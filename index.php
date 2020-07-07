<!DOCTYPE html>
<html lang="de">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="Homepage Mode-Beratung">
  <meta name="keywords"
    content="Second, Hand, Mode, Beratung, Simone, Wolbeck, Markt, MÃ¼nster, Giessen, DÃ¼sseldorf, KÃ¶ln, Dortmund, Schmuck, Schuhe, Kleider">
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
        <a class="navbar-brand"><img src="images/simone/drawing.svg" alt="Logo" height="60" width="150"></a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavDropdown"
          aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">Menü
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNavDropdown">
          <ul class="navbar-nav">
            <li class="nav-item active">
              <a class="nav-link box" href="index.html">Aktuelles<span class="sr-only">(current)</span></a>
            </li>
            <li class="nav-item">
              <a class="nav-link box" href="maerkte.html">Märkte</a>
            </li>
            <li class="nav-item">
              <a class="nav-link box" href="ueberMich.html">Über&nbsp;Mich</a>
            </li>
            <li class="nav-item">
              <a class="nav-link box" href="kontakt.html">Kontakt</a>
            </li>
            <li class="nav-item">
              <a class="nav-link box" href="meineWahre.html">Meine&nbsp;Ware</a>
            </li>
          </ul>
        </div>
      </nav>
    </div>
  </div>
  <!-- </div> -->

  <!-- Image header -->
  <!-- <div class="w3-display-container w3-container">
    <img src="images/jane.jpg" alt="Erste Seite" style="width:100%">
    <div class="w3-display-topleft w3-text-white" style="padding:24px 48px">
      <h1 class="w3-jumbo w3-hide-small">mode-beratung.de</h1>
      <h1 class="w3-hide-large w3-hide-medium">mode-beratung.de</h1>
      <h1 class="w3-hide-small">kontakt@mode-beratung.de</h1>
      <p><a href="#jeans" class="w3-button w3-black w3-padding-large w3-large"></a></p>
    </div>
  </div> -->

  <?php
    // Bilder einbinden
    $bilder = ["jane.jpg","jeans.jpg", "buegel.jpg", "WestfalenhalleDo.jpg" ];
    $max = count($bilder) -1;
    
    // $zufall = rand(0, $max);
    $zufall = array_rand($bilder);
    
    echo "<div class=\"w3-display-container w3-container\">\n";
    echo "<img src=\"images/$bilder[$zufall]\" alt=\"Erste Seite\" style=\"width:100%\">\n";
    echo "<div class=\"w3-display-topleft w3-text-white\" style=\"padding:24px 48px\">\n";
    echo "<h1 class=\"w3-jumbo w3-hide-small\">mode-beratung.de</h1>\n";
    echo "<h1 class=\"w3-hide-large w3-hide-medium\">mode-beratung.de</h1>\n";
    echo "<h1 class=\"w3-hide-small\">kontakt@mode-beratung.de</h1>\n";
    echo "</div>\n</div>\n";
  ?>





  <!-- <video class="uk-cover-object" autoplay="autoplay" controls="false" muted="" loop="" poster="/images/waltermann/webdesignwaltermann.jpg">
    <source src="/" type="video/ogg">
        <source src="/images/video.mp4" type="video/mp4">
  </video> -->




  <section id="aktuell" class="section-padding">
    <div class="container-fluid">
      <div class="container">
        <div class="row">
          <h2 class="w3-left w3-text-cyan">Aktuelles</h2>
        </div>
        <div class="row">
          <p>
            Münster, 03.07.2020 <br>
            Ich wünsche allen KundInnen schöne Ferien und kommen Sie gesund wieder. <br>
            Der nächste Markt in Köln findet statt am 26.07.2020, bis dahin verabschiede ich mich in die Ferien.<br>
            Freundlichen Gruesse <br>
            Simone Frieler<br><br>
            Münster, 27.06.2020 <br>
            Liebe KundInnen,
            Ferien haben begonnen und am Sonntag 28.06.2020 ist gleich der erste Markt am Rheinufer in Köln:<br>
            Standort: Kölner Altstadt, auf der Rheinuferpromenade, zwischen der Hohenzollern Brücke und der Bastei.
            <br>
            Parkmöglichkeiten: Parkhaus am Dom / Heumarkt
            <br>
            Bus und Bahn: Heumarkt: Linie 1, 7, 8, 9, 132, 133,
            <br>
            Dom/Hbf.: Linie 5, 16, 17, 18, 19, 132, 133
            <br>
            Allen, trotz Corona, schöne Ferien!
            <br><br>
            Gute Erholung und bleibt gesund!
            <br>
            Freundliche Grüße
            <br>
            Simone Frieler
          
        </div>
      </div>
    </div>
  </section>



  <div class="container-fluid">
    <div class="row">
      <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
        <ol class="carousel-indicators">
          <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
          <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
          <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
        </ol>
        <div class="carousel-inner">
          <div class="carousel-item active">
            <img class="d-block w-100" src="images/simone/ka-g-4.jpg" alt="First slide" height="600">
            <div class="carousel-caption d-none d-md-block">
              <h1>Mode-Beratung.de</h1>
              <p>kontakt@mode-beratung.de</p>
            </div>
          </div>
          <div class="carousel-item">
            <img class="d-block w-100" src="images/simone/ka-g-2.jpg" alt="Second slide" height="600">
            <div class="carousel-caption d-none d-md-block">
              <h1>Mode-Beratung.de</h1>
              <p>kontakt@mode-beratung.de</p>
            </div>
          </div>
          <div class="carousel-item">
            <img class="d-block w-100" src="images/simone/ka-g-3.jpg" alt="Third slide" height="600">
            <div class="carousel-caption d-none d-md-block">
              <h1>Mode-Beratung.de</h1>
              <p>kontakt@mode-beratung.de</p>
            </div>
          </div>
        </div>
        <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
          <span class="carousel-control-prev-icon" aria-hidden="true"></span>
          <span class="sr-only">Previous</span>
        </a>
        <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
          <span class="carousel-control-next-icon" aria-hidden="true"></span>
          <span class="sr-only">Next</span>
        </a>
      </div>
    </div>
  </div>

  <div class="container">
    <div id="footer" class="text-center p-5">
      <div class="wc-foot">
        <ul>
          <li><a href="https://www.ebay-kleinanzeigen.de/s-bestandsliste.html?userId=22989981"><img
                src="images/EBay_Kleinanzeigen2.png" alt="ebay Kleinanzeigen"></a></li>
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
          <li><a href="kontakt.html">Kontakt</a></li>
        </ul>
      </div>
    </div>
  </div>

  <!-- <div class="container">
    <div class="row">
      <a class="box" href="WhatsApp://send?text=Text durch native Deeplink!" class="WhatsAppLink"
        style="display:none;">Send</a>
    </div>
  </div> -->




  <!-- Optional JavaScript -->
  <!-- jQuery first, then Popper.js, then Bootstrap JS -->
  <script src="https://code.jquery.com/jquery-3.5.1.js" integrity="sha256-QWo7LDvxbWT2tbbQ97B53yJnYU3WhH/C8ycbRAkjPDc="
    crossorigin="anonymous"></script>
  <script>
    window.jQuery || document.write('<script src="dist/js/jquery.js"><\/script>');
  </script>
  <!-- <script src="dist/js/jquery.js"></script> -->
  <script src="dist/js/script.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js"
    integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous">
  </script>
  <script src="dist/js/bootstrap.min.js"
    integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous">
  </script>


</body>

</html>