
<?php

//  Tuotteiden tietojen haku (Backend / Data Fetching)

// Luo PHP:lle käsky lukea tietokanta-tiedosto. Muuttuja $products on käytettävissä heti.
require_once 'data/product_db.php';
require 'function.php';
?>

<!DOCTYPE html>
<html lang="fi">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="Kauppa on verkkokauppa, joka tarjoaa laajan valikoiman tuotteita edulliseen hintaan.">
    <meta name="keywords" content="verkkokauppa, edulliset tuotteet, laaja valikoima, ostokset verkossa">
    <title>Kauppa</title>
</head>
<link rel="stylesheet" href="./css/style.css">

<body>
    <?php include 'includes/nav.php'; ?>
    <?php include 'includes/header.php'; ?>


  <main>
       <div class="left">
            <div class="section-title">Product categories</div>
            <?php $categories = getCategories(); ?>
            <?php
            foreach ($categories as $category) {
               ?> <a href="category.php?category=<?php echo urlencode($category['category']) ?>">
                <?php echo ucfirst($category['category']); ?>
               </a>
               <?php
            }
            ?>
        </div>
        <div style="max-width: 1200px; margin: 0 auto; padding: 0 20px;">
            <h2 style="color: #1e293b; font-size: 20px; margin-bottom: 20px;">Tuotteemme</h2>
                <div class="product-grid">
                <?php
                
                //  Tuotteiden näyttäminen silmukassa (Logic / Rendering Loop)
             
                // Tarkistetaan, onko tuotteita. Näin estetään virheet.
                if (isset($products) && !empty($products)) {

                    // Käydään jokainen tuote läpi yksitellen.
                    foreach ($products as $product) {

                        // Otetaan tuotekortin tiedosto ja näytetään tuote.
                        include 'components/product_cards.php';

                    }

                } else {
                    // Jos tuotteita ei ole, näytetään tämä viesti.
                    echo '<p style="text-align: center; color: #94a3b8; grid-column: 1/-1; padding: 40px 0;">Tuotteita ei ole vielä saatavilla.</p>';
                }
                ?>
            </div>

           
        </div>



    <?php include 'includes/footer.php'; ?>


</body>

</html>