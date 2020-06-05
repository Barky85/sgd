<!DOCTYPE html>
<html lang="de">
  <head>
    <meta charset="utf-8" />
    <title>E2 Konto</title>
    <?php
        include_once ("konto.class.php");
    ?> 
  </head>
<body>
<?php

$girokonto1 = new Konto("Meier, Hans", 177.9, "12345678");
$girokonto1->abheben(177.9);
$girokonto1->einzahlen(55.7);
$girokonto1->abheben(100.0);
$girokonto2 = new Konto("Gottschalk, Thomas", 2000, "0815");
$girokonto2->einzahlen(3000);
?>
</body>
</html>