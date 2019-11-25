<?php 
    /*
        Файл - шаблон шапки
     */
    include('parts/header_conf.php');
?>
<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title><?=$header_config['title']?></title>
    <link rel="stylesheet" href="/styles/style.css">
    <link rel="stylesheet" href="/styles/<?=$header_config['page-style']?>">
</head>
<body>
    <div class="wrapper">