<?php 
$person = null;
if($_POST["person"] != null ||$_POST["alleNummern"] != null){
	$alleNummern = $_POST["alleNummern"];
	$personenDaten = array(
		array("Heinz", "Bonn", "53214", "Kölnstr. 23", "0228/275412"),
		array("Willi", "Bonn", "52789", "Schumannstr. 13", "0228/836715"),
		array("Anna", "köln", "50999", "Sürther Str.12", "0221/2627282")
	);				
	if($alleNummern != true){
		switch($_POST["person"]){
			case 0:
				$person = 0;
				break;
			case 1:
				$person = 1;
				break;
			case 2:
				$person = 2;
				break;
			default:
		}
		
		echo("<p><mark>Du hast ".$personenDaten[$person][0]." ausgewählt.</mark></p>");
		
		if($_POST["wohnort"] == true){
			echo("<p><mark>".$personenDaten[$person][0]." wohnt in ".$personenDaten[$person][1].".</mark></p>");
		}
		if($_POST["PLZ"] == true){
			echo("<p><mark>Die Postleitzahl von ".$personenDaten[$person][0]. " ist ".$personenDaten[$person][2].".</mark></p>");
		}					
		if($_POST["straße"] == true){
			echo("<p><mark>Die Straße in der ". $personenDaten[$person][0]." wohnt, lautet ".$personenDaten[$person][3].".</mark></p>");
		}
		if($_POST["nummer"] == true){
			echo("<p><mark>Die Telefonnummer von ".$personenDaten[$person][0]." ist ".$personenDaten[$person][4].".</mark></p>");
		}	
	} else {
		for ($i=0;$i<3;$i++){
			echo("<p><mark>Die Telefonnummer von ".$personenDaten[$i][0]." ist ".$personenDaten[$i][4].".</mark></p>");
		}
	}
	
	
} else {
	if($showMessages == true){
		echo("<p><b>Du hast keine Personenauswahl getroffen!</b></p>");
	}
}
?>