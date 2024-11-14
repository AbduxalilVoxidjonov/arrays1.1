<form action="9-topshiriq.php" method="post">
    <input type="number" name="n" placeholder="N sonini kiriting">
    <input type="submit" value="Yuborish">
<?php

$n = $_POST['n'];
$array = array();

for ($i = 0; $i <= $n; $i++) {
    $array[$i] = $i;
   
}
echo "<br>Array: ";
echo "<br>";
foreach ($array as $x) {
    echo "$x <br>";
  }
[$array[2], $array[5]] = [$array[5], $array[2]];

echo "New Array: <br>";

foreach ($array as $x) {
    echo "$x <br>";
  }


?>