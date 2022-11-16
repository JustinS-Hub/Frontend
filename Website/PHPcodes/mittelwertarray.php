<?php 
if($_POST["anzahlZufallsZahlen"] != null){
	$anzahlZufallsZahlen = $_POST["anzahlZufallsZahlen"];
	$mittelWertArray = [];
	$mittelWertZahl =0;
	
	for($i = 0; $i <$anzahlZufallsZahlen; $i++){
		$mittelWertArray[$i] =  random_int(1, 100);
		$mittelWertZahl += $mittelWertArray[$i];
	}
	
	echo("Die Lottozahlen lauten: ");
	for($i = 0; $i <count($mittelWertArray); $i++){
		echo("..".$mittelWertArray[$i]."..");
	}
	
	echo("<p></p>");
	$mittelWertZahl /= $anzahlZufallsZahlen;
	$mittelWertZahl = round($mittelWertZahl,1);
		 
	for($i = 0; $i <$anzahlZufallsZahlen; $i++){
		if($mittelWertArray[$i] > $mittelWertZahl){
			echo($mittelWertArray[$i] ." ist größer als ". $mittelWertZahl. "</br>");
		} else {
			if($mittelWertArray[$i] == $mittelWertZahl){
				echo($mittelWertArray[$i] ." ist genauso groß ". $mittelWertZahl. "</br>");
			}else{
				echo($mittelWertArray[$i] ." ist kleiner als ". $mittelWertZahl. "</br>");							
			}

		}
	}
} else {
	if($showMessages == true){
		echo("<p><b>Du wolltest wahrscheinlich kein Zahlenarray mit Mittelwert haben.</b></p>");
	}
}
?>