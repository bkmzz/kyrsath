<?php session_start();
    define("INDEX",""); //Устрановка константы главного контроллера
    require_once('include/core.php'); //Подключение ядра
    require_once('include/functions.php'); //Подключение печати
?>

<!DOCTYPE html>
<html lang="ru">
    <head>
        <meta charset="utf-8">
        <title>Главная страница админа</title>
        <link rel="stylesheet" href="css/Main2.css">
    </head>
    <body>
        <!--Верхняя строка-->
        <Div id="line">
            <div id="baner">Админ панель</div>
            <Div id="main" onclick="location.href='donation.php'">Вернуться</Div>
        </Div>

        <!--Поле регистрации-->
        <form>
            <fieldset id="regfield">
                <legend id="registername">Список пожертвований</legend>
                <?php $trades = get_trades();?>
                <?//echo '<pre>';
                //var_dump($trades);
                //echo '</pre>';?>
                <?php foreach($trades as $trade): ?>
                <div class="header_pull">
                <?global $link;
                    $find = $trade['UserId'];
                    $sql = "SELECT * FROM users WHERE id = $find";
                    $result = mysqli_query($link, $sql);
                    $users = mysqli_fetch_all($result, MYSQLI_ASSOC);
                    foreach($users as $user):
                    ?>
                    <div class="name">Имя: <?=$user['Name']?></div>
                    <div class="title">Электронная почта: <?=$user['Email']?></div>
                    <div class="text">Номер телефона: <?=$user['Number']?></div>
                    <?php endforeach; ?>
                    <div class="cost">Пожертвование: <?=$trade['Cost']?> Руб.</div>
                </div>
                <?php endforeach; ?>
            </fieldset>
        </form>
    </body>
    <script src="Enter.js"></script>
    


