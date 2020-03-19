<?php session_start();
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
                    $_SESSION['Name'] = " ".$user['Name'];;
                    $_SESSION['Phone'] = " ".$user['Number'];
                    $_SESSION['Email'] = " ".$user['Email'];
                    $_SESSION['Admin'] = " ".$user['Admin'];
                    $_SESSION['ID'] = " ".$user['id'];
                    }
                }else{
                    $fmsg = "Ошибка";
                }
            }
            if (isset($_SESSION['Login'])){
                header('Location: donation.php');
            }   
?>

<!DOCTYPE html>
<html lang="ru">
    <head>
        <meta charset="utf-8">
        <title>Главная страница</title>
        <link rel="stylesheet" href="css/Main.css">
    </head>
    <body>
        <div class="main-screen">
            <div class=".main-screen__background">
            <video autoplay muted loop id="myVideo">
                <source src="vdeo/video.mp4" type="video/mp4">
            </video>
            </div>
        </div>

        <form method="POST" class="Entermenu">
            <fieldset id="regfield">
                <legend id="registername">Помочь нуждающимся</legend>
                <label>Логин:<input type="text" name="Login" size="15" maxlength="15" required="required"/></label>
                <br/><br/>
                <label>Пароль:<input type="text" name="Password" size="15" maxlength="15" required="required"/></label>
                <br/><br/>
                <Button id="Enter" type="submit">Войти</Button>
            </fieldset>
        </form>

        <div class="main-screen__content">
        <div class="main-screen__title1"> Благотворительный фонд "Линия жизни" </div>
        <div class="main-screen__title2"> Твой вклад может спасти жизни. </div>
        </div>


        <!--Верхняя строка-->
        <Div id="line">
            <div id="baner">О нашем благотворительном фонде: </div>
        </Div>

<div>
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
        <div class="object">
        <h1>О фонде:</h1>
        <div class="ones">Благотворительный фонд «Линия Жизни» создан 
            с целью оказания помощи детям в возрасте до 18 лет (включительно)
             от заболеваний, с которыми способна справиться современная медицина.
        </div>
        <div class="twos">Мы хотим побудить людей принять участие в судьбе 
        каждого ребенка, на долю которого выпало серьезное испытание.
        </div>
    </div>
    <?global $link;
                    $find = $trade['UserId'];
                    $sql = "SELECT COUNT(*) FROM donation";
                    $result = mysqli_query($link, $sql);
                    $users = mysqli_fetch_all($result, MYSQLI_ASSOC);
                    foreach($users as $user):
                    ?>
    <div class="helps">
        <h1> Детей, что получили помощь благодаря вам: <?echo($user['COUNT(*)'])?>!</h1>
    </div>
                    <?endforeach;?>

    <Button id="Enter" onclick="location.href='Registration.php'" >Хочу помочь(регистрация)</Button>

</div>


        <!--Место для подвала-->
        <div class="pod"> </div>

        <Div id="line1">
        <div>Сайт создан при поддержке Кристофер ИНК(с)</div>
        <?if($_SESSION['Admin'] == 1){?><div onclick="location.href='admin.php'">Админ панель</div><?}?>
    </Div>
    </body>
    <script src="Enter.js"></script>
    


