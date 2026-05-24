<?php
// Tuoteiden tiedot. Kuvan nimi tallennetaan ilman polkua (esim. 'book.webp').
// Polku 'assets/images/' lisätään automaattisesti komponentissa.
$products = [
    [
        'id' => 101,
        'name' => 'Kirja1',
        'price' => 48.00,
        'original_price' => 48.00,
        'category' => 'book',
        'stock' => 15,
        'image' => 'book.webp',
        'is_sale' => true
    ],
    [
        'id' => 102,
        'name' => 'Kirja2',
        'price' => 99.00,
        'original_price' => 129.00,
        'category' => 'book',
        'stock' => 0,
      'image' => 'book.webp',
        'is_sale' => false
    ],
        [
        'id' => 102,
        'name' => 'Kirja3',
        'price' => 9.00,
        'original_price' => 12.00,
        'category' => 'book',
        'stock' => 8,
      'image' => 'book.webp',
        'is_sale' => false
    ],
        [
        'id' => 102,
        'name' => 'Peli',
        'price' => 99.00,
        'original_price' => 122.00,
        'category' => 'game',
        'stock' => 8,
      'image' => 'book.webp',
        'is_sale' => false
    ],
    
];
?>
