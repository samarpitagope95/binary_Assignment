<!DOCTYPE html>
<html>
<body>

<?php
$age = array("Amit"=>"35", "Rina"=>"37", "Soma"=>"43");

foreach($age as $x => $x_value) {
  echo "Key=" . $x . ", Value=" . $x_value;
  echo "<br>";
}
?>

</body>
</html>
