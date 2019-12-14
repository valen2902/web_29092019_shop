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
    
    <!-- <link rel="stylesheet" href="stackpath.bootstrapcdn.com/bootstrap/4.1.2/css/bootstrap.min.css">
    <link rel="stylesheet" href="buzina-pagination.min.css"> -->


    <link href="https://fonts.googleapis.com/css?family=Roboto&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="/styles/style.css">
    <link rel="stylesheet" href="/styles/<?=$header_config['page-style']?>">
</head>
<body>
    <div class="wrapper">
    <header>
        <nav>
            <a href="/catalog.php?id=1">Женщинам</a>
            <a href="/catalog.php?id=2">Мужчинам</a>
            <a href="/catalog.php?id=3">Детям</a>
        </nav>
    </header>   