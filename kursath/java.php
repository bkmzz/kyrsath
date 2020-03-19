

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
echo "var arr[$brand][$i] = $value <br>
";
}
}
?><script>
var table = document.querySelector('#table');
for (var i=0;i<arr.lenght;i++){
    var tr = document.createElement('td');
    for(var j=0;j<arr[i].lenght;j++){
        var td = document.createElement('td');
        td.innerHTML = arr[i][j];
        tr.appendChild(td);
    }
    table.appendChild(tr);
}
</script>