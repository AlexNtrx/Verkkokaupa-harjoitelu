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
            <a href="books">Books</a>
            <a href="games">Games</a>
        </div>

        <div class="right">
            <div class="section-title">Home page</div>
            <div class="product">

                <div class="product-left">
                    <img src="./products/book.webp" alt="Product Image">
                </div>
                <div class="product-right">
                    <p class='title'>
                        <a href="books">Coding is fun</a>
                    </p>
                    <p class="description"> Lorem ipsum dolor sit amet, consectetur adipisicing elit. Velit dolorem voluptatem architecto nam voluptate accusantium magni nisi in ratione doloribus.</p>
                    <p class="price">12$</p>
                </div>
            </div>
        </div>
        
    </main>


    <?php include 'includes/footer.php'; ?>


</body>

</html>