<!DOCTYPE html> 
<html lang="de">
<head>
	<meta charset="utf-8" />
	<title>Formulare auswerten</title>
</head>
<body>
<h1>Kantinenbestellung</h1>
<form method = "post">
<fieldset>
<h2>Menüauswahl</h2>
<p>
<?php //if(isset($_POST)) var_dump($_POST)?>
<label for="vSpeise">Vorspeise:</label>
<select id="vSpeise" name="vSpeise">
	<option value="salat"
		<?php if($_POST['vSpeise'] == "salat") {
			echo "selected";
		}?>>Gemischter Salat</option>
	<option value="rinderbouillon"
		<?php if($_POST['vSpeise'] == "rinderbouillon") {
			echo "selected";
		}?>>Rinderbouillon</option>
	<option value="schafskaese"
		<?php if($_POST['vSpeise'] == "schafskaese") {
			echo "selected";
		}?>>Gebackener Schafskäse</option>
</select>
</p>
<p>
<label for="hSpeise">Hauptgericht:</label>
<select id="hSpeise" name="hSpeise">
	<option value="pizza" 
		<?php if($_POST['hSpeise'] == "pizza") {
			echo "selected";
		}?>>Pizza</option> 
	<option value="schnitzel" 
		<?php if($_POST['hSpeise'] == "schnitzel") {
			echo "selected";
		}?>>Schnitzel mit Pommes Frites</option>
	<option value="risotto" 
		<?php if($_POST['hSpeise'] == "risotto") {
			echo "selected";
		}?>>Basilikum-Risotto mit Spargel</option>
</select>
</p>
<p>
<label for="nSpeise">Dessert:</label>
<select id="nSpeise" name="nSpeise">
	<option value="pudding" 
		<?php if($_POST['nSpeise'] == "pudding") {
			echo "selected";
		}?>>Pudding</option> 
	<option value="kuchen" 
	<?php if($_POST['nSpeise'] == "kuchen") {
			echo "selected";
		}?>>Kuchen</option>
	<option value="quark" 
	<?php if($_POST['nSpeise'] == "quark") {
			echo "selected";
		}?>>Quarkspeise mit Obst</option>
</select>
</p>
<p>
<label for="getraenk">Getränk:</label>
<select id="getraenk" name="getraenk">
	<option value="schorle"
		<?php if($_POST['getraenk'] == "schorle") {
			echo "selected";
		}?>>Apfelschorle</option> 
	<option value="cola"
		<?php if($_POST['getraenk'] == "cola") {
			echo "selected";
		}?>>Coca Cola</option> 
	<option value="saft"
		<?php if($_POST['getraenk'] == "saft") {
			echo "selected";
		}?>>Fruchtsaft</option>
	<option value="kaffee"
		<?php if($_POST['getraenk'] == "kaffee") {
			echo "selected";
		}?>>Kaffee</option>
	<option value="wasser"
		<?php if($_POST['getraenk'] == "wasser") {
			echo "selected";
		}?>>Mineralwasser</option>
	<option value="tee"
		<?php if($_POST['getraenk'] == "tee") {
			echo "selected";
		}?>>Tee</option> 
</select>
</p>
</fieldset>	 
<fieldset>
<p>
<input type="radio" id="eigener" name="gastStatus"
			value="mitarbeiter" checked/>
<label for="eigener">Mitarbeiter</label><br />
<input type="radio" id="fremd" name="gastStatus" 
			value="gast" />
<label for="fremd">Gast </label>
</p>
<p>
<input type = "submit" value="bestellen"/>
</p>
</fieldset>
</form>
</body>
</html>