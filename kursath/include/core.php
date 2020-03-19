<?php defined('INDEX') OR die('Прямой доступ к странице запрещен');

$link = mysqli_connect('localhost','root','','poorchildren');

if(mysqli_connect_errno())
    {
        echo 'Ошибка в подлючении к базе данных ('.mysqli_connect_errno().'): '.mysqli_connect_err();
        exit();
    }
?>