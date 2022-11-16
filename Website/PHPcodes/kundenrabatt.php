<?php 
if($_POST["warenWert"] != null){
	$rabatt = 0;
	$warenWert = $_POST["warenWert"];
	switch($warenWert){
		case 0:
			echo("Sie kaufen nix, sie machen mich arm :(");
			break;

		case $warenWert <= 100:
			echo("Leider kein Rabatt für sie.");					
			break;
		
		case ($warenWert > 100 && $warenWert <=500):
			$rabatt = 0.05;
			$endBetrag = $warenWert - ($warenWert * $rabatt);
			echo("Sie kaufen für " . $warenWert . "€ ein. </br>
				Sie bekommen ". $rabatt * 100 ."% Rabatt. </br>
				Sie müssen nur " . $endBetrag . "€ bezahlen.");
			break;
		
		case $warenWert > 500:
			$rabatt = 0.1;
			$endBetrag = $warenWert - ($warenWert * $rabatt);
			echo("Sie kaufen für " . $warenWert . "€ ein. </br>
				Sie bekommen ". $rabatt * 100 ."% Rabatt. </br>
				Sie müssen nur " . $endBetrag . "€ bezahlen. Ich Danke Ihnen!");						
			break;
		
		default:
	}
	
} else {
	if($showMessages == true){
		echo("<p><b>Du willst wohl keinen Kundenrabatt.</b></p>");
	}
}
?>