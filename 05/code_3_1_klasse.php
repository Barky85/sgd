<!DOCTYPE html>
<html lang="de">
<head>
<meta charset="utf-8" />
<title>Einführung OOP</title>
</head>
<body>
<?php
class Autoklasse {
	// ein Attribut, eine Eigenschaft
	private $geschwindigkeit = 0;
	
	// die Methoden zum Initialisieren
	public function initialisiere($standard) {
		$this->geschwindigkeit = $standard;
	}

	
	
	// zum Bremsen
	public function bremsen($aenderung) {
		if ($this->geschwindigkeit - $aenderung < 0) {
			$this->geschwindigkeit = 0;
		} else {
			$this->geschwindigkeit = $this->geschwindigkeit - $aenderung;
		}
	}
	// zum Gasgeben
	public function gasgeben($aenderung) {
		$this->geschwindigkeit = $this->geschwindigkeit + $aenderung;
	}
	// zur Ausgabe der Geschwindigkeit
	public function ausgeben() {
		echo "Die aktuelle Geschwindigkeit beträgt " . $this->geschwindigkeit . ": ";
	}
}

$auto1 = new Autoklasse ();
$auto2 = new Autoklasse ();

// die Methode Initialisieren() f�r die beiden
// Autos aufrufen
$auto1->initialisiere ( 0 );
$auto2->initialisiere ( 10 );

echo "<hr />";
// die Geschwindigkeit ausgeben
echo "Nach der Initialisierung: ";
$auto1->ausgeben ();
$auto2->ausgeben ();
echo "<hr />";
// Methode Gasgeben() aufrufen
$auto1->gasgeben ( 20 );
$auto2->gasgeben ( 100 );
echo "<hr />";
echo "Nach dem Gasgeben: ";
$auto1->ausgeben ();
$auto2->ausgeben ();
echo "<hr />";
// Methode Bremsen() aufrufen
$auto1->bremsen ( 10 );
$auto2->bremsen ( 50 );
echo "Nach dem Bremsen: ";
$auto1->ausgeben ();
$auto2->ausgeben ();
echo "<hr />";

?>
</body>
</html>