<?php
$header_config = [
    'title'=> 'Главная страница',
    'page-style'=>'main.css'
];
include('parts/header.php');
   
?>
<div class="main">
    <h1>НОВЫЕ ПОСТУПЛЕНИЯ ВЕСНЫ</h1>
    <h3>Мы подготовили для Вас лучшие новинки сезона</h3>
    <p><a href="#">ПОСМОТРЕТЬ НОВИНКИ</a></p>
    <div class="photo">
        <div class="photo-block-first">
            <a href="#"><div class="photo-block-first-1">   
                <div class="photo-block-first-1-text">
                    <p>ДЖИНСОВЫЕ</p>
                    <p>КУРТКИ</p>
                    <p class="photo-block-first-1-text-paragraf">NEW ARRIVAL</p>
                </div>
            </div></a>
            <a href="#"><div class="photo-block-first-5"></div></a>
        </div>
        <div class="photo-block-seconds">
            <a href="#"><div class="photo-block-seconds-0">
                <div class="photo-block-seconds-0-text">
                    <div class="photo-block-seconds-0-text-circle">
                        <div class="photo-block-seconds-0-text-circle-line"></div>
                    </div>
                    <p class="photo-block-seconds-0-text-paragraf">каждый сезон мы подготавливаем для Вас исключительно лучшую модну одежду. Следит за нашими новинками</p>
                </div>
            </div></a>
            <a href="#"><div class="photo-block-seconds-2">
                <div class="photo-block-seconds-2-text">
                    <p>ДЖИНСЫ</p>
                    <p class="photo-block-seconds-2-text-paragraf">от 3200 руб.</p>
                </div>
            </div></a>
            <a href="#"><div class="photo-block-seconds-8">
                <div class="photo-block-seconds-8-text">
                    <p class="photo-block-seconds-8-text-arrow"></p>
                    <p class="photo-block-seconds-8-text-paragraf">АКСЕССУАРЫ</p>
                </div>
            </div></a>    
        </div>
        <div class="photo-block-third">
            <a href="#"><div class="photo-block-third-3"></div></a>
            <a href="#"><div class="photo-block-third-7">
                <div class="photo-block-third-7-text">
                    <div class="photo-block-third-7-text-circle">
                        <div class="photo-block-third-7-text-circle-line"></div>
                    </div>
                    <p class="photo-block-third-7-text-paragraf">Самые низкие цены в Москве.</p>
                    <p class="photo-block-third-7-text-paragraf-1">Нашли дешевле? Вернем разницу.</p>
                </div>
            </div></a>
            <a href="#"><div class="photo-block-third-6">
                <div class="photo-block-third-6-text">
                    <p>СПОРТИВНАЯ</p>
                    <p>ОДЕЖДА</p>
                    <p class="photo-block-third-6-text-paragraf">от 590 руб.</p>
                </div>
            </div></a>
        </div>   
        <div class="photo-block-fourth">
            <a href="#"><div class="photo-block-fourth-8">
            <div class="photo-block-fourth-8-text">
                    <p class="photo-block-fourth-8-text-arrow"></p>
                    <p class="photo-block-fourth-8-text-paragraf">ЭЛЕГАНТНАЯ</p>
                    <p class="photo-block-fourth-8-text-paragraf-1">ОБУВЬ</p>
                    <p class="photo-block-fourth-8-text-paragraf-2">БОТИНКИ, КРОСОВКИ</p>
                </div>
            </div></a>
            <a href="#"><div class="photo-block-fourth-4">
                <div class="photo-block-fourth-4-text">
                    <p>ДЕТСКАЯ</p>
                    <p>ОДЕЖДА</p>
                    <p class="photo-block-fourth-4-text-paragraf">NEW ARRIVAL</p>
                </div>
            </div></a>
        </div>
    </div>
</div>

<?php 
    $footer_config = [
        'page-js'=>'main.js'
    ];
    include('parts/footer.php');
?>
