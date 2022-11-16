<?php 
if($_POST["sternZeichen"] != null){
	$sternZeichenListe = array("Steinbock", "Wassermann", "Fische", "Widder", "Stier", "Zwillinge", "Krebs", "Löwe", "Jungfrau", "Waage", "Skorpion", "Schütze");
	$sternZeichenAuswahl = $_POST["sternZeichen"];
	$sternZeichenAuswahl -= 1;
	echo ("<p><mark>Du hast $sternZeichenListe[$sternZeichenAuswahl] als Sternzeichen ausgewählt.</mark></p>");
} else {
	if($showMessages == true){
		echo("<b>Du hast kein Sternzeichen ausgewählt.</b><p></p>");
	}
}
?>