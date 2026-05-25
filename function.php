<?php

require "config.php"; // vaatii config.php-tiedoston, joka sisältää tietokantayhteyden määrittelyt

function dbConnect(){  // Yhdistää tietokantaan ja palauttaa mysqli-objektin tai FALSE virhetilanteessa
    $mysqli = new mysqli(SERVER, USERNAME, PASSWORD, DATABASE);
    if ($mysqli->connect_errno != 0){
        return FALSE; 
    }else{
        return $mysqli; 
    }
}

// Palauttaa kategorioiden listan taulukkona. Palauttaa tyhjän taulukon virhetilanteessa.
function getCategories(){
    $mysqli = dbConnect();
    $result = $mysqli->query("SELECT DISTINCT category FROM products");
          while ($row = $result->fetch_assoc()) {
            $categories[] = $row;
        }
    return $categories;
}
