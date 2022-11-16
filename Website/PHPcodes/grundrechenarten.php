<?php
if($_POST['grundrechenart'] != null && $_POST['grundrechenartZahl1'] && $_POST['grundrechenartZahl2']){
	$grundRechenArt = $_POST['grundrechenart'];
	$grundrechenartZahl1 = $_POST['grundrechenartZahl1'];
	$grundrechenartZahl2 = $_POST['grundrechenartZahl2'];
	$rechenZeichen = "";	

	function GrundRechenArt($rechenArt, $zahl1, &$grundrechenartZahl2){
		switch($rechenArt){
			case "addieren":
				$zahl3 = $zahl1 + $grundrechenartZahl2;
				return $zahl3;
			break;
			
			case "subtrahieren":
				$zahl3 = $zahl1 - $grundrechenartZahl2;
				return $zahl3;		
			break;
			
			case "multiplizieren":
				$zahl3 = $zahl1 * $grundrechenartZahl2;
				return $zahl3;		
			break;
			
			case "dividieren":
				if($grundrechenartZahl2 != 0){
				$zahl3 = $zahl1 / $grundrechenartZahl2;
				return $zahl3;				
				}else {
					echo"<p>Durch 0 teilen ist leider nicht möglich.</p>";
					return null;
				}
			break;
			default:
				echo"Sollte nicht passieren";
		}	
	}

	switch($grundRechenArt){
		case "addieren":
		$rechenZeichen = "+";
		break;
		case "subtrahieren":
		$rechenZeichen = "-";
		break;
		case "multiplizieren":
		$rechenZeichen = "*";
		break;
		case "dividieren":
		$rechenZeichen = "/";
		break;
		default:
			echo"Sollte nicht passieren: Rechenzeichen";
	}
	
	$rueckgabeZahl = GrundRechenArt($grundRechenArt, $grundrechenartZahl1, $grundrechenartZahl2);
	echo "<p><mark>Du möchtest $grundRechenArt.</br>
			$grundrechenartZahl1 $rechenZeichen $grundrechenartZahl2 = $rueckgabeZahl</mark></p>";

} else {
	if($showMessages == true){
		echo("Keine Grundrechenart wurde ausgewählt.");
	}
}
?>