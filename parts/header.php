<?php 

    include('parts/header_conf.php');
?>
<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title><?=$header_config['title']?></title>
    <link href="https://fonts.googleapis.com/css?family=Gupter|Roboto|Roboto+Condensed&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="/styles/style.css">
    <link rel="stylesheet" href="/styles/<?=$header_config['page-style']?>">
</head>
<body>
<div class="wrapper">
    <div class="header">
        <div class="logoNav">
            <div class="logoNav-logo"></div>
            <nav>
                <p><a href="#">Женщинам</a></p>
                <p><a href="#">Мужчинам</a></p>
                <p><a href="#">Детям</a></p>
                <p><a href="#">Новинки</a></p>
                <p><a href="#">О нас</a></p>
            </nav>
        </div>
        <div class="account-basket">
            <div class="account">
                <div class="account-logo"></div>
                <a href="#">Войти</a>
            </div>
            <div class="basket">
                <div class="basket-logo"></div>
                <a href="#">Корзина </a>
            </div>
        </div>    
    </div>