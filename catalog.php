<?php
$header_config = [
    'title'=> 'Каталог',
    'page-style'=>'catalog.css'
];
include('parts/header.php');
   
$template=[];
$catalog_id = 1;

if( !empty( $_GET['id'] ) ){
    $catalog_id = (int) $_GET['id'];
}

$sql_category = "SELECT * FROM categories WHERE id = {$catalog_id}";
$result_category = mysqli_query($link, $sql_category);

$data_category = mysqli_fetch_assoc($result_category);
// d($data_category);

$template['catalog_id'] = $catalog_id;
$template['catalog_name'] = $data_category['name'];

$sql_test1 = "SELECT * FROM products WHERE price > 9000 AND price < 10000";
$result_test = mysqli_query($link, $sql_test1);

$data_test = [];

            while( $row = mysqli_fetch_assoc($result_test) ){
                $data_test[] = $row;
            }
            // d($data_test);
?>
<div class="catalog" data-catalog-id="<?=$template['catalog_id']?>">
    <div class="catalog-header">
        <a class="catalog-header-main" href="">Главная/<?=$data_category['name']?></a>
        <h1 class="catalog-header-h1"><?=$template['catalog_name']?></h1>
        <p class="catalog-header-desc">Все товары</p>
        <div class="catalog-header-filter">
            <div class="catalog-header-filter-category"><span class="catalog-header-filter-category-name-of-filter">Категория</span>
                <div class="catalog-header-filter-category-openbox">
                    <nav>
                        <a href="/catalog.php?id=4">Зимняя одежда</a>
                        <a href="/catalog.php?id=5">Спортивная одежда</a>
                        <a href="/catalog.php?id=6">Одежда на выход</a>
                        <a href="/catalog.php?id=7">Домашняя одежда</a>
                        <a href="/catalog.php?id=8">Повседневная одежда</a>
                        <a href="/catalog.php?id=9">Обувь</a>
                    </nav>
                </div>
            </div>
            <div class="catalog-header-filter-size"><span class="catalog-header-filter-size-name-of-filter">Размер</span>
                <div class="catalog-header-filter-size-openbox">
                    <nav>
                        <a href="/catalog.php">XS</a>
                        <a href="/catalog.php">S</a>
                        <a href="/catalog.php">M</a>
                        <a href="/catalog.php">L</a>
                        <a href="/catalog.php">XL</a>
                    </nav>
                </div>
            </div>
            <div class="catalog-header-filter-price"><span class="catalog-header-filter-size-name-of-filter">Стоимость</span>
                <div class="catalog-header-filter-price-openbox">
                    <nav> 
                        <a href="/catalog.php?{sql_test1}">0-1000 руб.</a>
                        <a href="/catalog.php">1000-3000 руб.</a>
                        <a href="/catalog.php">3000-6000 руб.</a>
                        <a href="/catalog.php">6000-20000 руб.</a>
                    </nav>
                </div>
            </div>
        </div>
    </div>
    <div class="catalog-products"></div>
    <div class="catalog-pagination"></div>
    <div class="catalog-preloader hide">
    Загрузка <span class="catalog-preloader-dots">
        <span class="dot1">.</span>
        <span class="dot2">.</span>
        <span class="dot3">.</span>
    </span>
    </div>
</div>
 <?php 
    $footer_config = [
        'page-js'=>'catalog.js'
    ];
    include('parts/footer.php');
 ?>

