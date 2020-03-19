<?php
require "libs/rb.php";

$errors = array();
R::setup( 'mysql:host=localhost;dbname=kursath',
        'root', '571571571' );

if (isset($_POST["submitt"])){
    if(R::count('users',"llogin =?", array($_POST['login']))){
    $errors[] = 'такой логин уже есть';
    echo '<div style = "color: red">'.array_shift($errors).'</div><hr>';
        
    }
    else{
    $user = R::dispense('users');
    $user->llogin= $_POST['login'];
    $user->pass= $_POST['password'];
    R::store($user);session_start();
    $_SESSION['login']=$_POST['login'];
    header("Location: table.php");
    }
}
if (isset($_POST["submit"])){
   $user = R::findOne('users','llogin = ?', array($_POST['login']));
    if ($user){
        if ($user->pass == $_POST['password']){
            session_start();
            $_SESSION['login'] = $_POST['login'];
            header("Location: table.php");
        } else{
            $errors[] = 'Пароль введен неверно';}}
    else{
        $errors[] = 'Логин набран неверно';
        }
    echo '<div style = "color: red">'.array_shift($errors).'</div><hr>'; 
}
?>



