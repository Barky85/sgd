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
<label for="vSpeise">Vorspeise:</label>
<select id="vSpeise" name="vSpeise">
	<option value="salat">Gemischter Salat</option>
	<option value="rinderbouillon">Rinderbouillon</option>
	<option value="schafskaese">Gebackener Schafskäse</option>
</select>
</p>
<p>
<label for="hSpeise">Hauptgericht:</label>
<select id="hSpeise" name="hSpeise">
	<option value="pizza" >Pizza</option> 
	<option value="schnitzel">Schnitzel mit Pommes Frites</option>
	<option value="risotto">Basilikum-Risotto mit Spargel
	</option>
</select>
</p>
<p>
<label for="nSpeise">Dessert:</label>
<select id="nSpeise" name="hSpeise">
	<option value="pudding">Pudding</option> 
	<option value="kuchen">Kuchen</option>
	<option value="quark">Quarkspeise mit Obst</option>
</select>
</p>
<p>
<label for="getraenk">Getränk:</label>
<select id="getraenk" name="getraenk">
	<option value="schorle">Apfelschorle</option> 
	<option value="cola">Coca Cola</option> 
	<option value="saft">Fruchtsaft</option>
	<option value="kaffee">Kaffee</option>
	<option value="wasser">Mineralwasser</option>
	<option value="tee">Tee</option> 
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