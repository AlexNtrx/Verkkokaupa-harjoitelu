
<?php

require_once "function.php"; // vaatii function.php-tiedoston, joka sisältää tietokantayhteyden määrittelyt ja funktiot

function getHomeProducts($int){
    $mysqli = dbConnect();
    $result = $mysqli->query("SELECT * FROM products ORDER BY id DESC LIMIT " . intval($int));
    while ($row = $result->fetch_assoc()) {
            $products[] = $row;
        }
    
    return $products;
}
?>
   