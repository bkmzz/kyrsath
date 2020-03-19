<html>
    <head>
        <title>Страница помощи</title>
        <link rel="stylesheet" href="style1.css">
        <script src="java.js" type="text/javascript"> </script>
    </head>
    <body>
    <div class= 'fapka'>На данный момент этим людям нужна помощь:</div> 
   <div class ='hap1'>
    <?php
    session_start();
    echo "Добро пожаловать, ", $_SESSION['login'];
    echo "<br/><br/><a href='handler.php'>Выход</a></div>";
require "libs/rb.php";

$errors = array();
R::setup( 'mysql:host=localhost;dbname=kursath',
        'root', '571571571' );        
$result = R::getAll( 'SELECT * FROM book' );
echo '<div class="table"><table id="table" border="1">';
echo '<tr><td>№</td><td>Имя</td><td>Проблема</td><td>Необходимая сумма</td><td>Кнопка</td><tr>';
$i=0;
foreach($result as $brand => $massiv)
{
    echo '<tr>';
foreach($massiv  as  $inner_key => $value)
{
    if($inner_key!='manilist')
            echo '<td>'. $value .'</td>';
        }
        echo '<td> <button id="bat">помочь</button></td>';
        echo '</tr>';
    }
?>
</div>
    </body>
</html>
