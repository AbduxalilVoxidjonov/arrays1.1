<form action="4-topshiriq.php" method="post">
    <input type="number" name="n" placeholder="N sonini kiriting">
    <input type="submit" value="Yuborish">
<?php

$n = $_POST['n'];
$array = array();
$sum = 0;
for ($i = 1; $i <= $n; $i++) {
    $array[$i-1] = $i;
    if($i % 2 == 1){
        $sum += $array[$i-1];
    }
}

echo "Jami: $sum";



?>