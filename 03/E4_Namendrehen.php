<!DOCTYPE html>
<html lang="de">
  <head>
    <meta charset="utf-8" />
    <title>Einsendeaufgabe 4</title>
  </head>
<body>

<?php
$arr = [
    "Meier, Peter",
    "Schulze, Monika",
    "Schmidt, Ursula",
    "Brosowski, Klaus"
];


for ($i=0; $i<=3; $i++) {

$string1 = $arr[$i];
$arrName1 = explode(",", $string1);
$arr[$i] = "$arrName1[1] $arrName1[0]";
}

print_r ($arr);



/*
// Beispiel 1
$pizza  = "Teil1 Teil2 Teil3 Teil4 Teil5 Teil6";
$teile = explode(" ", $pizza);
echo $teile[0]; // Teil1
echo $teile[1]; // Teil2




print_r ($arr);
$arrayGesamt = array (
  array ($arr[0]),
  array ($arr[1]),
  array ($arr[2]),
  array ($arr[3]),
);     



$gedreht = array_reverse($arrayGesamt[0]);




//[$arr[0], $arr[1], $arr[2], $arr[3]];

echo "<p>";
print_r ($arrayGesamt);

echo "<p> Gedreht</p>";
print_r ($gedreht);

/*
$string1 = $arr[0];

echo "<p>$string1</p>";


$gedreht = array_reverse($arr);
$test = $arr[3];
$test2 = trim ($test, ",B");

echo "<p>$test2</p>";
print_r ($gedreht);
*/
?>
</body>
</html>