<html>
	<head>
		<meta http-equiv="content-type" content="text/html; charset=utf-8">
		<link rel="stylesheet" href="Stylesheets\mystyle.css">
		<link rel="stylesheet" href="Stylesheets\kontakt-seite-2.css">
		<link rel="icon" href="images/pc.png">
		<title>Kontakt</title>
	</head>
	<body>
		<div>
			<img src="Images/PCh1.png" id="headerImgL" >
			<div class="header">
				Compu-GmbH
			</div>
			<img src="Images/PCh1.png" id="headerImgR">
		</div>
		<div class="floatBruch">
			<div class="menue">
				<a href="index.html">
					<div class="menueUnterpunkte">
						Home
					</div>
				</a>	
				<a href="Leistung.html">
					<div class="menueUnterpunkte">
						Leistungen
					</div>
				</a>
				<a href="kontakt.php">
					<div class="menueUnterpunkte"  id="aktuelleSeite">
						PHP-Spielerei
					</div>
				</a>				
				<a href="UeberUns.html">
					<div class="menueUnterpunkte">
						&Uuml;ber uns
					</div>
				</a>
				<a href="Impressum.html">
					<div class="menueUnterpunkte">
						Impressum
					</div>
				</a>
			</div>
		</div>
			<!------------------------------------------------------------------------------->
		<div class="phpInhalt">	
			<!-----------------------------------------------------------------------------Bestellung1-->
			<div id="bestellung1">
				<u><b>Bestellung-1</b></u></br>
				Bestellen sie noch heute und erhalten sie ab 200€ Einkaufswert kostenfreien Porto!
				<form method="post" action="rechnungen.php">
					<p></p><label>Einkaufswert</label>
					<input type="number" name="einkaufsWert1" id="einkaufsWert1" min="0"></p>
					<input type="submit" value="einkaufen"></p>
				</form>
			</div>
			<!-----------------------------------------------------------------------------Weinfkaufrabatt-->
			<div id="weinKauf">
				<u><b>Weinkauf</b></u></br>
				Kaufen sie Wein!</br> 
				Bei mehr als 5 Kästen 10% Rabatt
				<form method="post" action="rechnungen.php">
					<p></p><label for="anzahlWeinFlaschen">Wie viel Flaschen möchten sie kaufen?</label></br>
					<input type="number" name="anzahlWeinFlaschen" id="anzahlWeinFlaschen" min="0">
					<input type="submit" value="einkaufen"></p>
				</form>
			</div>
			<!-----------------------------------------------------------------------------Handelsvertreter-->
			<div id="handelsVertreter">
				<u><b>Handelsvertreter</b></u></br>
				Wie groß war der Umsatz deines Unternehmens?
				<form method="post" action="rechnungen.php">
					<p></p><label for="handelsVertreterpraemie">Umsatz:</label></br>
					<input type="number" name="handelsVertreterpraemie" id="handelsVertreterpraemie" min="0"></br>
					<p></p><input type="submit" value="ausrechnen">
				</form>
			</div>
			<!-----------------------------------------------------------------------------Bestellung2-->
			<div id="bestellung2">
				<u><b>Bestellung-2</b></u></br>
				Kauf Elektronik!
				<form method="post" action="rechnungen.php">
					<p></p><label for="einkaufsWert2">Einkaufswert</label></br>
					<input type="number" name="einkaufsWert2" id="einkaufsWert2" min="0"></br>
					<p></p><label for="land">Aus welchem Land kommst du?</label>
					<select id="land" name="land">
						<option value="Deutschland">Deutschland</option>
						<option value="Österreich">Österreich</option>
						<option value="Frankreich">Frankreich</option>
					</select></p>				
					<p></p><input type="submit" value="einkaufen">
				</form>
			</div>
			<!-----------------------------------------------------------------------------Idealgewicht-->	
			<div id="idealGewicht">
				<b><u>Idealgewicht</u></b></br>
				Lass dir dein ideal Gewicht berechnen!
				<form method="post" action="rechnungen.php">
				<p>
					<label>Dein Name</label></br>
					<input type="text" name="name"></br>
					<label>Körpergröße in cm</label></br>
					<input type="number" name="koerpergroesse" min="101"></br>
					Geschlecht:</br>
					<label>M</label>
					<input type="radio" name="geschlecht" value="m">
					<label>W</label>
					<input type="radio" name="geschlecht" value="w"></br>
					<input type="submit" value="ausrechnen">
				</p>	
				</form>
			</div>
			<!-----------------------------------------------------------------------------Bestellung3-->
			<div id="bestellung3">
				<u><b>Bestellung-3</b></u></br>
				Bestellen sie noch heute und erhalten sie ab 200€ Einkaufswert kostenfreien Porto!
				<form method="post" action="rechnungen.php">
					<p></p><label>Einkaufswert</label>
					<input type="number" name="einkaufsWert3" id="einkaufsWert1" min="0"></p>
					<input type="submit" value="einkaufen"></p>
				</form>
			</div>
			<!-----------------------------------------------------------------------------Addieren oder Multiplizieren-->
			<div id="addOrMult">
				<u><b>Addieren oder Multiplizieren</b></u></br>
				Wähl aus, ob du addieren oder mutliplizieren möchtest!
				<form method="post" action="rechnungen.php">
					<p></p><label>Zahl 1</label>
					<input type="number" name="uebergabeZahl1" id="uebergabeZahl1">	</br>		
					<label>Zahl 2</label>
					<input type="number" name="uebergabeZahl2" id="uebergabeZahl2"></br></br>
					<label>Addieren</label>					
					<input type="radio" name="rechenart" value="addieren">
					<label>Multiplizieren</label>
					<input type="radio" name="rechenart" value="multiplizieren"></br>					
					<p></p><input type="submit" value="Ausrechnen"></p>
				</form>
			</div>
			<!-----------------------------------------------------------------------------Grundrechenarten-->
			<div id="grundrechenArten">
				<u><b>Grundrechenarten</b></u></br>
				Wähle aus, wie du rechnen möchtest!
				<form method="post" action="rechnungen.php">
					<p>
					<label>Zahl 1</label>
					<input type="number" name="grundrechenartZahl1"></br>		
					<label>Zahl 2</label>
					<input type="number" name="grundrechenartZahl2">
					</p>
					<select name="grundrechenart">
						<option value="addieren">Addieren</option>
						<option value="subtrahieren">Subtrahieren</option>
						<option value="multiplizieren">Multiplizieren</option>
						<option value="dividieren">Dividieren</option>
					</select></p>					
					<input type="submit" value="Ausrechnen"></p>
				</form>
			</div>
			<div id="seitenZahl">
				Seite<br/> <a href="kontakt.php">1</a> 2 <a href="kontakt-seite-3.php">3</a>
			</div>		
		</div>
	</body>
</html>