<?php

$i=0;
// neue Sachen 18.04.2021 zuerst
while ($i < 10) {
    $filename = "images/simone/z$i.jpg";
    if (file_exists($filename)) {
      echo "<div class=\"mb-1 pics animation all 1\">\n";
      echo "<a target=\"_blank\" href=\"images/simone/z$i.jpg\">\n";
      echo "<figure>\n";
      echo "<img class=\"img-fluid img-thumbnail\" src=\"images/simone/thz$i.jpg\" alt=\"Card image cap\" title=\"z$i.jpg\">\n";
      echo "<figcaption>z$i.jpg</figcaption>\n";
      echo "</figure>\n";
      echo "</a>\n";
      echo "</div>\n";
    }
    $i++;
  }

$i=0;
// neue Sachen 18.04.2021 zuerst
while ($i < 10) {
    $filename = "images/simone/zz$i.jpg";
    if (file_exists($filename)) {
      echo "<div class=\"mb-1 pics animation all 1\">\n";
      echo "<a target=\"_blank\" href=\"images/simone/zz$i.jpg\">\n";
      echo "<figure>\n";
      echo "<img class=\"img-fluid img-thumbnail\" src=\"images/simone/thzz$i.jpg\" alt=\"Card image cap\" title=\"zz$i.jpg\">\n";
      echo "<figcaption>zz$i.jpg</figcaption>\n";
      echo "</figure>\n";
      echo "</a>\n";
      echo "</div>\n";
    }
    $i++;
  }

$i=0;
// neue Sachen 18.04.2021 zuerst
while ($i < 180) {
    $filename = "images/simone/yy$i.jpg";
    if (file_exists($filename)) {
      echo "<div class=\"mb-1 pics animation all 1\">\n";
      echo "<a target=\"_blank\" href=\"images/simone/yy$i.jpg\">\n";
      echo "<figure>\n";
      echo "<img class=\"img-fluid img-thumbnail\" src=\"images/simone/thyy$i.jpg\" alt=\"Card image cap\" title=\"yy$i.jpg\">\n";
      echo "<figcaption>yy$i.jpg</figcaption>\n";
      echo "</figure>\n";
      echo "</a>\n";
      echo "</div>\n";
    }
    $i++;
  }

$i=0;
// neue Sachen zuerst
while ($i < 20) {
    $filename = "images/simone/xx$i.jpg";
    if (file_exists($filename)) {
      echo "<div class=\"mb-1 pics animation all 1\">\n";
      echo "<a target=\"_blank\" href=\"images/simone/xx$i.jpg\">\n";
      echo "<figure>\n";
      echo "<img class=\"img-fluid img-thumbnail\" src=\"images/simone/thxx$i.jpg\" alt=\"Card image cap\" title=\"xx$i.jpg\">\n";
      echo "<figcaption>xx$i.jpg</figcaption>\n";
      echo "</figure>\n";
      echo "</a>\n";
      echo "</div>\n";
    }
    $i++;
  }
  

$i=0;
// kleidung ausgeben
while ($i < 271) {
  $filename = "images/simone/kl$i.jpg";
  if (file_exists($filename)) {
    echo "<div class=\"mb-1 pics animation all 1\">\n";
    echo "<a target=\"_blank\" href=\"images/simone/kl$i.jpg\">\n";
    echo "<figure>\n";
    echo "<img class=\"img-fluid img-thumbnail\" src=\"images/simone/thkl$i.jpg\" alt=\"Card image cap\" title=\"kl$i.jpg\">\n";
    echo "<figcaption>kl$i.jpg</figcaption>\n";
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
        echo "<a target=\"_blank\" href=\"images/simone/sc$i.jpg\">\n";
        echo "<figure>\n";
        echo "<img class=\"img-fluid img-thumbnail\" src=\"images/simone/thsc$i.jpg\" alt=\"Card image cap\" title=\"sc$i.jpg\">\n";
        echo "<figcaption>sc$i.jpg</figcaption>\n";
        echo "</figure>\n";
        echo "</a>\n";
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
        echo "<a target=\"_blank\" href=\"images/simone/s$i.jpg\">\n";
        echo "<figure>\n";
        echo "<img class=\"img-fluid img-thumbnail\" src=\"images/simone/ths$i.jpg\" alt=\"Card image cap\" title=\"s$i.jpg\">\n";
        echo "<figcaption>s$i.jpg</figcaption>\n";
        echo "</figure>\n";
        echo "</a>\n";
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
        echo "<a target=\"_blank\" href=\"images/simone/a$i.jpg\">\n";
        echo "<figure>\n";
        echo "<img class=\"img-fluid img-thumbnail\" src=\"images/simone/tha$i.jpg\" alt=\"Card image cap\" title=\"a$i.jpg\">\n";
        echo "<figcaption>a$i.jpg</figcaption>\n";
        echo "</figure>\n";
        echo "</a>\n";
        echo "</div>\n";
    }
    $i++;
}

?>