<?php
class Anhaenger {
	const HOECHSTGESCHWINDIGKEIT = 80;
	private $aktuelleGeschwindigkeit = 0;
	private $wirdGezogen = false;
	public function __construct() {
		echo "Ich bin ein neues Anhängerobjekt<br />";
	}
	public function setAktuelleGeschwindigkeit($wert) {
		$this->aktuelleGeschwindigkeit = $wert;
	}
	public function getAktuelleGeschwindigkeit() {
		return $this->getAktuelleGeschwindigkeit;
	}
}
?>