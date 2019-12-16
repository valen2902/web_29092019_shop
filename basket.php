<?php
$header_config = [
    'title'=> 'Корзина',
    'page-style'=>'basket.css'
];
include('parts/header.php');
   

d($_SESSION);
?>
<div>Корзина</div>
 <?php 
    $footer_config = [
        'page-js'=>'basket.js'
    ];
    include('parts/footer.php');
 ?>
