<html>
	<head>
		<meta charset=utf-8">
		<link rel="stylesheet" href="Stylesheets\mystyle.css">
		<link rel="stylesheet" href="Stylesheets\kontakt.css">
		<link rel="icon" href="images/pc.png">
		<title>Rechnungen</title>
	</head>
	<body>
		<div id="phpInhaltRechnungen">
			<div class="dcenter">
				<?php 
				
					$showMessages = false;			
					$showWarnings = false;
					
					if($showWarnings == true){
						error_reporting(E_ALL);
						ini_set('display_errors', 1);						
					}else{
						error_reporting(0);
						ini_set('display_errors', 0); 						
					}

					//-----------------------------------------------------------------------------formulardaten
					require("PHPcodes/formulardaten.php");
					//-----------------------------------------------------------------------------Subtraktion
					require("PHPcodes\subtraktion.php");
					//-----------------------------------------------------------------------------Division
					require("PHPcodes\division.php");
					//-----------------------------------------------------------------------------Benzinverbrauch auf 100km
					require("PHPcodes\benzinverbrauch.php");
					//-----------------------------------------------------------------------------Gesamtwiderstand
					require("PHPcodes\gesamtwiderstand.php");
					//-----------------------------------------------------------------------------Informationsausgabe
					require("PHPcodes\informationsausgabe.php");
					//---------------------------------------------------------------------------- Sternzeichen
					require("PHPcodes\sternzeichen.php");
					//---------------------------------------------------------------------------- Zahlenarray mit Mittelwert
					require("PHPcodes\mittelwertarray.php");
					//-----------------------------------------------------------------------------Kundenrabatt
					require("PHPcodes\kundenrabatt.php");
					//-----------------------------------------------------------------------------Schaltjahrermittlung
					require("PHPcodes\schaltjahrermittlung.php");
					//-----------------------------------------------------------------------------Abschreibungsplan
					require("PHPcodes\abschreibungsplan.php");
					//-----------------------------------------------------------------------------Quadratzahl					
					require("PHPcodes\quadratzahl.php");
					//-----------------------------------------------------------------------------Kreditabzahlung
					require("PHPcodes\kreditzahlung.php");
					//-----------------------------------------------------------------------------Summenausgaben
					require("PHPcodes\summenausgabe.php");
					//-----------------------------------------------------------------------------ungerade Zahlenausgabe
					require("PHPcodes\ungeradeZahlen.php");
					//-----------------------------------------------------------------------------Bestellung 1
					require("PHPcodes\bestellung1.php");
					//-----------------------------------------------------------------------------Weinkaufrabatt
					require("PHPcodes\wein.php");
					//-----------------------------------------------------------------------------Handelsverteter
					require("PHPcodes\handelsvertreter.php");					
					//-----------------------------------------------------------------------------Bestellung 2
					require("PHPcodes\bestellung2.php");
					//-----------------------------------------------------------------------------idealgewicht
					require("PHPcodes\idealgewicht.php");
					//-----------------------------------------------------------------------------Bestellung 3
					require("PHPcodes\bestellung3.php");
					//-----------------------------------------------------------------------------Textausgabe
					// require("PHPcodes/textausgabe.php");
					//-----------------------------------------------------------------------------addieren oder multiplizieren
					// require("PHPcodes\addieren_multiplizieren.php");
					//-----------------------------------------------------------------------------Grundrechenarten
					require("PHPcodes\grundrechenarten.php");
					//-----------------------------------------------------------------------------Bahnreiseticket					
					// require("PHPcodes\bahnreise.php");
					//-----------------------------------------------------------------------------
						error_reporting(E_ALL);
						ini_set('display_errors', 1); 					
				?>
				<p><a href="kontakt.php">zurück</a><a href="kontakt-Seite-2.php"> (2) </a></p>
			</div>
		</div>	
	</body>
</html>