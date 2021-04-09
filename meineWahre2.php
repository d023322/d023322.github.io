<?php


$i=0;
// kleidung ausgeben
while ($i < 227) {
  echo "<div class=\"mb-1 pics animation all 1\">\n";
  echo "<figure>\n";
  echo "<a target=\"_blank\" href=\"images/simone/kl$i.jpg\">\n";
  echo "<img class=\"img_fluid img-thumbnail\" src=\"images/simone/thn$i.jpg\" alt=\"Card image cap\" title=\"kl$i.jpg\">\n";
  echo "<figcaption>Galery Kleider kl$i.jpg</figcaption>\n";
  echo "</a>\n";
  echo "</figure>\n";
  echo "</div>\n";
  $i++;
}

// kleidung ausgeben
$i=0;
while ($i < 44) {
    echo "<div class=\"mb-1 pics animation all 1\">\n";
    echo "<figure>\n";
    echo "<a target=\"_blank\" href=\"images/simone/k$i.jpg\">\n";
    echo "<img class=\"img-fluid\" src=\"images/simone/thnk$i.jpg\" alt=\"Card image cap\" title=\"k$i.jpg\">\n";
    echo "<figcaption>Galery Kleider k$i.jpg</figcaption>\n";
    echo "</a>\n";
    echo "</figure>\n";
    echo "</div>\n";
    $i++;
}

// Schuhe ausgeben
$i=1;
while ($i < 2) {
    echo "<div class=\"mb-1 pics animation all 2\">\n";
    echo "<figure>\n";
    echo "<a target=\"_blank\" href=\"images/simone/sc$i.jpg\">\n";
    echo "<img class=\"img-fluid\" src=\"images/simone/thsc$i.jpg\" alt=\"Card image cap\" title=\"sc$i.jpg\">\n";
    echo "<figcaption>Galery Schuhe sc$i.jpg</figcaption>\n";
    echo "</a>\n";
    echo "</figure>\n";
    echo "</div>\n";
    $i++;
}

// Schmuck ausgeben
$i=1;
while ($i < 7) {
    echo "<div class=\"mb-1 pics animation all 3\">\n";
    echo "<figure>\n";
    echo "<a target=\"_blank\" href=\"images/simone/s$i.jpg\">\n";
    echo "<img class=\"img-fluid\" src=\"images/simone/ths$i.jpg\" alt=\"Card image cap\" title=\"s$i.jpg\">\n";
    echo "<figcaption>Galery Schmuck s$i.jpg</figcaption>\n";
    echo "</a>\n";
    echo "</figure>\n";
    echo "</div>\n";
    $i++;
}
  
// Accessoires ausgeben
$i=1;
while ($i < 5) {
    echo "<div class=\"mb-1 pics animation all 4\">\n";
    echo "<figure>\n";
    echo "<a target=\"_blank\" href=\"images/simone/a$i.jpg\">\n";
    echo "<img class=\"img-fluid\" src=\"images/simone/tha$i.jpg\" alt=\"Card image cap\" title=\"a$i.jpg\">\n";
    echo "<figcaption>Galery Accessories a$i.jpg</figcaption>\n";
    echo "</a>\n";
    echo "</figure>\n";
    echo "</div>\n";
    $i++;
}

?>