<?php
$header_config = [
    'title'=> 'Каталог',
    'page-style'=>'catalog.css'
];
include('parts/header.php');
   
?>
<div class="catalog">
    <div class="catalog-header">
        <a class="catalog-header-main" href="">Главная/</a>
        <h1 class="catalog-header-h1">Мужчинам</h1>
        <p class="catalog-header-desc">Все товары</p>
        <div class="catalog-header-filter">
            <div class="catalog-header-filter-category">
                <input type="text" name="category" placeholder="Категория">
            </div>
            <div class="catalog-header-filter-size">
            <input type="text" name="size" placeholder="Размер">
            </div>
            <div class="catalog-header-filter-price">
            <input type="text" name="price" placeholder="Стоимость">
            </div>
        </div>
    </div>
    <div class="catalog-products"></div>
    <div class="catalog-pagination">
        <a href="" class="catalog-pagination-page">1</a>
        <a href="" class="catalog-pagination-page">2</a>
        <a href="" class="catalog-pagination-page">3</a>
        <a href="" class="catalog-pagination-page">4</a>
    </div>
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
