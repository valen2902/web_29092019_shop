<?php 
    $header_config = [
        'title'=> 'Корзина',
        'page-style'=>'basket.css'
    ];
    include($_SERVER['DOCUMENT_ROOT'].'/parts/header.php');

?>

<div class="basket">
    <div class="basket-header">
        <h1>Ваша корзина</h1>
        <p>Товары резервируются на ограниченное время</p>
    </div>
    <div class="basket-box">
        <div class="basket-box-left">
                <h3>Фото</h3>
                <h3>Наименование</h3>
        </div>
        <div class="basket-box-right">
                <h3>Размер</h3>
                <h3>Количество</h3>
                <h3>Стоимость</h3>
                <h3>Удалить</h3>
        </div>
    </div>
    <div class="basket-line"></div>
    <?php ?>
    <div class="basket-content">
        <div class="basket-content-left">
            <div class="basket-content-left-id"></div>
            <div class="basket-content-left-pic"></div>
            <div class="basket-content-left-text">
                <p></p>
            </div>
        </div>
        <div class="basket-content-right">
            <div class="basket-content-right-size"></div>
            <div class="basket-content-right-quantity"></div>
            <div class="basket-content-right-price"> руб.</div>
            <div class="basket-content-right-delete"></div>
        </div>
    </div>
</div>

<?php 
    $footer_config = [
        'page-js'=>'basket.js'
    ];
    include($_SERVER['DOCUMENT_ROOT'].'/parts/footer.php');
?>
    


