<!DOCTYPE html>
<html lang="de">
<head>
<meta charset="utf-8" />
<title>Formulare</title>
</head>
<body>
	<form action="code_2_2_addieren.php" method="post">
		<p>Bitte geben Sie die beiden Zahlen in die Felder ein, die Sie
			addieren möchten.</p>
		<p>
			<label for="zahl1">Zahl 1 </label>
			<input type="text" name="zahl1"
				placeholder="Zahl 1"
				required 
				autofocus/>
		</p>
		<p>
			<label for="zahl2">Zahl 2 </label>
			<input type="text" name="zahl2"
				required
				placeholder="Zahl 2" />
		</p>
		<p>
			<input type="submit" value="Addieren" />
			<input type="reset" />
		</p>
	</form>
</body>
</html>