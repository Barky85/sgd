<!DOCTYPE html>
<html lang="de">
  <head>
    <meta charset="utf-8" />
    <title>Einsendeaufgabe 1</title>
  </head>
<body>
<?php
function dynAuswahl($id ,$name ,$options ,$multiple) {

if ($multiple == true) {
    $size = count($options);
    
    $rueck="<select id='{$id}' name='{$name}[]' size='{$size}' 'multiple'>";
    foreach ($options as $schluessel=>$wert) {
        $rueck .="\n \t \t<option value='{$wert}'>{$wert}</option>";
        //echo "\n $wert";
    }
    $rueck .= "\n \t</select>\n";
} 

else {
  $rueck="<select id='{$id}' name='{$name}'>";
  foreach ($options as $schluessel=>$wert) {
      $rueck .="\n \t \t<option value='{$wert}'>{$wert}</option>";
      //echo "\n $wert"; 
  }
  $rueck .= "\n \t</select>\n";
}

return $rueck; 

}

?>



<form method = "post">
  <p>
    <?php echo dynAuswahl("dynamisch1", "auswahl1", array("brot", "butter", "milch"), false); ?>
  </p>
  <p>
    <?php echo dynAuswahl("dynamisch2", "auswahl2", array("brot", "butter", "milch", "zitronen", "äpfel"), true); ?>
  </p>

  <p>
    <input type="submit" value="Abschicken" />
</p>

</body>
</html>