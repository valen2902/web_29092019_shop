<?php 
    /*
        Файл для главной страницы сайта
    */
    $header_config = [
        'title'=> 'Главная страница',
        'page-style'=>'main.css'
    ];
    include('parts/header.php');
?>
<div>Моя Главная страница</div>

<?php 
    $footer_config = [
        'page-js'=>'main.js'
    ];
    include('parts/footer.php');
?>