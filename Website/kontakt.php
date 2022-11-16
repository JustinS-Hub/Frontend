<html>
	<head>
		<meta http-equiv="content-type" content="text/html; charset=utf-8">
		<link rel="stylesheet" href="Stylesheets\mystyle.css">
		<link rel="stylesheet" href="Stylesheets\kontakt.css">
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
		<!------------------------------------------------------------------------------->
			<div id="echo">
				<div class="center">
					<?php
					echo "Hallo</br> 
					Kapitän Blaubär" 		//test
					?>
				</div>
			</div>
			
		<!-----------------------------------------------------------------------------sternZeichenAuswahl-->	
			<div id="sternZeichenAuswahl">
				<form method="post" action="rechnungen.php">
					<label for="sternZeichen"><b>Wähle dein Sternzeichen!</b></br>(Eingabe 1 - 12)</label></br>
					<input type = "number" id = "sternZeichen" name = "sternZeichen" value="1" min="1" max="12"></br>
					<input type="submit">
				</form>
			</div>
			<!-----------------------------------------------------------------------------bilderAusgabe-->
			<div id="bilderAusgabe">
				<?php
					echo "<img src='images/test.png' width='100px' height='100px'>";
				?>
			</div>
			<!-----------------------------------------------------------------------------formularAushabe-->
			<div id="formular">
				<b><u>Anmeldeformular</u></b>
				<span style="text-align:right;">
				<form method="post" action="rechnungen.php">
				<p>
				<label for="firstName">Vorname</label>
				<input type="text" name="firstName" id="firstName">
				<label for="Mustermann">Nachname</label>
				<input type="text" name="lastName" id="lastName">
				</p>
				Geschlecht:
				<div>	
					<input type ="radio" name="gender" value="Männlich" >
					<label for="Männlich">M</label>
					<input type ="radio" name="gender" value="Weiblich" checked>
					<label for="Weiblich">W</label>
					<input type ="radio" name="gender" value="Divers">
					<label for="Divers">D</label>
				</div>
				<p>
					<label for="birthday">Wann bist du geboren?</label>
					<input type="date" name="birthday" id="birthday">
				</p>
				<p>
					<label for="skill">Wähle dein IT-Skilllevel</label>
					<select id="skill" name="skill">
						<option value="keine Erfahrung">keine Erfahrung</option>
						<option value="Anfänger">Anfänger</option>
						<option value="Fortgeschritten">Fortgeschritten</option>
						<option value="Expert">Experte</option>
					</select>
				</p>
				<p>Passwort:
				<input type="password" name="password" value="">
				<input type="reset" value="zurücksetzen"</p>
				<input type="submit" value="Registrieren"</p>
				</span>
			</form>
			</div>
			
			<!-----------------------------------------------------------------------------Substraktion-->
			<div id="rechnungen">
				<form method="post" action="rechnungen.php">
					<b><u>Substraktion</u></b>
					<p></p>
					<label for="subtraktion1">Gib eine Zahl ein </label>
					<input type="number" id="subtraktion1" name="subtraktion1"></br>
					<label for="subtraktion2">Gib eine zweite Zahl ein</label>
					<input type="number" id="subtraktion2" name="subtraktion2">
					<p><input type="submit" value="ausrechnen"></p>
					</form>
					<hr>
			<!-----------------------------------------------------------------------------Division-->		
					<form method="post" action="rechnungen.php">
					<b><u>Division</u></b>
					<p></p>
					<label for="division1">Gib eine Zahl ein </label>
					<input type="number" id="division1" name="division1"></br>
					<label for="division2">Gib eine zweite Zahl ein (keine 0)</label>
					<input type="number" id="division2" name="division2">
					<p><input type="submit" value="ausrechnen"></p>
				</form>
			</div>
			<!-----------------------------------------------------------------------------Benzinverbrauch-->
			<div id="rechungen2">
				<form method="post" action="rechnungen.php">
					<b><u>&Oslash; Benzinverbrauch auf 100km</u></b>
					<p></p>
					<label for="benzinVb">Gib den Benzinverbrauch an</label>
					<input type="number" id="benzinVb" name="benzinVb"></br>
					<label for="gefahrenKm">Gib die gefahrenen Kilometer an</label>
					<input type="number" id="gefahrenKm" name="gefahrenKm">
					<p><input type="submit" value="ausrechnen"></p>
					</form>
					<hr>
			<!-----------------------------------------------------------------------------Gesamtwiderstand-->		
					<form method="post" action="rechnungen.php">
					<b><u>Gesamtwiderstand parralleler Widerstände</u></b></br>
					<label for="widerstand1">Gib den ersten Widerstand an</label>
					<input type="number" id="widerstand1" name="widerstand1" min="1"></br>
					<label for="widerstand2">Gib den zweiten Widerstand an</label>
					<input type="number" id="widerstand2" name="widerstand2" min="1">
					<p><input type="submit" value="ausrechnen"></p>
				</form>			
			</div>
			<!-----------------------------------------------------------------------------Informationsausgabe-->
			<div id="informationsAusgabe">
				<b><u>Informationsausgabe</u></b></br>
				Klicke an, welche Informationen du von wem haben willst!</br>
				<div id="informationsAusgabeTabelle">
					<form method="post" action="rechnungen.php">
						<table>
						<tr>
							<th id="tabelleLeer"></th>
							<th id="tabelleLeer1"></th>
							<th>Wohnort</th>
							<th>PLZ</th>
							<th>Straße</th>
							<th>Nummer</th>
						<tr>
							<td><label for="Heinz">Heinz</label></td>
							<td><input type="radio" name="person" id="Heinz" value="0"></br></td>
							<td rowspan="3"><input type="checkbox" name="wohnort"></td>
							<td rowspan="3"><input type="checkbox" name="PLZ"></td>
							<td rowspan="3"><input type="checkbox" name="straße"></td>
							<td rowspan="3"><input type="checkbox" name="nummer"></td>
						</tr>	
						<tr>
							<td><label for="Willi">Willi</label></td>
							<td><input type="radio" name="person" id="Willi" value="1"></td>
						</tr>	
						<tr>	
							<td><label for="Anna">Anna</label></td>
							<td><input type="radio" name="person" id="Anna" value="2"></td>
						</tr>		
						</table>
						<input type="checkbox" name="alleNummern">
						<input type="reset">
						<input type="submit" value="anfragen">
					</form>
				</div>
			</div>
			
			<!-----------------------------------------------------------------------------mittelWertArray-->
			<div id="mittelWertArray">
				<b><u>Zahlenarray mit Mittelwert</u></b></br>
				<p id="mittelWertArraytext">Hier wird dir eine Liste an zufälligen Zahlen ausgegeben 
				und überprüft, ob die Zahlen über oder unterm Mittelwert liegen.</p>
				<form method="post" action ="rechnungen.php">
					<label for="zufallsZahlen">Gib die Anzahl der zufälligen Zahlen an:</label></br>
					<input type="number" name="anzahlZufallsZahlen" id="zufallsZahlen" min="1" max="20">
					<input type="submit" value="anzeigen">
				</form>
			</div>
			<!-----------------------------------------------------------------------------kundenRabatt-->
			<div id="kundenRabatt">
				<u><b>Kundenrabatt</b></u></br>
				Kaufen Sie!!Kaufen Sie!!</br>
				Wenn sie Sachen im Wert von <b>100€ kaufen, bekommen sie 5% Rabatt!</b></br>
				Wenn sie Sachen im Wert von <b>500€ kaufen, bekommen sie 10% Rabatt!</b></br>
				<form method="post" action="rechnungen.php">
					<label for="warenWert">Wie viel möchten sie kaufen?</label>
					<input type="number" id="warenWert" name="warenWert" min="0">
					<input type="submit" value="jetzt kaufen">
				</form>
			</div>
			<!-----------------------------------------------------------------------------schaltJahrErmittlung-->	
			<div id="schaltJahrErmittlung">
				<u><b>Schaltjahrermittlung</b></u></br>
				Geben sie eine Jahreszahl ein und finden sie heraus ob es ein Schaltjahr ist.
				<form method="post" action="rechnungen.php">
					<input type="number" min="1" id="schaltJahr" name="schaltJahr">
					<input type="submit" value="ermitteln">
				</form>
			</div>
			<!-----------------------------------------------------------------------------abschreibungsPlan-->
			<div id="abschreibungsplan">
				<u><b>Abschreibungsplan</b></u></br>
				Lass dir berrechnen,</br>
				wie viel dein Zeug noch wert ist!
				<form method="post" action="rechnungen.php">
					<p>
					<label for="anschaffungsKosten">Anschaffungskosten</label>
					<input type="number" id="anschaffungsKosten" name="anschaffungsKosten" min="1"></br>
					<label for="nutzungsJahre">Jahre in Benutzung</label>
					<input type="number" id="nutzungsJahre" name="nutzungsJahre" min="0"></br>
					</p>
					<input type="submit" value="errechnen">
				</form>
			</div>
			<!-----------------------------------------------------------------------------Quadratqurzel-->
			<div id="quadratWurzel">
			<u><b>Quadratqurzel</b></u></br>
			Gib eine Zahl an und finde raus, ob es eine Quadratzahl ist.
			<form method="post" action="rechnungen.php">
			<input type="number" min="1" name="quadratZahl">
			<input type="submit" value="herausfinden">
			</form>
			</div>
			<!-----------------------------------------------------------------------------kreditVergabe-->
			<div id="kreditVergabe">
				<b><u>Kreditvergabe</u></b></br>
				Nimm dir einen Kredit 2 go!</br>
				Gib einfach folgende Daten ein:</br>
				<form method="post" action="rechnungen.php">
				<p><label for="kreditMenge">Wie hoch soll der Kredit sein?</label>
				<input type="numbers" id="kreditMenge" name="kreditMenge" min="1"></p>
				<p><label for="kreditZins">Das ist unser aktueller Jahreszins:</label>
				<input type="numbers" id="kreditZins" name="kreditZins" min="1"></p>
				<p><label for="abzahlungsRate">Wie viel willst du im Monat zurückzahlen?</br></label>
				<input type="numbers" id="abzahlungsRate" name="abzahlungsRate" min="1"></p>
				<p><label for="sonderTilgung">Möchtest du Sonderzahlungen tätigen?</br>(Wenn nicht, dann leer lassen)</label>
				<input type="numbers" id="sonderTilgung" name="sonderTilgung"></p>
				<p><label for="sonderTilgungAbstaende">In welchem Zeitraum willst du Sonderzahlungen machen</br>(Wenn nicht, dann leer lassen</label>
				<input type="numbers" id="sonderTilgungAbstaende" name="sonderTilgungAbstaende"></p>
				<input type="submit" value="Kredit berechnen">
				</form>
			</div>
			<!-----------------------------------------------------------------------------Summenausgabe-->
			<div id="summen">
				<u><b>Summenausgabe</b></u></br>
				Wähle aus welche Summe du dir ausgeben willst!</br>
				(Klick die Checkboxen an, welche Summe du haben willst.)
				<form method="post" action="rechnungen.php">
					<p>
					<label for="summe1Ja">Summe aller Zahlen von 1 bis 100</label>
					<input type="checkbox" name="summe1Ja" id="summe1Ja">
					</p>
					<hr>
					<p>
					Summe aller Zahlen zum Quadrat bis Zahl n</br>
					<label for="summe2">Zahl n</label>
					<input type="number" name="zahlN2" id="summe2" min="1"></br>
					<input type="checkbox" name="summe2Ja">			
					</p>
					<hr>
					<p>
					Summe aller ungeraden Zahlen zum Quadrat bis Zahl n</br>
					<label for="summe3">Zahl n</label>
					<input type="number" name="zahlN3" id="summe3" min="1"></br>
					<input type="checkbox" name="summe3Ja">			
					</p>
					<hr>
					<input type="submit" value="Summe(n) ausgeben">
				</form>
			</div>
			<!-----------------------------------------------------------------------------ungerade Zahlen-->
			<div id="ungeradeZahlen">
				<u><b>ungerade Zahlen</b></u></br>
				Gib zwei Zahlen ein und lass dir alle ungeraden Zahlen dazwischen ausgeben.
				<form method="post" action="rechnungen.php">
					<label for="ungeradeZahl1">Zahl 1</label>
					<input type="number" name="ungeradeZahl1" id="ungeradeZahl1"></br>
					<label for="ungeradeZahl2">Zahl 2</label>
					<input type="number" name="ungeradeZahl2" id="ungeradeZahl2"></br></br>
					<input type="submit" value="anzeigen">
				</form>
			</div>
			<!-----------------------------------------------------------------------------Bestellung1-->
			<div id="bestellung1">
				<u><b>Bestellung-1</b></u></br>
				Bestellen sie noch heute und erhalten sie ab 200€ Einkaufswert kostenfreien Porto!
				<form>
					<p></p><label>Einkaufswert</label>
					<input type="number" name="einkaufsWert1" id="einkaufsWert1"></p>
					<input type="submit" value="einkaufen">
				</form>
			</div>
			<div id="seitenZahl">
				Seite<br/> 1 <a href="kontakt-seite-2.php">2</a> <a href="kontakt-seite-3.php">3</a>
			</div>
		</div>
	</body>
</html>