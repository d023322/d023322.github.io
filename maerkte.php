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
          <a class="navbar-brand"><img src="images/simone/drawing.svg" alt="logo" height="60" width="150"></a>
          <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavDropdown"
            aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">Menü
            <span class="navbar-toggler-icon"></span>
          </button>
          <div class="collapse navbar-collapse" id="navbarNavDropdown">
            <ul class="navbar-nav">
              <li class="nav-item">
                <a class="nav-link box" href="index.php">Aktuelles</a>
              </li>
              <li class="nav-item active">
                <a class="nav-link box" href="maerkte.php">Märkte<span class="sr-only">(current)</span></a>
              </li>
              <li class="nav-item">
                <a class="nav-link box" href="ueberMich.html">Über&nbsp;Mich</a>
              </li>
              <li class="nav-item">
                <a class="nav-link box" href="kontakt.php">Kontakt</a>
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
    <img src="images/jeans.jpg" alt="Jeans" style="width:100%">
    <div class="w3-display-topleft w3-text-white" style="padding:24px 48px">
      <h1 class="w3-jumbo w3-hide-small">mode-beratung.de</h1>
      <h1 class="w3-hide-large w3-hide-medium">mode-beratung.de</h1>
      <h1 class="w3-hide-small">kontakt@mode-beratung.de</h1>
      <p><a href="#jeans" class="w3-button w3-black w3-padding-large w3-large">Die Märkte</a></p>
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



  <div class="container-fluid">
    <div class="row">
      <div class="col-md-8 col-md-offset-2">

        <article class="ersterartikel artikel" id="jeans">
          <div class="row">
            <div class="col-md-6">
              <!-- <img src="images/simone/simone4.jpg" class="artikelbild img-responsive" alt="Bild Simone" class="w-25"> -->
              <img src="images/simone/muenster.jpg" class="w3-card" alt="Bild Simone">
            </div>
            <div class="col-md-6">
              <h1 class="title">Münster</h1>
              <p class="lead">Der Markt in Münster ist mitten in der Innenstadt am Schloss auf der Promenade.
              </p>
            </div>
          </div>
          <div class="row">
            <div class="col-md-6">
              <!-- <img src="images/simone/simone4.jpg" class="artikelbild img-responsive" alt="Bild Simone" class="w-25"> -->
              <!-- <img src="images/simone/muenster3.jpg" class="w3-card" alt="Bild Simone"> -->
              <a href="https://onlinestreet.de/Regional/Europa/Deutschland/Bayern/Landkreise/Donau-Ries/St%C3%A4dte_und_Gemeinden/M%C3%BCnster%2C_Lech.html">
                <img src="https://onlinestreet.de/strassen/ortsschild/M%C3%BCnster.png" 
                class="w3-card" alt="Branchenbuch f&uuml;r M&uuml;nster auf onlinestreet.de" /></a>
            </div>
            <div class="col-md-6">
              <p class="lead">Am schönsten ist es abends im dunkeln über die Promenade zu spazieren und dabei ein
                bisschen auf meinem Stand zu stöbern. Wir sehen uns:</p>
              <p><strong>Promenade Münster
                  (vor dem Schloss/Schlossplatz/gegenüber „Stürznickels Grill“) A 201A Freitag ab 20 Uhr ; Samstag Ende
                  um 15 Uhr
                </strong>
              </p>
            </div>
          </div>
        </article>

        <article class="ersterartikel artikel">
          <div class="row">
            <div class="col-md-6">
              <!-- <img src="images/simone/simone4.jpg" class="artikelbild img-responsive" alt="Bild Simone" class="w-25"> -->
              <img src="images/simone/koeln1.jpg" class="w3-card" alt="Bild Simone">
            </div>
            <div class="col-md-6">
              <h1 class="title">Köln</h1>
              <p class="lead">Die unterschiedlichen Märkte in Köln sind was ganz besonderes</p>
              <p><strong>
                  Köln Altstadt, Uferpromenade (Konrad Adenauer Ufer), Haupeinfahrt
                </strong></p>
              </p>
            </div>
          </div>
          <div class="row">
            <div class="col-md-6">
              <!-- <img src="images/simone/simone4.jpg" class="artikelbild img-responsive" alt="Bild Simone" class="w-25"> -->
              <!-- <img src="images/simone/koeln4.jpg" class="w3-card" alt="Bild Simone"> -->
              <a
                href="https://onlinestreet.de/Regional/Europa/Deutschland/Nordrhein-Westfalen/St%C3%A4dte_und_Gemeinden/K/K%C3%B6ln.html">
                <img src="https://onlinestreet.de/strassen/ortsschild/K%C3%B6ln.png" class="w3-card"
                  alt="Branchenbuch f&uuml;r K&ouml;ln auf onlinestreet.de" /></a>
            </div>
            <div class="col-md-6">
              <p class="lead">Wir sehen uns auch:</p>
              <p><strong>Köln Rheinenergiestadion / Junkersdorfer Stadion</strong>
                Standort: Kölner Altstadt, auf der Rheinuferpromenade, zwischen der Hohenzollern Brücke und der Bastei.
                <br>
                Parkmöglichkeiten: Parkhaus am Dom / Heumarkt
                <br>
                Bus und Bahn: Heumarkt: Linie 1, 7, 8, 9, 132, 133,
                <br>
                Dom/Hbf.: Linie 5, 16, 17, 18, 19, 132, 133
                <br>
              </p>
              <p><strong>Köln Südstadt, Vorgebirgsstr</strong></p>
            </div>
          </div>
        </article>

        <article class="ersterartikel artikel">
          <div class="row">
            <div class="col-md-6">
              <!-- <img src="images/simone/simone4.jpg" class="artikelbild img-responsive" alt="Bild Simone" class="w-25"> -->
              <img src="images/simone/dortmund2.jpg" class="w3-card" alt="Bild Simone">
            </div>
            <div class="col-md-6">
              <h1 class="title">Dortmund</h1>
              <p class="lead">Der Markt in Dortmund ist direkt in den Westfalenhallen Dortmund.</p>
            </div>
          </div>
          <div class="row">
            <div class="col-md-6">
              <!-- <img src="images/simone/simone4.jpg" class="artikelbild img-responsive" alt="Bild Simone" class="w-25"> -->
              <!-- <img src="images/simone/dortmund1.png" class="w3-card" alt="Bild Simone"> -->
              <a
                href="https://onlinestreet.de/Regional/Europa/Deutschland/Nordrhein-Westfalen/St%C3%A4dte_und_Gemeinden/D/Dortmund.html">
                <img src="https://onlinestreet.de/strassen/ortsschild/Dortmund.png" class="w3-card"
                  alt="Branchenbuch f&uuml;r Dortmund auf onlinestreet.de" /></a>
            </div>
            <div class="col-md-6">
              <p class="lead">Wir sehen uns:</p>
              <p><strong>
                  Westfalenhalle Dortmund, Antikmarkt, Samstags 10-17 Uhr, Sonntags 10-16 Uhr
                </strong></p>
            </div>
          </div>
        </article>

        <article class="ersterartikel artikel">
          <div class="row">
            <div class="col-md-6">
              <!-- <img src="images/simone/simone4.jpg" class="artikelbild img-responsive" alt="Bild Simone" class="w-25"> -->
              <img src="images/simone/giessen1.jpg" class="w3-card" alt="Bild Simone">
            </div>
            <div class="col-md-6">
              <h1 class="title">Gießen</h1>
              <p class="lead">Der Markt in Gießen ist direkt in der Hessenhalle</p>
            </div>
          </div>
          <div class="row">
            <div class="col-md-6">
              <!-- <img src="images/simone/simone4.jpg" class="artikelbild img-responsive" alt="Bild Simone" class="w-25"> -->
              <a
                href="https://onlinestreet.de/Regional/Europa/Deutschland/Hessen/Landkreise/Gie%C3%9Fen/St%C3%A4dte_und_Gemeinden/Gie%C3%9Fen.html">
                <img src="https://onlinestreet.de/strassen/ortsschild/Gie%C3%9Fen.png" class="w3-card"
                  alt="Branchenbuch f&uuml;r Gie&szlig;en auf onlinestreet.de" /></a>
            </div>
            <div class="col-md-6">
              <p class="lead">Wir sehen uns:</p>
              <p><strong>
                  Hessenhalle Gießen, Halle 7 Stand 47/76
                </strong></p>
            </div>
          </div>
        </article>

        <article class="ersterartikel artikel">
          <div class="row">
            <div class="col-md-6">
              <!-- <img src="images/simone/simone4.jpg" class="artikelbild img-responsive" alt="Bild Simone" class="w-25"> -->
              <img src="images/simone/duesseldorf1.jpg" class="w3-card" alt="Bild Simone">
            </div>
            <div class="col-md-6">
              <h1 class="title">Düsseldorf</h1>
              <p class="lead">Auch in Düsseldorf bin ich auf mehreren Märkten present.</p>
              <p><strong>Düsseldorf P1</strong></p>
            </div>
          </div>
          <div class="row">
            <div class="col-md-6">
              <!-- <img src="images/simone/simone4.jpg" class="artikelbild img-responsive" alt="Bild Simone" class="w-25"> -->
              <a
                href="https://onlinestreet.de/Regional/Europa/Deutschland/Nordrhein-Westfalen/St%C3%A4dte_und_Gemeinden/D/D%C3%BCsseldorf.html">
                <img src="https://onlinestreet.de/strassen/ortsschild/D%C3%BCsseldorf.png" class="w3-card"
                  alt="Branchenbuch f&uuml;r D&uuml;sseldorf auf onlinestreet.de" /></a>
            </div>
            <div class="col-md-6">
              <p class="lead">Wir sehen uns ausserdem:</p>
              <p><strong>
                  Radschlägermarkt/Großmarkt Düsseldorf, Ulmenstrasse
                </strong></p>
            </div>
          </div>
        </article>

        <article class="ersterartikel artikel">
          <div class="row">
            <div class="col-md-6">
              <!-- <img src="images/simone/simone4.jpg" class="artikelbild img-responsive" alt="Bild Simone" class="w-25"> -->
              <img src="images/simone/hamm1.jpg" class="w3-card" alt="Bild Simone">
            </div>
            <div class="col-md-6">
              <h1 class="title">Hamm</h1>
              <p class="lead">Der Markt in Hamm ist zentral gelegen </p>
              <p><strong></strong></p>
            </div>
          </div>
          <div class="row">
            <div class="col-md-6">
              <!-- <img src="images/simone/simone4.jpg" class="artikelbild img-responsive" alt="Bild Simone" class="w-25"> -->
              <a
                href="https://onlinestreet.de/Regional/Europa/Deutschland/Nordrhein-Westfalen/St%C3%A4dte_und_Gemeinden/H/Hamm%2C_Westfalen.html">
                <img src="https://onlinestreet.de/strassen/ortsschild/Hamm.png" class="w3-card"
                  alt="Branchenbuch f&uuml;r Hamm auf onlinestreet.de" /></a>
            </div>
            <div class="col-md-6">
              <p class="lead">Wir sehen uns:</p>
              <p><strong>
                  Zentralhalle Hamm, Ökonomie-Peitzmeier-Platz
                </strong></p>
            </div>
          </div>
        </article>


        <article class="ersterartikel artikel">
          <div class="row">
            <div class="col-md-6">
              <!-- <img src="images/simone/simone4.jpg" class="artikelbild img-responsive" alt="Bild Simone" class="w-25"> -->
              <img src="images/simone/handorf1.jpg" class="w3-card" alt="Bild Simone">
            </div>
            <div class="col-md-6">
              <h1 class="title">Handorfer Herbst</h1>
              <p class="lead">Der kleine Markt in Handorf hat einen ganz aussergewöhnlichen Flair.</p>
              <p><strong></strong></p>
            </div>
          </div>
          <div class="row">
            <div class="col-md-6">
              <!-- <img src="images/simone/simone4.jpg" class="artikelbild img-responsive" alt="Bild Simone" class="w-25"> -->
              <a
                href="https://onlinestreet.de/Regional/Europa/Deutschland/Hessen/Landkreise/Darmstadt-Dieburg/St%C3%A4dte_und_Gemeinden/M%C3%BCnster.html">
                <img src="https://onlinestreet.de/strassen/ortsschild/M%C3%BCnster+Handorf.png" class="w3-card"
                  alt="Branchenbuch f&uuml;r M&uuml;nster Handorf auf onlinestreet.de" /></a>
            </div>
            <div class="col-md-6">
              <p class="lead">Wir sehen uns:</p>
              <p><strong>
                  Handorfer Herbst, Münster-Handorf
                </strong></p>
            </div>
          </div>
        </article>

      </div>
    </div>
  </div>

  <?php
    include "footer.php";
  ?>



  <!-- <div class="container">
    <div id="footer" class="text-center p-5">
      <div class="wc-foot">
        <ul>
          <li><a href="https://www.ebay-kleinanzeigen.de/s-bestandsliste.html?userId=22989981"><img
                src="images/EBay_Kleinanzeigen2.png" alt="ebay kleinanzeigen"></a></li>
          <li><a href="https://www.facebook.com"> <img src="images/Facebook.png"></a></li>
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
  </div> -->



  <div class="container">
    <div class="row">
      <a class="box" href="WhatsApp://send?text=Text durch native Deeplink!" class="WhatsAppLink"
        style="display:none;">Send</a>
    </div>
  </div>




  <!-- Optional JavaScript -->
  <!-- jQuery first, then Popper.js, then Bootstrap JS -->
  <script src="//code.jquery.com/jquery-3.5.1.slim.min.js"
    integrity="sha256-4+XzXVhsDmqanXGHaHvgh1gMQKX40OUvDEBTu8JcmNs=" crossorigin="anonymous">
  </script>
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
