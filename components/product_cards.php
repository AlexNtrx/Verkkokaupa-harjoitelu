
<?php
// $product on olemassa ja se on Array"
/** @var array $product */
?>
<!-- jos tuote on loppu varastosta,laitetaan luokka is-out-of-stock -->
<div class="product-card <?php echo ($product['stock'] <= 0) ? 'is-out-of-stock' : ''; ?>">
    <!-- jos tuote on loppu varastosta, näytetään badge -->
    <div class="card-badges">
        <?php if ($product['stock'] <= 0): ?>
            <span class="badge badge-out">Ei varastossa</span>
            <!-- jos tuote on tarjouksessa, näytetään tarjousbadge -->
        <?php elseif (isset($product['is_sale']) && $product['is_sale']): ?>
            <span class="badge badge-sale">Tarjous</span>
        <?php endif; ?>
    </div>
<!-- tuotekuva -->
    <div class="product-img-wrapper">
        <?php
            // Jos tuotteella on kuva, lisää polku eteen. Muuten käytä oletuskuvaa.
            $img_path = (!empty($product['image'])) ? "assets/images/" . $product['image'] : "assets/images/default-placeholder.jpg";
        ?>
        <!-- tuotekuva -->
        <img src="<?php echo $img_path; ?>" alt="<?php echo htmlspecialchars($product['name']); ?>" class="product-img" loading="lazy">
    </div>
    <!-- tuotetiedot -->
    <div class="product-info">
        <!-- jos tuotekategoria on määritelty, näytetään se -->
        <?php if (!empty($product['category'])): ?>
            <!-- tuotekategoria -->
            <span class="product-category"><?php echo htmlspecialchars($product['category']); ?></span>
        <?php endif; ?>

      <!-- tuotenimi  -->
        <h3 class="product-title">
            <a href="product-detail.php?id=<?php echo $product['id']; ?>">
                <?php echo htmlspecialchars($product['name']); ?>
            </a>
        </h3>
        
        <!-- tuotehinta -->
        <div class="product-price-box">
            <span class="product-price"><?php echo number_format($product['price'], 2); ?>€</span>
            <!-- jos tuotteella on alkuperäinen hinta, näytetään se-->
            <?php if (isset($product['original_price']) && $product['original_price'] > $product['price']): ?>
                <!-- jos tuote on tarjouksessa, näytetään alkuperäinen hinta -->
                <span class="product-original-price"><?php echo number_format($product['original_price'], 2); ?> €</span>
            <?php endif; ?>
        </div>
    </div>
            <!-- jos tuote on varastossa, näytetään lisää ostoskoriin -painike -->
    <div class="product-action">
        <?php if ($product['stock'] > 0): ?>
            <button class="btn-add-to-cart" 
                    data-id="<?php echo $product['id']; ?>"
                    data-name="<?php echo htmlspecialchars($product['name']); ?>"
                    data-price="<?php echo $product['price']; ?>">
                    Lisää ostoskoriin
            </button>
        <?php else: ?>
            <!-- jos tuote ei ole varastossa, näytetään ei varastossa -painike -->
            <button class="btn-out-of-stock" disabled>Ei varastossa</button>
        <?php endif; ?>
    </div>

</div>