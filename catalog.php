<?php 
    /*
        Файл для шаблона каталога
    */
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
    </div>
    <div class="catalog-products"></div>
    <div class="catalog-pagination"></div>
    <div class="catalog-preloader hide">
        <!-- 
            1. Прописать стили для этого элемента:
                - наложение поверх все элементов внутри .catalog
                - полупрозрачность и серый цвет
                - надпись загрузка по центру элемнта
            2. Предусмотреть класс, которые отвечает за показ/выключение элемента
            3. Попробовать интегрировать этот элемент с js-ом
         -->
        Загрузка
    </div>
</div>

<?php 
    $footer_config = [
        'page-js'=>'catalog.js'
    ];
    include('parts/footer.php');
?>
    
