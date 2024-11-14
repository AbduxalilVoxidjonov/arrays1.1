<form action="1-topshiriq.php" method="post">
    <input type="number" name="n" placeholder="N sonini kiriting">
    <input type="submit" value="Yuborish">

<?php
$array = array();
$n = $_POST['n'];


for ($i = 0; $i < $n; $i++) {
    $array[$i] = $i;
}


foreach ($array as $x) {
    echo "$x <br>";
  }
?>
