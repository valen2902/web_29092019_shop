<?php
$header_config = [
    'title'=> 'Каталог',
    'page-style'=>'catalog.css'
];
include('parts/header.php');
   
?>
<div class="catalog">
    <div class="catalog-header">
        <h1 class="catalog-header-h1">Мужчинам</h1>
        <p class="catalog-header-desc">Все товары</p>
        <div class="filter">
            <div class="category"></div>
            <div class="size"></div>
            <div class="price"></div>
        </div>
    </div>
    <div class="catalog-products"></div>
    <div class="catalog-pagination"></div>
    <div class="catalog-preloader hide">
    Загрузка
    </div>
</div>
 <?php 
    $footer_config = [
        'page-js'=>'catalog.js'
    ];
    include('parts/footer.php');
 ?>
