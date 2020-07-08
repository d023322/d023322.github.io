<?php
$navigation = ["index.php" => "Startseite",
               "maerkte.php" => "Märkte",
               "uebermich.php" => "Über Mich",
               "kontakt.php" => "Kontakt",
               "meinewahre.php" => "Meine Wahre"];

foreach($navigation as $nav => $titel) {
    echo "<a href='$nav'>$titel</a><br>"; 
}              

?>