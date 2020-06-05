<!DOCTYPE html>
<html lang="de">
  <head>
    <meta charset="utf-8" />
    <title>Hier steht der Titel</title>
  </head>
<body>

<?php
function eineFunktion(&$param)
{
	$param = $param * 2;
}
function nochEineFunktion($param)
{
	$param = $param / 2;
}
$var1 = 10;
$var2 = 20;
$var3 = 30;
$var4 = 0;
$var4 = &$var1;
echo "var4: $var4<br />"; // Ausgabe: [. . .]

eineFunktion($var4);
echo "var1: $var1<br />"; // Ausgabe: [. . .]

if ($var4 > $var2) {
	$var4 = $var2;
}
else {
	$var4 = &$var3;
}
nochEineFunktion($var4);

//echo "var4: $var4<br />"; // Ausgabe: [. . .]
echo "<hr>";
echo "var1: $var1<br />"; // Ausgabe: [. . .]
echo "var2: $var2<br />";
echo "var3: $var3<br />";
echo "<b>var4: $var4</b><br />";

eineFunktion($var3);

echo "<hr>";
echo "<b>var1: $var1</b><br />"; // Ausgabe: [. . .]
echo "var2: $var2<br />";
echo "var3: $var3<br />";
echo "var4: $var4<br />";

echo "<hr>";
echo "var2: $var2<br />"; // Ausgabe: [. . .]
?>



</body>
</html>