<!DOCTYPE html>
<html lang="de">
    <head>
        <meta charset="utf-8" />
        <title>Hier steht der Titel</title>
  </head>
<body>

<?php
$z1 = 10;
$z2 = 10;
$s1 = "10";
 
// a)
$ergebnis = $z1 <= $z2 && $s1 == 10;
echo var_dump($ergebnis);

/* 
a) Der Wert der variable $ergebnis ist ein boolean mit dem Wert true.  Damit dies zutrifft müssen die Werte links und rechts vom Operator && true sein. Links ist true da: $z1 kleiner gleich $z2 da 10 = 10 ist, ist diese Bedingung erfüllt also true
   Rechts ist true da $s1 == 10, also der string "10" gleich dem Int 10 ist und somit die Bedingung erfüllt ist.
*/

// b)
$ergebnis = !($z1 <= $z2) || $s1 === 10;
echo var_dump($ergebnis);

/*
b) Der Wert der Variable $ergebnis ist ein boolean mit dem Wert false. Der Operator ist ein logisches ODER. Das heißt $ergebnis ist true wenn mindest ein Operand true ist (links und rechts vom ||). Dies ist nicht gegeben weil die Werte Links und Rechts false sind.
Links (false):  ($z1 <= $z2) 10<=10 ist true durch das ! logische Verneinung wird der Wert true zu false. 
Rechts (false): $s1 === 10 ist false denn "10" === 10 ist nicht identisch da "10" ein String ist und 10 ein Integer.
*/

// c)
$ergebnis = $z1 === $z2 and $s1 > 10;
echo var_dump($ergebnis);

/*
c) Der Wert der Variable $ergebnis ist ein boolean mit dem Wert true. Entscheidend für das Ergebnis hier ist der logische Ooperator and benutzt wird. In diesem Beispiel wird also zuerst $z1 === $z2 ausgewertet. Dies ist true 
da, 10 === 10 true da beide Werte identisch sind. Danach Erfolgt in der Rangfolge die Zuweisung (=). Es wird nur das Zugewiesen was bereits ausgewertet wurde: $z1 === $z2 und das ist true. Alles andere bleibt unberücksichtigt.
Dadurch wird $ergebnis auch true, obwohl $s1 > 10 eigentlich false wäre, dieser Teil wird aber nicht mehr Berücksichtigt. 

*/

// d)
$ergebnis = $z1 > $z2 || $s1 = 20;
echo var_dump($z1 > $z2);
echo var_dump($ergebnis);
/*
d) er Wert der Variable $ergebnis ist ein boolean mit dem Wert true. Der logische Operator || Verknüpft zwei Aussagen und ist true wenn Mindestens eine davon true ist. Dies ist gegeben.
Links: $z1 > $z2 bzw. 10 > 10 ist false da 10 nicht größer als 10 ist. 
Rechts: der Variablen $s1 wird der Wert 20 zugewiesen. Ich gehe davon aus, dass eine Zuweisung true ist. 


*/


?>

</body>
</html>