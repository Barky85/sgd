<!DOCTYPE html>
<html lang="de">
  <head>
    <meta charset="utf-8" />
    <title>Einsendeaufgabe 2a</title>
  </head>
<body>
<h3>Lottozahlen</h3>
<?php
echo "<p>Die gezogenen Zahlen sind: ";

$lottoZahl = array();
for ($i=0; $i<=5; $i++) {


    $helper = mt_rand(1,49);
    
    if (in_array($helper, $lottoZahl)) {
      $i--;
      continue;
    }
    
    $lottoZahl[$i]=$helper;
    echo "$lottoZahl[$i]‚ ";   
    
}
echo "</p>"
?>
</body>
</html>