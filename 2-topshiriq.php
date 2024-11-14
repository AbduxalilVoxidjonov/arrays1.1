<form action="2-topshiriq.php" method="post">
    <input type="number" name="n" placeholder="N sonini kiriting">
    <input type="submit" value="Yuborish">
<?php

$n = $_POST['n'];
$array = array();
$sum = 0;
for ($i = 0; $i <= $n; $i++) {
    $array[$i-1] = $i;
    $sum += $i;
}

echo "Jami: $sum";



?>