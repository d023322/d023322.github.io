<?php
    // Bilder einbinden
    $bilder = ["jane.jpg","jeans.jpg", "buegel.jpg", "WestfalenhalleDo.jpg", "kleider1.jpg", "kleider2.jpg" , "kleider3.jpg" ];
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