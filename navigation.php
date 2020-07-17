<?php
$navigation = ["index.php" => "Start",
               "maerkte.php" => "Märkte",
               "uebermich.php" => "Über Mich",
               "kontakt.php" => "Kontakt",
               "meinewahre.php" => "Meine Wahre"];
echo "<ul>\n";

foreach($navigation as $nav => $titel) {
    $rest = substr($nav,0,5);
    echo "<li><a href='$nav' class='$rest'>$titel</a></li>\n"; 
}    
echo "</ul>\n";          

?>