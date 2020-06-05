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
	public function getGeschwindigkeit() {
		return $this->geschwindigkeit;
	}
	public function setGeschwindigkeit($neuerWert) {
		$this->geschwindigkeit = $neuerWert;
	}
}
?>
