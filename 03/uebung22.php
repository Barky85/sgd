<!DOCTYPE html>
<html lang="de">
  <head>
    <meta charset="utf-8" />
    <title>Hier steht der Titel</title>
  </head>
<body>
<?php
$a = 9;
$b = 9;

if ($a>$b) {
    echo "<p>\$a hat den Wert $a und ist damit größer als \$b mit dem Wert $b</p>";
}

elseif ($a<$b) {
    echo "<p>\$a hat den Wert $a und ist damit kleiner als \$b mit dem Wert $b</p>";
}

elseif ($a===$b) {
    echo "<p>\$a hat den Wert $a und ist gleich \$b mit dem Wert $b</p>";
}


?>
</body>
</html>