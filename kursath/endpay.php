<?php session_start();
    define("INDEX",""); //Устрановка константы главного контроллера
    require_once('include/core.php'); //Подключение ядра
    require_once('include/functions.php'); //Подключение печати
    header('Location: donation.php');
?>
<?php
                $cost = $_SESSION['cost'];
                $Id = $_SESSION['ID'];
        //echo '<pre>';
        //var_dump($link);
        //echo '</pre>';
                $query = "INSERT INTO `donation`(`Cost`, `UserId`) VALUES ('$cost', '$Id')";
                $result = mysqli_query($link, $query);
                if($result) 
                {
                    $smsg = "Регистрация прошла успешно";
                }
                else 
                {
                    $fmsg = "Ошибка";
                }
            
        ?>