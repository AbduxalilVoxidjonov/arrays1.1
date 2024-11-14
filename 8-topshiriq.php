<form action="8-topshiriq.php" method="post"> 
Sonlarni shu tarkibda kiriting:12 13 1421 2342
<br>
    <input type="text" name="n" placeholder="Number">
    <input type="submit" value="Yuborish">

<?php

$n = $_POST['n'];
$array = array();

$array = explode(" ", $n);
echo "<br>Array: <br>";	
 foreach($array as $x) {
     echo "$x <br>";
 }


?>