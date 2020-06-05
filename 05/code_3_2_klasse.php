<!DOCTYPE html>
<html lang="de">
<head>
<meta charset="utf-8" />
<title>Einführung OOP</title>
</head>
<body>
<?php
class Autoklasse {
	// ein Attribut
	private $geschwindigkeit = 0;
	
	// Der Konstruktor
	public function __construct($standard = 0) {
		$this->geschwindigkeit = $standard;
		echo "Objekt wurde erzeugt.<br />";
	}
	
	// Der Destruktor
	public function __destruct() {
		echo "Objekt wurde zerstört.<br />";
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

	public function ausgabe() {
		echo "var_dump(__construct)";
	}

	public function getGeschwindigkeit() {
		return $this->geschwindigkeit;
	}
	public function setGeschwindigkeit($neuerWert) {
		$this->geschwindigkeit = $neuerWert;
	}
}

// Instanzen erzeugen
$auto1 = new Autoklasse ( 0 );
$auto2 = new Autoklasse ( 10 );
$auto3 = new Autoklasse ( 0 );
unset ( $auto3 );

echo "<hr />";
// die Geschwindigkeit ausgeben
echo "Nach dem Erzeugen und initialisieren: ";
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
//$auto1->ausgabe();
$test = var_dump($auto1);
echo "$test";

echo "<hr />";
$auto1->ausgeben ();
$auto2->ausgeben ();
echo "<hr />";


?> 

</body>
</html>