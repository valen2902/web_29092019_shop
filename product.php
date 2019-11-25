<?php 
    /*
        Файл для шаблона карточки товара
    */
    $header_config = [
        'title'=> 'Карточка товара',
        'page-style'=>'product.css'
    ];
    include('parts/header.php');

    $template = [
        'img'=>'',
        'name'=>'',
        'price'=>'',
        'decsription'=>''
    ];

    if( !empty( $_GET['id'] ) ){
        /**
         * 1. Нужно сходить в БД и получить информацию по товару с этим id-ком
         * 2. Эту информацию занести в $template
         * 3. $template отрисовать в html
         */

        $sql_product = "SELECT * FROM products WHERE id = {$_GET['id']}";
        $result_product = mysqli_query($link, $sql_product);
        $template = mysqli_fetch_assoc($result_product);

        d($template);
    }else{
        // в случае если не передан get-параметр с id, будем делать редирект на /catalog.php
        header('Location: /catalog.php');
    }
?>
<!-- Отрисовываете карточку товара -->
<div class="product">
    <div class="product-photo" style="background-image:url(<?=$template['img']?>)"></div>
    <h1 class="product-h1"><?=$template['name']?></h1>
    <div class="product-price"><?=$template['price']?> руб.</div>
    <div class="product-description"><?=$template['description']?></div>
    <div class="product-add-to-card">Добавить в корзину</div>
</div>
<?php 
    $footer_config = [
        'page-js'=>'product.js'
    ];
    include('parts/footer.php');
?>
    
