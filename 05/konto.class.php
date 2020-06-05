<?php


class Konto {
    //Attribute
    private $kontonummer = "";
    private $kontostand;
    private $kontoinhaber ="";

    //Konstruktor
    public function __construct($kName="",$kKontostand=0.0, $kKontonummer="") {
        $this->kontoinhaber = $kName;
        $this->kontostand = $kKontostand;
        $this->kontonummer =$kKontonummer;
        echo "<p>Konto: ". $this->kontonummer . " wurde erfolgreich angelegt</p>";
        echo "<p>Kontoinhaber: ". $this->kontoinhaber."</p>";
        echo "<p>Kontostand: ". $this->kontostand."</p>";
    }
    //Methoden
    public function setKontonummer($kKontonummer="") {
        $this->kontonummer=$kKontonummer;    
    }
    public function getKontonummer() {
        return $this->kontonummer;
    }

    public function setKontostand($kKontostand=0.0) {
        $this->kontostand=$kKontostand;
    }
    public function getKontostand() {
        return $this->kontostand;
    }

    public function setKontoinhaber($kName="") {
        $this->kontoinhaber=$kName;
    }
    public function getKontoinhaber() {
        return $this->kontoinhaber;
    }

    public function abheben($betrag=0.0) {
        if ($betrag <= $this->kontostand) {
            $this->kontostand -= $betrag;
            echo "<p> Der Betrag wurde abgehoben. Neuer Kontostand auf Konto ". $this->kontonummer . ": ".$this->kontostand." Euro</p>";
        }
        else {
            echo "Ungültiger Betrag oder Betrag zu groß. Buchung wurde nicht ausgeführt";
        }
    }

    public function einzahlen($betrag=0.0) {
        $this->kontostand += $betrag;
        echo "<p> Der Betrag wurde auf das Konto eingezahlt. Neuer Kontostand auf Konto ". $this->kontonummer . ": ".$this->kontostand." Euro</p>";
    }

}

?>