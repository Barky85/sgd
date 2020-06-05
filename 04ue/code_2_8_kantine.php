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
	<option value="salat"
	<?php if(isset($_POST['vSpeise'])) {
		if($_POST['vSpeise'] == "salat") {
			echo "selected";
		}
	}?>>Gemischter Salat</option>
	<option value="rinderbouillon"
	<?php if(isset($_POST['vSpeise'])) {
		if($_POST['vSpeise'] == "rinderbouillon") {
			echo "selected";
		}
	}?>>Rinderbouillon</option>
	<option value="schafskaese"
	<?php if(isset($_POST['vSpeise'])) {
		if($_POST['vSpeise'] == "schafskaese") {
			echo "selected";
		}
	}?>>Gebackener Schafskäse</option>
</select>
</p>
<p>
<label for="hSpeise">Hauptgericht:</label>
<select id="hSpeise" name="hSpeise">
	<option value="pizza" 
	<?php if(isset($_POST['hSpeise'])) {
		if($_POST['hSpeise'] == "pizza") {
				echo "selected";
			}
		}?>>Pizza</option> 
	<option value="schnitzel" 
	<?php if(isset($_POST['hSpeise'])) {
		if($_POST['hSpeise'] == "schnitzel") {
				echo "selected";
			}
		}?>>Schnitzel mit Pommes Frites</option>
	<option value="risotto" 
	<?php if(isset($_POST['hSpeise'])) {
		if($_POST['hSpeise'] == "risotto") {
			echo "selected";
			}
		}?>>Basilikum-Risotto mit Spargel</option>
</select>
</p>
<p>
<label for="nSpeise">Dessert:</label>
<select id="nSpeise" name="nSpeise">
	<option value="pudding" 
	<?php if(isset($_POST['nSpeise'])) {
		if($_POST['nSpeise'] == "pudding") {
				echo "selected";
			}
		}?>>Pudding</option> 
	<option value="kuchen" 
	<?php if(isset($_POST['nSpeise'])) {
		if($_POST['nSpeise'] == "kuchen") {
			echo "selected";
			}
		}?>>Kuchen</option>
	<option value="quark" 
	<?php if(isset($_POST['nSpeise'])) {
		if($_POST['nSpeise'] == "quark") {
			echo "selected";
		}
		}?>>Quarkspeise mit Obst</option>
</select>
</p>
<p>
<label for="getraenk">Getränk:</label>
<select id="getraenk" name="getraenk">
	<option value="schorle"
	<?php if(isset($_POST['getraenk'])) {
		if($_POST['getraenk'] == "schorle") {
			echo "selected";
		}
		}?>>Apfelschorle</option> 
	<option value="cola"
	<?php if(isset($_POST['getraenk'])) {
		if($_POST['getraenk'] == "cola") {
			echo "selected";
		}
		}?>>Coca Cola</option> 
	<option value="saft"
	<?php if(isset($_POST['getraenk'])) {
		if($_POST['getraenk'] == "saft") {
				echo "selected";
		}
		}?>>Fruchtsaft</option>
	<option value="kaffee"
	<?php if(isset($_POST['getraenk'])) {
		if($_POST['getraenk'] == "kaffee") {
				echo "selected";
		}
		}?>>Kaffee</option>
	<option value="wasser"
	<?php if(isset($_POST['getraenk'])) {
		if($_POST['getraenk'] == "wasser") {
			echo "selected";
		}
		}?>>Mineralwasser</option>
	<option value="tee"
	<?php if(isset($_POST['getraenk'])) {
			if($_POST['getraenk'] == "tee") {
				echo "selected";
			}
			}?>>Tee</option> 
</select>
</p>
</fieldset>	 
<fieldset>
<p>
<input type="radio" id="eigener" name="gastStatus"
			value="mitarbeiter" 
			<?php 
			if($gastStatus != "gast") {
				echo "checked";
			}?>
			/>
<label for="eigener">Mitarbeiter</label><br />
<input type="radio" id="fremd" name="gastStatus" 
			value="gast" 
			<?php 
			if($gastStatus == "gast") {
				echo "checked";
			}?>	
		/>
<label for="fremd">Gast </label>
</p>
<p>
<input type = "submit" value="bestellen"/>
</p>
</fieldset>
</form>
</body>
</html>