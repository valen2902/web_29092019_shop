<?php
    include($_SERVER['DOCUMENT_ROOT'].'/parts/header_conf.php');
    $response = [
        'products'=>[]
    ];
    
    $sql_products = "SELECT * FROM products";
    $result_products = mysqli_query($link, $sql_products);
    while($row = mysqli_fetch_assoc($result_products)){
        $response['products'][] = $row;
    }
    // INSERT products (id, name, price, img, description) VALUE (NULL, 'Платье', 5000, '/images/catalog/dress.jpg' , 'Красивое красное платье');
    // INSERT products (id, name, price, img, description) VALUE (NULL, 'Рубашка', 8200, '/images/catalog/shirt.jpg' , 'Мужская голубая рубашка');

    sleep(3);
    echo json_encode($response);
?>