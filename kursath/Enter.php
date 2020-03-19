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
    


