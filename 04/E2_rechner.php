<!DOCTYPE html>
<html lang="de">
  <head>
    <meta charset="utf-8" />
    <title>Einsendeaufgabe 2</title>
    <?php 
function addiere($summand1, $summand2) {
	return ($summand1 + $summand2); 
}

function subtrahiere($minuend, $subtrahend) {
	return ($minuend - $subtrahend); 
}
  
function multipliziere($faktor1, $faktor2) {
	return ($faktor1 * $faktor2); 
}
  
function dividiere($dividend, $divisor) {
	if ($divisor != 0) { 
		return ($dividend / $divisor); 
	}
} 
?>


  </head>
<body>
<?php
    if (isset($_POST["zahl1"])) {
    
    if ($_POST["rechenAuswahl"] == "addieren") {
        $zahl1 = $_POST ["zahl1"];
	    $zahl2 = $_POST ["zahl2"];
	    $ergebnis = addiere ( $zahl1, $zahl2 );
	
	    echo "<h3>$zahl1 + $zahl2 = $ergebnis</h3>\n";
    }    
    
    elseif ($_POST["rechenAuswahl"] == "subtrahieren") {
        $zahl1 = $_POST ["zahl1"];
	    $zahl2 = $_POST ["zahl2"];
	    $ergebnis = subtrahiere ( $zahl1, $zahl2 );
	
	    echo "<h3>$zahl1 - $zahl2 = $ergebnis</h3>\n";
    }    

    elseif ($_POST["rechenAuswahl"] == "multiplizieren") {
        $zahl1 = $_POST ["zahl1"];
	    $zahl2 = $_POST ["zahl2"];
	    $ergebnis = multipliziere ( $zahl1, $zahl2 );
	
	    echo "<h3>$zahl1 * $zahl2 = $ergebnis</h3>\n";
    }    

    elseif ($_POST["rechenAuswahl"] == "dividieren") {
        $zahl1 = $_POST ["zahl1"];
	    $zahl2 = $_POST ["zahl2"];
	    $ergebnis = dividiere ( $zahl1, $zahl2 );
	
	    echo "<h3>$zahl1 / $zahl2 = $ergebnis</h3>\n";
    }    
    
    }
    ?> 

<form method="post">
		<p>Bitte geben Sie die beiden Zahlen in die Felder ein.</p>
		<p>
			<label for="zahl1">Zahl 1 </label> <input type="text" name="zahl1"
				required placeholder=" Zahl 1" autofocus />
		</p>
		<p>
			<label for="zahl2">Zahl 2 </label> <input type="text" name="zahl2"
				required placeholder=" Zahl 2" />
		</p>

        <p>
            <input type="radio" id="addierenAuswahl" name="rechenAuswahl" value="addieren" checked />
            <label for ="addierenAuswahl"> + </label><br />
            <input type="radio" id="subtrahierenAuswahl" name="rechenAuswahl" value="subtrahieren"/>
            <label for ="subtrahierenAuswahl"> - </label><br />
            <input type="radio" id="multiplizierenAuswahl" name="rechenAuswahl" value="multiplizieren"/>
            <label for ="multiplizierenAuswahl"> * </label><br />
            <input type="radio" id="dividierenAuswahl" name="rechenAuswahl" value="dividieren"/>
            <label for ="dividierenAuswahl"> / </label><br />
        </p>

		<p>
			<input type="submit" value="Rechnen" /> 
		</p>
	</form>



</body>
</html>