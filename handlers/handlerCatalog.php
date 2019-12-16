<?php
    include($_SERVER['DOCUMENT_ROOT'].'/parts/header_conf.php');
    $response = [
        'products'=>[],
        'pagination'=>[
            'count'=>1,
            'now'=>2
        ]
    ];

    $limit_products = 12;
    $now = 1;

    if( isset($_GET['now']) ){
        $now = (int) $_GET['now'];
    }

    $sql_all_products = "SELECT products.* FROM products
    INNER JOIN product_category ON products.id = product_category.product_id 
    WHERE product_category.category_id = {$_GET['catalog_id']}";
    $result_all_products = mysqli_query($link, $sql_all_products);

    $count_products = mysqli_num_rows($result_all_products);
    $count_pages = ceil($count_products / $limit_products);
    
    $response['pagination']['count'] = $count_pages;
    $response['pagination']['now'] = $now;

    $start_row = ($now - 1) * $limit_products;
    $sql_products = "SELECT products.* FROM products
    INNER JOIN product_category ON products.id = product_category.product_id 
    WHERE product_category.category_id = {$_GET['catalog_id']}
    LIMIT {$start_row}, {$limit_products}";
    $result_products = mysqli_query($link, $sql_products);
    while($row = mysqli_fetch_assoc($result_products)){
        $response['products'][] = $row;
    }
    // INSERT products (id, name, price, img, description) VALUE (NULL, 'Платье', 5000, '/images/catalog/dress.jpg' , 'Красивое красное платье');
    // INSERT products (id, name, price, img, description) VALUE (NULL, 'Рубашка', 8200, '/images/catalog/shirt.jpg' , 'Мужская голубая рубашка');

    sleep(1);
    echo json_encode($response);
?>