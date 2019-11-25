<?php
    $products = [
        [
            'name'=> 'Cap',
            'price'=> 1900
        ],
        [
            'name'=> 'Шапка',
            'price'=> 2700
        ]
    ];

    // json_encode - превращает ассоц. массив в РHP в строчку в формате JSON
    echo json_encode($products);
?>