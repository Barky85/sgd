<!DOCTYPE html>
<html lang="de">
  <head>
    <meta charset="utf-8" />
    <title>Hier steht der Titel</title>
  </head>
<body>
<?php
$zahlen = array(0);
$i=32;
$j=$i/8;
$e=$i * ($j-$i)*(-1) + 50;
for ($i=$j; $i <= $e; $i++) {
    $zahlen[] = $i;
}
echo "<p> Das Array hat</p>" .count($zahlen); 

echo "<hr>"; 

// array(0, 1, 2, 3, 4, 5, 6, 7, 8, 9, 10, 11, 12)
foreach(range(0, 12) as $number) {
    echo "$number";
}
echo "<hr>"; 
// Der step Parameter
// array(0, 10, 20, 30, 40, 50, 60, 70, 80, 90, 100)
foreach(range(0, 100, 10) as $number) {
    echo $number;
}
echo "<hr>"; 
// Verwendung von Zeichenfolgen
// array('a', 'b', 'c', 'd', 'e', 'f', 'g', 'h', 'i');
foreach(range('a', 'i') as $letter) {
    echo $letter;
}
echo "<hr>"; 
// array('c','b','a');
foreach(range('c', 'a') as $letter) {
    echo $letter;
}


?>


</body>
</html>