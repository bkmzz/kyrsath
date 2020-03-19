<?php session_start();
    define("INDEX",""); //Устрановка константы главного контроллера
    require_once('include/core.php'); //Подключение ядра
    require_once('include/functions.php'); //Подключение печати
    $_SESSION['cost'] = $_POST['check']
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
            <Div id="main" onclick="location.href='donation.php'">Главная</Div>
            <div id="baner">Ваши данные</div>
            <Div id="enter" onclick="location.href='end.php'">Выйти</Div>
        </Div>

        <div class="object">
        <h1>Вы жертвуете <? echo($_POST['check']); ?> рублей</h1>
        <div class="ones"> Дорогой <? $_SESSION['Name'] ?>, благотворительный фонд «Линия Жизни» благодарит вас
        за содействие и материальную помощь нуждающимся.
        </div>
        <div class="twos">Мы ценим ваш вклад в благотворительный фонд. Вы делаете мир лучше!
        <form method="POST" action="pay.php">
            <label name="cost"><?echo($_POST['check']);?></label>
        <button class="twos" type="submit">Перейти к оплате</button>
        </form>
        
        </div>
    </div>


        <!--Место для подвала-->
        <div class="pod"> </div>

        <Div id="line1">
        <div>Сайт создан при поддержке Кристофер ИНК(с)</div>
        <?if($_SESSION['Admin'] == 1){?><div onclick="location.href='admin.php'">Админ панель</div><?}?>
    </Div>
    </body>
    <script src="Enter.js"></script>
    


