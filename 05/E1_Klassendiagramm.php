<!DOCTYPE html>
<html lang="de">
  <head>
    <meta charset="utf-8" />
    <title>Einsendeaufgabe 1 - Klassendiagramm umsetzen</title>
  </head>
<body>
<?php

class Person {
    //Attribute
    protected $name = "";
    protected $vorname = "";

    //Konstruktor
    public function __construct($nName="",$vName="") {
        $this->name = $nName;
        $this->vorname = $vName;
    }
    //Methoden
    public function setnName($nName) {
        $this->name = $nName;
    }

    public function getnName() {
        return $this->name;
    }

    public function setvName($vName) {
        $this->vorname = $vName;
    }

    public function getvName() {
        return $this->vorname;
    }
}

class Mitarbeiter extends Person {

    //Attribute
    protected $gruppierung = 0;
    protected $steuerklasse = 0;
    protected $kontonummer = "";

    //public function __construct($gruppierung,)
}

class Kunde extends Person {
    //Attribute
    protected $bonitaet=0;
    //Methoden
    public function setBonitaet($boni) {
        $this->bonitaet = $boni;
    }
    public function getBonitaet() {
        return $this->bonitaet;
    }

}

//Instanzen erzeugen
$person1 = new Person ("Fischer","Fritz");
$person2 = new Mitarbeiter ("Schulze","Maria");
$person3 = new Kunde ("Fähnrich","Timon");

//Ausgabe

$ausgabe = var_dump($person1);
echo "$ausgabe";

$ausgabe = var_dump($person2);
echo "$ausgabe";

$ausgabe = var_dump($person3);
echo "$ausgabe";

?>
</body>
</html>