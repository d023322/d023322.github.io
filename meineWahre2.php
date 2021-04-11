<?php

$i=0;
// kleidung ausgeben
while ($i < 271) {
  $filename = "images/simone/kl$i.jpg";
  if (file_exists($filename)) {
    echo "<div class=\"mb-1 pics animation all 1\">\n";
    echo "<a target=\"_blank\" href=\"images/simone/kl$i.jpg\">\n";
    echo "<figure>\n";
    echo "<img class=\"img_fluid img-thumbnail\" src=\"images/simone/thkl$i.jpg\" alt=\"Card image cap\" title=\"kl$i.jpg\">\n";
    echo "<figcaption>Kleider kl$i.jpg</figcaption>\n";
    echo "</figure>\n";
    echo "</a>\n";
    echo "</div>\n";
  }
  $i++;
}

// Schuhe ausgeben
$i=0;
while ($i < 10) {
    $filename = "images/simone/sc$i.jpg";
    if (file_exists($filename)) {
        echo "<div class=\"mb-1 pics animation all 2\">\n";
        echo "<figure>\n";
        echo "<a target=\"_blank\" href=\"images/simone/sc$i.jpg\">\n";
        echo "<img class=\"img-fluid\" src=\"images/simone/thsc$i.jpg\" alt=\"Card image cap\" title=\"sc$i.jpg\">\n";
        echo "<figcaption>Schuhe sc$i.jpg</figcaption>\n";
        echo "</a>\n";
        echo "</figure>\n";
        echo "</div>\n";
    }
    $i++;
}

// Schmuck ausgeben
$i=0;
while ($i < 10) {
    $filename = "images/simone/s$i.jpg";
    if (file_exists($filename)) {
        echo "<div class=\"mb-1 pics animation all 3\">\n";
        echo "<figure>\n";
        echo "<a target=\"_blank\" href=\"images/simone/s$i.jpg\">\n";
        echo "<img class=\"img-fluid\" src=\"images/simone/ths$i.jpg\" alt=\"Card image cap\" title=\"s$i.jpg\">\n";
        echo "<figcaption>Schmuck s$i.jpg</figcaption>\n";
        echo "</a>\n";
        echo "</figure>\n";
        echo "</div>\n";
    }
    $i++;
}
  
// Accessoires ausgeben
$i=0;
while ($i < 10) {
    $filename = "images/simone/a$i.jpg";
    if (file_exists($filename)) {
        echo "<div class=\"mb-1 pics animation all 4\">\n";
        echo "<figure>\n";
        echo "<a target=\"_blank\" href=\"images/simone/a$i.jpg\">\n";
        echo "<img class=\"img-fluid\" src=\"images/simone/tha$i.jpg\" alt=\"Card image cap\" title=\"a$i.jpg\">\n";
        echo "<figcaption>Accessories a$i.jpg</figcaption>\n";
        echo "</a>\n";
        echo "</figure>\n";
        echo "</div>\n";
    }
    $i++;
}

?>