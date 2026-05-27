
<?php
/** @var array $product */ //
?>
<div class="product-card ">
    <div class="product-img-wrapper">
        <?php
            // tarkistetaan onko tuotteella kuvaa, muuten käytetään oletuskuvaa
            $img_path = (!empty($product['image'])) ? "assets/images/" . $product['image'] : "assets/images/default-placeholder.jpg";
        ?>
        <!-- Tuotekuva -->
        <img src="<?php echo htmlspecialchars($img_path, ENT_QUOTES, 'UTF-8'); ?>" alt="<?php echo htmlspecialchars($product['title'] ?? 'Tuote', ENT_QUOTES, 'UTF-8'); ?>" class="product-img" loading="lazy">
    </div>

    <!-- Tuotetiedot -->
    <div class="product-info">
        <?php if (!empty($product['category'])): ?>
            <span class="product-category"><?php echo htmlspecialchars($product['category'], ENT_QUOTES, 'UTF-8'); ?></span>
        <?php endif; ?>

        <!-- Tuotenimi -->
        <h3 class="product-title">
            <a href="product.php?title=<?php echo urlencode($product['title']); ?>">
                <?php echo htmlspecialchars($product['title'] ?? 'Tuntematon tuote', ENT_QUOTES, 'UTF-8'); ?>
            </a>
        </h3>

            <!-- Tuotehinta -->
        <div class="product-price-box">
             
            <span class="product-price"><?php echo number_format($product['price'] ?? 0, 2); ?>€</span>
          
        </div>
    </div>

    <div class="product-action">
           <p class="description"><?php echo htmlspecialchars($product['description'] ?? '', ENT_QUOTES, 'UTF-8'); ?></p>
       
    </div>
      <div class="product-action">
            <button class="btn-add-to-cart"
                    data-id="<?php echo htmlspecialchars($product['id'], ENT_QUOTES, 'UTF-8'); ?>"
                    data-title="<?php echo htmlspecialchars($product['title'] ?? '', ENT_QUOTES, 'UTF-8'); ?>"
                    data-price="<?php echo htmlspecialchars($product['price'], ENT_QUOTES, 'UTF-8'); ?>">
                Lisää ostoskoriin
            </button>   
       
    </div>
</div>