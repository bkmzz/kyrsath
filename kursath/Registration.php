<?php session_start();
    define("INDEX",""); //Устрановка константы главного контроллера
    require_once('include/core.php'); //Подключение ядра
    require_once('include/functions.php'); //Подключение печати
?>

<!DOCTYPE html>
<html lang="ru">
    <head>
        <meta charset="utf-8">
        <title>Регистрация</title>
        <link rel="stylesheet" href="css/Registration.css">
    </head>
    <body>

        <?php
            if(isset($_POST['Login']) && isset($_POST['Password']) && isset($_POST['Phone']) && isset($_POST['imy']) && isset($_POST['email']))
            {
                $username = $_POST['Login'];
                $password = $_POST['Password'];
                $phone = $_POST['Phone'];
                $name = $_POST['imy'];
                $email = $_POST['email'];
        //echo '<pre>';
        //var_dump($link);
        //echo '</pre>';
                $query = "INSERT INTO `users`(Login, Password, `Number`, `Name`, `Email`) VALUES ('$username','$password','$phone','$name', '$email')";
                $result = mysqli_query($link, $query);
                if($result) 
                {
                    $smsg = "Регистрация прошла успешно";
                }
                else 
                {
                    $fmsg = "Ошибка";
                }
            }
            
        ?>

        <!--Верхняя строка-->
        <Div id="line">
            <Div id="main" onclick="location.href='index.php'">Главная</Div>
            <div id="baner">Стать спонсором</div>
            <Div id="enter" onclick="location.href='Enter.php'">Войти</Div>
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
                <legend id="registername">Регистрация</legend>
                <?php if(isset($smsg)){?><div class="alert alert-success" role="alert"> <?php echo $smsg;?> </div><?php } ?>
                <?php if(isset($fmsg)){?><div class="alert alert-danger" role="alert"> <?php echo $fmsg;?> </div><?php } ?>
                <label>Логин:<input type="text" name="Login" size="40" maxlength="40" required="required"/></label>
                <br/><br/>
                <label>Пароль:<input type="text" name="Password" size="40" maxlength="40" required="required"/></label>
                <br/><br/>
                <label>Телефон:<input type="text" name="Phone" size="11" maxlength="11" required="required"/></label>
                <br/><br/>
                <label>Имя и Фамилия:<input type="text" name="imy" size="40" maxlength="40" required="required"/></label>
                <br/><br/>
                <label>Email:<input type="text" name="email" size="40" maxlength="40" required="required"/></label>
                <br/><br/>
                <Button id="Registration" type="submit">Зарегистрироваться</Button>
            </fieldset>
        </form>
    <!--Место для подвала-->
    <div class="pod"> </div>



<?if($_SESSION['Admin'] == 1){?><div onclick="location.href='admin.php'">Админ панель</div><?}?>
</Div>
</body>
<script src="Enter.js"></script>
</html>