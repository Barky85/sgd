<!DOCTYPE html> 
<html lang="de">
<head>
	<meta charset="utf-8" />
	<title>Formulare auswerten</title>
<?php
function setOption($gang, $wert, $text) {
	$ausgabe = "<option value='{$wert}'";
	if (isset($_POST["vSpeise"])) {
		if ($_POST[$gang] == $wert) {
			$ausgabe .= " selected";
		}
	}
	//Wenn kein Text übergeben wird, dann soll
	//der Text mit dem Wert identisch sein
	if(empty($text)) {
		$text = $wert;
	}
	$ausgabe .= ">$text</option>\n";
	echo $ausgabe;
}
?>
</head>
<body>
<?php
if (isset($_POST["vSpeise"])) {
	$gastStatus = $_POST["gastStatus"];
}
else {
	$gastStatus = "";
}
?>
<h1>Kantinenbestellung</h1>
<form method = "post">
<fieldset>
<h2>Menüauswahl</h2>
<p>
<label for="vSpeise">Vorspeise:</label>
<select id="vSpeise" name="vSpeise">
	<?php setOption("vSpeise", "salat", "Salat");?>
	<?php setOption("vSpeise", "rinderbouillon", "Rinderbouillon");?>
	<?php setOption("vSpeise", "schafskaese", "Schafskäse");?>
</select>
</p>
<p>
<label for="hSpeise">Hauptgericht:</label>
<select id="hSpeise" name="hSpeise">
	<?php setOption("hSpeise", "pizza", "Pizza");?>
	<?php setOption("hSpeise", "schnitzel", "Schnitzel mit Pommes Frites");?>
	<?php setOption("hSpeise", "risotto", "Basilikum-Risotto mit Spargel");?>
</select>
</p>
<p>
<label for="nSpeise">Dessert:</label>
<select id="nSpeise" name="nSpeise">
	<?php setOption("nSpeise", "pudding", "Pudding");?>
	<?php setOption("nSpeise", "kuchen", "Kuchen");?>
	<?php setOption("nSpeise", "quark", "Quarkspeise mit Obst");?>
</select>
</p>
<p>
<label for="getraenk">Getränk:</label>
<select id="getraenk" name="getraenk">
	<?php setOption("getraenk", "schorle", "Schorle");?>
	<?php setOption("getraenk", "cola", "Cola");?>
<?php setOption("getraenk", "saft", "Fruchtsaft");?>
<?php setOption("getraenk", "kaffee", "Kaffee");?>
<?php setOption("getraenk", "wasser", "Mineralwasser");?>
<?php setOption("getraenk", "tee", "Tee");?>
</select>
</p>
</fieldset>	 
<fieldset>
<p>
<input type="radio" id="eigener"
	name="gastStatus" value="mitarbeiter" <?php
	if($gastStatus!="gast") {
		echo "checked";
	}?> />
<label for="eigener">Mitarbeiter</label><br />
<input type="radio" id="fremd"
	name="gastStatus" value="gast" <?php
	if($gastStatus=="gast") {
		echo "checked";
	}?> /> 
<label for="fremd">Gast </label>

</p>
<p>
<input type = "submit" value="bestellen"/>
</p>
</fieldset>
</form>
</body>
</html>