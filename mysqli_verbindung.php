<?php
    include "htmlhelper.php";

    htmlanfang();
        $mysqli = new mysqli('localhost','d023322','april123','modeberatung');
        if ($mysqli->connect_error) {
            echo ' Fehler bei der Verbindung ' . mysqli_connect_error();
            exit();
        }
        else
            echo " Verbindung hat geklappt\n<br>";    

        // check characterset
        if (!$mysqli->set_charset('utf8')) {
            echo "Fehler beim laden von utf8 ". $mysqli->error();

        }
        // create table
        // $sql = 'create table if not exists gerichtet  (
        //     id int not null auto_increment,
        //     name varchar(255) not null,
        //     beschreibung text,
        //     kategorie_id int(11),
        //     primary key (id)
        // )' ;

        // $sql = 'create table if not exists kategorien (
        //     kategorie_id int(11) not null auto_increment,
        //     name varchar(255) ,
        //     primary key (kategorie_id)
        // )' ;

        // insert row
        // $sql = ' insert into gerichtet
        // ( name, beschreibung, kategorie_id)
        // values ("Kartoffeln","Im Ofen gebacker",4)';

        // update row
        $sql = ' update gerichtet
         set  beschreibung ="Im Ofen gebacken mit frischen Kartoffeln"
        where id = 1';

        // delete row
        $sql = 'delete from gerichtet where id = 1';


        // select ausfuehrer
        if ($mysqli->query($sql)) {
            echo "sql befehl ausgefuehrt: \n<br>" ;
        
        }
        else {
            echo  "Fehler: " . $mysqli;
        }

        echo "Zeilen betroffen: " . $mysqli->affected_rows . "<br>\n";
        echo "Vergebene id: " . $mysqli->insert_id;

    $mysqli->close();
    htmlende();
?>