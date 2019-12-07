<?php 
    //Файл для полученния данных о каталоге
    include($_SERVER['DOCUMENT_ROOT'].'/parts/header_conf.php');
    $response = [
        'products'=>[]
    ];

    $sql_products = "SELECT * FROM products";
    $result_products = mysqli_query($link, $sql_products);

    while($row = mysqli_fetch_assoc($result_products)){
        $response['products'][] = $row;    
    }

    sleep(1);
    echo json_encode($response);
?>