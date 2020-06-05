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
<ul>
<li>
<input type="checkbox" id="cb1" name="CBoxGrp[]" 
			value="Checkbox 1" />
<label for="cb1">Checkbox Nr. 1</label> 
</li>
<li>
<input type="checkbox" id="cb2" name="CBoxGrp[]" 
			value="Checkbox 2" />
<label for="cb2">Checkbox Nr. 2</label> 
</li>
<li>
<input type="checkbox" id="cb3" name="CBoxGrp[]" 
			value="Checkbox 3" />
<label for="cb3">Checkbox Nr. 3</label> 
</li>
<li>
<input type="checkbox" id="cb4" name="CBoxGrp[]" 
			value="Checkbox 4" />
<label for="cb4">Checkbox Nr. 4</label> 
</li>
<li>
<input type="checkbox" id="cb5" name="CBoxGrp[]" 
			value="Checkbox 5" />
<label for="cb5">Checkbox Nr. 5</label> 
</li>
</ul>
<input type="submit" value="abschicken">
</form>
<?php
}
?>


</body>
</html>