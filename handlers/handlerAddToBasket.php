<?php
    session_start();
    if( !isset($_SESSION['basket']) ){
        $_SESSION['basket'] = [];
    }
    $_SESSION['basket'][] = $_GET['id'];

    echo count( $_SESSION['basket']);
?>