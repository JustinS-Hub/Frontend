<?php 
if ($_POST["benzinVb"] != null && $_POST["benzinVb"] != 0 &&
	$_POST["gefahrenKm"] != 0  && $_POST["gefahrenKm"] != null){
	
	$benzinVb = $_POST["benzinVb"];
	$gefahrenKm = $_POST["gefahrenKm"];
	$verbrauchKm = $benzinVb / $gefahrenKm * 100;	
	
	echo ("<mark>Der durchschnittliche Benzinverbrauch liegt bei $verbrauchKm Liter auf 100km.</mark>");
} else {
	if($showMessages == true){
		echo("<p><b>Es wurde keine Benzinverbrauchskalkulation vorgenommen.</b></p>");
	}	
}
?>