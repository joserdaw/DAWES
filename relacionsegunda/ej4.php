<!DOCTYPE HTML>
<html>
<head>
  <title>Resultado</title>
  <meta http-equiv="content-type" content="text/html; charset=UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" type="text/css" href="style.css" />
</head>
<body>

<?php

$x=$_POST['x'];
$y=$_POST['y'];

echo $x." + ". $y ." = ".$suma=$x+$y."<br>";
echo $x." - ". $y ." = ".$resta=$x-$y."<br>";
echo $x." * ". $y ." = ". $x*$y."<br>";
echo $x." / ". $y ." = ". $x/$y."<br>";

?>

</body>
</html>
