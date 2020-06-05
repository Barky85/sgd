<?php
class Gelaendewagen extends Autoklasse {
	private $hoechstgeschwindigkeit = 0;
	private $bodenfreiheit = 0;
	public function setBodenfreiheit($wert) {
		$this->bodenfreiheit = $wert;
	}
	public function getBodenfreiheit() {
		return $this->bodenfreiheit;
	}
	public function ausgeben() {
		parent::ausgeben ();
		echo "Die Bodenfreiheit beträgt: " . $this->bodenfreiheit . " cm. <br />";
	}
}
?>