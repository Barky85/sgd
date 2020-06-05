<?php
class Sportwagen extends Autoklasse {
	private $hoechstgeschwindigkeit = 0;
	private $geschwindigkeitsBegrenzer = true;
	private $carbonBremse = true;
	public function __construct($aktuelleGeschwindigkeit, $vmax, $begrenzer, $cBremse) {
		parent::__construct ( $aktuelleGeschwindigkeit );
		$this->hoechstgeschwindigkeit = $vmax;
		$this->geschwindigkeitsBegrenzer = $begrenzer;
		$this->carbonBremse = $cBremse;
	}
	public function setHoechstgeschwindigkeit($wert) {
		$this->hoechstgeschwindigkeit = $wert;
	}
	public function getHoechstgeschwindigkeit() {
		return $this->hoechstgeschwindigkeit;
	}
	public function ausgeben() {
		parent::ausgeben ();
		echo "Die Höchstgeschwindigkeit beträgt: " . $this->hoechstgeschwindigkeit . " km/h. <br />";
	}
}
?>