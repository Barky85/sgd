<!DOCTYPE html>
<html lang="de">
<head>
<meta charset="utf-8" />
<title>Vererbung</title> 
<?php
include_once ("code_5_1_autoload.inc.php");
?> 
</head>
<body> 
<?php
class Sportwagen extends Autoklasse {
	private $hoechstgeschwindigkeit = 0;
	private $geschwindigkeitsBegrenzer = true;
	private $carbonBremse = true;
	public function setHoechstgeschwindigkeit($wert) {
		$this->hoechstgeschwindigkeit = $wert;
	}
	public function getHoechstgeschwindigkeit() {
		return $this->hoechstgeschwindigkeit;
	}
	public function ausgeben() {
		Autoklasse::ausgeben ();
		echo "Die Höchstgeschwindigkeit beträgt: " . $this->hoechstgeschwindigkeit . " km/h. <br />";
	}
}
$sw1 = new Sportwagen ( 250 );
$sw1->setHoechstgeschwindigkeit ( 279 );
$sw1->ausgeben ();
?> 

</body>
</html>
