<html>
    <head>
        <title>благотворительная помощь</title>
        <link rel="stylesheet" href="style1.css">
    </head>

<body>

    <div class='hap1'>
<?php

require "regist.php";
if(isset($_SESSION['login'])){
    $_SESSION = array();
    session_destroy();
    echo "<br/><a href=\лаба2.2.php>страница 1</a>";
    echo "<br/><a href=\лаба2.3.php>страница 2</a>";
}    
else {
  //  echo ($eror);
?>
 <div class="hap">
<p>регестрация или вход</p>


<form id="reg" method="post" >
    <input type="text" name="login" placeholder="Enter your login" required style="color: rgb(51,255,51)"/><br/>
    <br/>
    <input type="password" name="password" placeholder="Enter your password" required style="color: rgb(51,255,51)"/><br/>
    <br/>
    <input type="submit" name="submit" value="войти" />
    <input type="submit"  name="submitt" value="зарегестрироваться"></form></div>
<?php
}
 ?></div>

  <div class="hap">
    <p>Поможем миру вместе</p>
</div>
<div class="p1"><p> Много людей становятся жетвами несчастий каждый день, но благодаря ВАШЕЙ помощи ОНИ смогут справится с этим</p></div>  
<div class="p2"><p>техт</p></div>
<div class="p3"> сайт создан бла бла бла</div>
</body>
</html>