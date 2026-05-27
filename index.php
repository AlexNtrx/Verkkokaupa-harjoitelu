
<?php

require "function.php"; // vaatii function.php-tiedoston, joka sisältää tietokantayhteyden määrittelyt ja funktiot

// Yhdistä tietokantaan
$mysqli = dbConnect();



// Hae tuotteet turvallisesti, varmistetaan että $products on aina taulukko
$products = [];
if ($mysqli) {
        $products = getHomeProducts(); // hakee kaikki tuotteet
}
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
                <?php echo ucfirst($category['category']); ?>  <!-- näytä kategorian nimi -->
               </a>
               <?php
            }
            ?>
        </div>
        <div class="right">
            <h2>Tuotteemme</h2>
                <div class="product-grid">
                <?php
                //  jos tuotteita löytyy, näytä ne kortteina; muuten näytä viesti
                if (!empty($products)) {
                    foreach ($products as $product) {
                        include 'components/product_cards.php';
                    }
              
                } else {
                    echo '<p>Tuotteita ei ole vielä saatavilla.</p>';
                }
                ?>
            </div>

           
        </div>
    </main>
<div id="cart-toast" class="cart-toast hidden">
        <p id="toast-message"></p>
    </div>

    <?php include 'includes/footer.php'; ?>

    <script src="./js/script.js"></script>
</body>

</html>