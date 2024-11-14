<form action="7-topshiriq.php" method="post">
    <input type="number" name="n" placeholder="N sonini kiriting">
    <input type="submit" value="Yuborish">
<?php

$n = $_POST['n'];
$array = array();
$sum = 0;
for ($i = 0; $i <= $n; $i++) {
    $array[$i] = $i;
    if($array[$i] % 2 == 0){
        $sum += $array[$i];
    }
}

echo "Jami: $sum";



?>