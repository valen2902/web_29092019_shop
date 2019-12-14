<?php
session_start();
$_SESSION['count']++;
echo $_SESSION['count'];
?>