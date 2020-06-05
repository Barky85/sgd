<!DOCTYPE html>
<html lang="de">
  <head>
    <meta charset="utf-8" />
    <title>Hier steht der Titel</title>
  </head>
<body>
<?php

$zaehler = 1;
const ENDE = 25;

do {
    echo "<p>Schleifendurchlauf Nr. $zaehler Es folgen noch " .(ENDE-$zaehler) ." Durchläufe.<p>";
    $zaehler++;
}

while ($zaehler <= ENDE);

echo "<p>Zu Ende</p>"
?>
</body>
</html>