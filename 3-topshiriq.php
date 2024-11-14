<form action="3-topshiriq.php" method="post">
    <input type="number" name="n" placeholder="N sonini kiriting">
    <input type="submit" value="Yuborish">
<?php

$n = $_POST['n'];
$array = array();
$sum = 1;
for ($i = 1; $i <= $n; $i++) {
    $array[$i-1] = $i;
    $sum *= $i;
}

echo "<br>Ko'paytma: $sum";


?>