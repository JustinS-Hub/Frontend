<?php 
if($_POST["quadratZahl"] != null){
	$wurzel = 0;						
	$quadratZahl = $_POST["quadratZahl"];
	do{
		$wurzel += 1;
	} while($wurzel*$wurzel<$quadratZahl);
	if($wurzel*$wurzel == $quadratZahl){
		echo("Es ist eine Quadratzahl. - Die Wurzel ist ".$wurzel.".");
	} else {
		echo("Es ist keine Quadratzahl.");
	}
}else{
	if($showMessages == true){
		echo("<p><b>Quadratzahlen herausfinden ist nicht so dein Ding, oder?</b></p>");
	}
}
?>