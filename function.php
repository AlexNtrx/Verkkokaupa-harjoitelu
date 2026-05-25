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

function getProductsByCategory($category){
    $mysqli = dbConnect(); // Yhdistetään tietokantaan
    $stmp = $mysqli->prepare("SELECT * FROM products WHERE category = ?"); // Valmistellaan SQL-lause, jossa on parametrina kategoria
    $stmp->bind_param("s", $category); // Bindataan kategoria-parametri SQL-lauseeseen turvallisesti
    $stmp->execute(); // Suoritetaan SQL-lause
    $result = $stmp->get_result(); // Haetaan tulokset ja palautetaan ne taulukkomuodossa
    $data = $result->fetch_all(MYSQLI_ASSOC); // Palautetaan taulukko, jossa on kaikki kyseisen kategorian tuotteet. Jos virhe tapahtuu, palautetaan tyhjä taulukko.
    return $data; // Palautetaan haetut tuotteet taulukkomuodossa
}