<!DOCTYPE html> 
<html lang="de">
<head>
	<meta charset="utf-8" />
	<title>Formulare auswerten</title>
</head>
<body>
<?php 
if (!empty($_POST)) { 
	print_r($_POST); 
} 
else { 
?> 
<form method = "post"> 
<p> 
<label for="mehrfach"> 
Bitte wählen Sie Ihre(n) Lieblingsmonat(e) aus: 
</label> 
<br /> 
<select id="mehrfach" name="mAuswahl[]" size="12" multiple> 
	<option value="1">Januar</option> 
	<option value="2">Februar</option> 
	<option value="3">März</option> 
	<option value="4">April</option> 
	<option value="5">Mai</option> 
	<option value="6">Juni</option> 
	<option value="7">Juli</option> 
	<option value="8">August</option> 
	<option value="9">September</option> 
	<option value="10">Oktober</option> 
	<option value="11">November</option> 
	<option value="12">Dezember</option> 
</select> 
</p> 
<input type="submit" value="abschicken"> 
</form> 
<?php 
} 
?> 
</body>
</html>