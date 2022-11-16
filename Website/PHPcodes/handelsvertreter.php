<?php
if( $_POST["handelsVertreterpraemie"] != null ){
	$handelsVertreterpraemie = $_POST["handelsVertreterpraemie"];
	
	if($handelsVertreterpraemie == 0){
		
		echo("<p><mark>Ein Unternehmen ohne Umsatz? - Oh oh...</mark></p>");
		
	}else if($handelsVertreterpraemie < 100000){
		
		echo("<p><mark>Keine Sonderprämie für dich.</mark></p>");
		
	} else {
		$handelsVertreterpraemie *=  0.05;
		
		echo("<p><mark>Deine Sonderprämie beträgt $handelsVertreterpraemie €.</mark></p>");
	}
} else {
	if($showMessages == true){
		echo("<p><b>Sonderprämien sind sowieso was für warmduschende Waschlappen</b></p>");
	}
}
?>