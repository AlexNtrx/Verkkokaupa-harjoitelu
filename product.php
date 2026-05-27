
<?php

require "function.php"; // vaatii function.php-tiedoston, joka sisältää tietokantayhteyden määrittelyt ja funktiot

$title = isset($_GET['title']) ? urldecode($_GET['title']) : null;
$product = null;
if ($title) {
    $product = getProductByTitle($title);
}
$categories = getCategories() ?: [];
?>

<!DOCTYPE html>
<html lang="fi">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="<?php echo $product['meta_description'] ; ?>">
    <meta name="keywords" content="<?php echo $product['meta_keywords'] ; ?>">
    <title><?php echo $title ; ?></title>
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
            <h2>Product Details</h2>
                <div class="product-grid">
                <?php
        
                //  jos tuotteita löytyy, näytä ne kortteina; muuten näytä viesti
                if ($product) {
                        include 'components/product_details.php';
                } else {
                    echo "<p>Product not found.</p>";   
                }
                  
                ?>
            </div>

           
        </div>

    </main>

    <?php include 'includes/footer.php'; ?>


</body>

</html>