<!DOCTYPE html> 
<html lang="de"> 
<head> 
	<meta charset="UTF-8" /> 
	<title>Sicherheit</title> 
</head> 
<body> 
<?php 
if (isset($_POST["kName"])) 
{ 
	$kName= htmlspecialchars($_POST["kName"]); 
	$kMail= htmlspecialchars($_POST["kMail"]); 
	$kNachricht= htmlspecialchars($_POST["kNachricht"], ENT_QUOTES); 
  
	echo <<<AUSGABE
	<p>Ihre Eingaben: <br /> 
	<ul> 
	<li>Name: $kName</li> 
	<li>E-Mail: $kMail</li> 
	</ul></p> 
	<p>Ihre Nachricht: <br /> 
	$kNachricht</p> 
AUSGABE;
} 
?> 
 
<h1>Kontakt</h1> 
  
<form method="post"> 
	<p>Bitte geben Sie Ihre Kontaktdaten und Ihre Nachricht 
		 ein.</p> 
	<p><label for="kName">Name: </label><br /> 
		 <input type="text" 
			name = "kName" 
			size="25" 
			required
			placeholder="Bitte geben Sie Ihren Namen ein." 
			autofocus /> 
	</p> 
	<p><label for="kMail">E-Mail: </label><br /> 
		 <input type="email" 
			name = "kMail" 
			size="25" 
			required 
			placeholder="Bitte geben Sie Ihre E-Mailadresse ein." 
	/> 
	</p>
	<p><label for="kNachricht">Ihre Nachricht: </label><br /> 
		 <textarea 
			name = "kNachricht" 
			required 
			placeholder="Bitte geben Sie hier Ihre Nachricht ein." 
			rows="10" 
	></textarea> 
	</p> 
	<p><input type = "submit" value="Senden"/></p> 
</form> 
</body> 
</html> 
