<?php
    session_start();
    define("INDEX",""); //Устрановка константы главного контроллера
    require_once('include/core.php'); //Подключение ядра
    require_once('include/functions.php'); //Подключение печати
    if(isset($_POST['Login']) and isset($_POST['Password']))
            {
                $username = $_POST['Login'];
                $password = $_POST['Password'];
            
                $query = "SELECT * FROM users WHERE Login='$username' and Password='$password'";
                $result = mysqli_query($link, $query) or die(mysqli_error($link));
                $count = mysqli_num_rows($result);
                $users = mysqli_fetch_all($result, MYSQLI_ASSOC);

                if($count == 1) {
                    $_SESSION['Login'] = $username;
                    foreach($users as $user){
                    $_SESSION['Phone'] = " ".$user['Phone'];
                    }
                }else{
                    $fmsg = "Ошибка";
                }
            }
            if (isset($_SESSION['Login'])){
                header('Location: index_user.php');
            }   
?>

<!DOCTYPE html>
<html lang="ru">
    <head>
        <meta charset="utf-8">
        <title>Вход</title>
        <link rel="stylesheet" href="css/Enter.css">
    </head>
    <body>
        <!--Верхняя строка-->
        <Div id="line">
            <Div id="main" onclick="location.href='index.php'">Главная</Div>
            <div id="baner">Лучшая аптека мира</div>
            <Div id="enter" onclick="location.href='Registration.php'">Регистрация</Div>
        </Div>

        <!--Рекламный банер на странице регистрации-->
        <div class="banner-container">
            <div class="banner-img">
                <img src="img/1.jpg" alt="">
            </div>
            <div class="banner-img">
                <img src="img/2.jpg" alt="">
            </div>
            <div class="banner-img">
                <img src="img/3.jpg" alt="">
            </div>
        </div>

        <!--Поле регистрации-->
        <form method="POST">
            <fieldset id="regfield">
                <legend id="registername">Вход</legend>
                <label>Логин:<input type="text" name="Login" size="15" maxlength="15" required="required"/></label>
                <br/><br/>
                <label>Пароль:<input type="text" name="Password" size="15" maxlength="15" required="required"/></label>
                <br/><br/>
                <Button id="Enter" type="submit">Войти</Button>
            </fieldset>
        </form>
    </body>
    <script src="Enter.js"></script>
<html>
