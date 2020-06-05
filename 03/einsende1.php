<!DOCTYPE html>
<html lang="de">
  <head>
    <meta charset="utf-8" />
    <title>Einsendeaufgabe 1</title>
  </head>
<body>
<h1>Das kleine 1 mal 1</h1>
<?php
echo "<table cellspacing = '10'>\n";
echo "<thead> \n\t <tr> \n \t\t<th>*</th>\n";

for($i=1; $i <=10; $i++) { //Tabellenkopf
    echo "\t\t<th>$i</th>\n";
}
echo "</thead>\n"; 

for($j=1; $j<=10; $j++) { //äußere Schleife

    echo "\t<tr>\n\t\t<th>$j</th>\n";
    for($i=1; $i <=10; $i++) { //inner Schleife
        echo "\t\t<td>".($i * $j)."</td>\n";
        
    }
    echo "\t</tr>\n";

}
?>
</body>
</html>