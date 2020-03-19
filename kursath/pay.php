<?php session_start();
    define("INDEX",""); //Устрановка константы главного контроллера
    require_once('include/core.php'); //Подключение ядра
    require_once('include/functions.php'); //Подключение печати
?>
<?php
        echo '<pre>';
        var_dump($_SESSION['cost']);
        echo '</pre>';       
        ?>

<!DOCTYPE html>
<html lang="ru">
    <head>
        <meta charset="utf-8">
        <title>Главная страница</title>
        <link rel="stylesheet" href="css/Registration.css">
    </head>
    <body>

    <!--Верхняя строка-->
    <Div id="line">
            <Div id="enter" onclick="location.href='end.php'">Вернуться</Div>
            <div id="baner">Банк (Название)</div>
            <Div id="enter" onclick="location.href='end.php'">Вернуться</Div>
        </Div>
        <form method="POST" action="endpay.php">
            <label>Имя и Фамилия: <?echo($_SESSION['Name']);?></label>
            <label>Номер телефона: <?echo($_SESSION['Phone'])?></label>
            <label>Почта: <?echo($_SESSION['Email'])?></label>
            <label name="cost"><?echo($_POST['check']);?></label>
        <button class="twos" type="submit">Перейти к оплате</button>
        </form>


