<!DOCTYPE html>
<html lang="de">
  <head>
    <meta charset="utf-8" />
    <title>Hier steht der Titel</title>
  </head>
<body>

<?php
if (isset($_POST["breite"])) {
    $breite = $_POST["breite"];
    $laenge = $_POST["laenge"];
    $preis = $_POST["preism"];
    $netto = $breite * $laenge * $preis;
    $provisionsSatz = $_POST["provision"];
    $provisionsBetrag = ($netto / 100) * ($provisionsSatz + 100);
    $summeMwst = $provisionsBetrag * 1.19;

    echo "<h3>Grundstückspreise</h3>";
    echo "<p>Breite: $breite m</p>";
    echo "<p>Länge: $laenge m</p>";
    echo "<p>Preis pro qm: $preis Euro</p>";
    echo "<p>Nettopreis: $netto Euro</p>";
    echo "<p>Nettopreis mit Provision $provisionsBetrag</p>";
    if (isset($_POST["cm"])) {
        echo "<p>Bruttopreis: $summeMwst</p>";
    }

    echo "
    <form method='post'>
            <fieldset>
            <p>
                <label for='breite'>Breite: </label> <input type='text' name='breite' value='$breite'
                    required placeholder='Breite?' autofocus />
            </p>
            <p>
                <label for='laenge'>Länge: </label> <input type='text' name='laenge' value='$laenge'
                    required placeholder='Länge?' />
            </p>
            <p>
                <label for='preism'>Preis pro Quadratmeter: </label> <input type='text' name='preism' value='$preis'
                    required placeholder='Preis pro Quadratmeter?' />
            </p>
            
            <p>
            <label for='provision'>Provisionssatz:</label>
                <select id='provision' name='provision'>
              
                    <option value='3'";
                    if ($provisionsSatz==3) {
                        echo "selected";
                    }
                    echo ">3 </option>
                    <option value='4'";
                    if ($provisionsSatz==4) {
                        echo "selected";
                    }
                    echo ">4 </option>
                    <option value='5'";
                    if ($provisionsSatz==5) {
                        echo "selected";
                    }
                    echo ">5 </option>
                    <option value='6'";
                    if ($provisionsSatz==6) {
                        echo "selected";
                    }
                    echo ">6 </option>
                    <option value='7'";
                    if ($provisionsSatz==7) {
                        echo "selected";
                    }
                    echo ">7 </option>
                </select>
            </p>
    
            <p>
                <input type='checkbox' name='cm' value='mwst'"; 
                if (isset($_POST["cm"])) {
                    echo "checked";
                }

                echo "> MwSt       
            </p>
            </fieldset>        
            <p>
                <input type='submit' value='Berechnen' /> 
            </p>
    </form>";


}
else {
echo "
<h3>Grundstückspreise</h3>

<form method='post'>
        
       <fieldset>
		<p>
			<label for='breite'>Breite: </label> <input type='text' name='breite'
				required placeholder='Breite?' autofocus />
		</p>
		<p>
			<label for='laenge'>Länge: </label> <input type='text' name='laenge'
				required placeholder='Länge?' />
		</p>
        <p>
			<label for='preism'>Preis pro Quadratmeter: </label> <input type='text' name='preism'
				required placeholder='Preis pro Quadratmeter?' />
		</p>
        
        <p>
        <label for='provision'>Provisionssatz:</label>
            <select id='provision' name='provision'>
	            <option value='3'>3 </option>
	            <option value='4'>4 </option>
	            <option value='5'>5 </option>
                <option value='6'>6 </option>
                <option value='7'>7 </option>
            </select>
        </p>

        <p>
            <input type='checkbox' name='cm' value='mwst'> MwSt       
        </p>
        </fieldset>
        <p>
			<input type='submit' value='Berechnen' /> 
		</p>
</form>";
}





?>
</body>
</html>