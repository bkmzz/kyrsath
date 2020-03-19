<html>
<head>
<title> Страница помощи</title>

</head>
<frameset rows="15%,80%,5%"><frame src= "table.php" scrolling="no">
   <div class= 'fapka'>На данный момент этим людям нужна помощь:</div> 
   <div></div></frameset>
   <?php
require "libs/rb.php";

$errors = array();
R::setup( 'mysql:host=localhost;dbname=kursath',
        'root', '571571571' );        
$result = R::getAll( 'SELECT * FROM book' );
$i=-1;
foreach($result as $brand => $massiv)
{
    
foreach($massiv  as  $inner_key => $value)
{
$i++;
setcookie($i,"var arr[$brand][$i] = $value <br>");
//$_COOKIE[$i] =  ;
}
}
?>

</html>