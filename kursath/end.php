<?php 
    define("INDEX",""); //Устрановка константы главного контроллера
    require_once('include/core.php'); //Подключение ядра
    session_start();
    session_destroy();
    header('Location: index.php');
?>