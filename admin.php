<?php 
    /*
        Файл для шаблона каталога
        Просто проверка итоговая по ветке 2
    */
    $header_config = [
        'title'=> 'Административная панель',
        'page-style'=>'admin.css'
    ];
    include('parts/header.php');
?>
<div class="admin">
    <div class="admin-header">
        <h1 class="admin-header-h1">Admin panel</h1>
        <p class="admin-header-desc">Menu</p>
    </div>
    <div class="admin-products"></div>
    <div class="admin-pagination"></div>
    <div class="admin-preloader hide">
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
        'page-js'=>'admin.js'
    ];
    include('parts/footer.php');
?>
   