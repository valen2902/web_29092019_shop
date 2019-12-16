<?php
    $header_config = [
        'title'=> 'Карточка товара',
        'page-style'=>'product.css'
    ];
    include('parts/header.php');

    $template = [
        'img'=> '',
        'name'=> '',
        'price'=> '',
        'description'=> ''
    ];
   
    if( !empty( $_GET['id'])){
       $sqli_product = "SELECT * FROM products WHERE id = {$_GET['id']}";
       $result_product = mysqli_query($link, $sqli_product);
       $template = mysqli_fetch_assoc($result_product);

       d($template);
    }else{
        header('Location: /catalog.php');
    }
?>
<div class="product">
    <div class="product-photo" style="background-image:url(<?=$template['img']?>)"></div>
    <h1 class="product-h1"><?=$template['name']?></h1>
    <div class="product-price"><?=$template['price']?></div>
    <div class="product-description"><?=$template['description']?></div>
    <button class="product-add-to-card" data-product-id="<?=$template['id']?>">Добавить в корзину</button>
</div>

 <?php 
    $footer_config = [
        'page-js'=>'product.js'
    ];
    include('parts/footer.php');
 ?>
