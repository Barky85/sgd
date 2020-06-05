<h3>Grundstückspreise</h3>

<form method="post">
		
		<p>
			<label for="breite">Breite: </label> <input type="text" name="breite"
				required placeholder="Breite?" autofocus />
		</p>
		<p>
			<label for="laenge">Länge: </label> <input type="text" name="laenge"
				required placeholder="Länge?" />
		</p>
        <p>
			<label for="preism">Preis pro Quadratmeter: </label> <input type="text" name="preism"
				required placeholder="Preis pro Quadratmeter?" />
		</p>
        
        <p>
        <label for="provision">Provisionssatz:</label>
            <select id="provision" name="provision">
	            <option value="3">3 </option>
	            <option value="4">4 </option>
	            <option value="5">5 </option>
                <option value="6">6 </option>
                <option value="7">7 </option>
            </select>
        </p>

        <p>
            <input type="checkbox" name="cm" value="mwst"> MwSt       
        </p>
9
        <p>
			<input type="submit" value="Berechnen" /> 
		</p>
</form>