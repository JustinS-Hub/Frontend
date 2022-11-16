<?php
if($_POST["einkaufsWert2"] != null){
	$einkaufsWert2 = $_POST["einkaufsWert2"];
	$land = $_POST["land"];
	$porto2=0;
	
	if($einkaufsWert2 != 0){
	
		switch($land){
			case "Deutschland":
				if($einkaufsWert2 < 2900){
					$porto2=19;
					echo ("<p><mark>Deine Ware(n) im Wert von $einkaufsWert2 € zzgl. $porto2 € Porto 
						gesamt (" .$einkaufsWert2 + $porto2. " €) werden nach $land verschickt.</mark></p>");
				}else{
					$porto2=0;
					echo ("<p><mark>Deine Ware(n) im Wert von $einkaufsWert2 € werden ohne 
						Versandkosten nach $land verschickt.</mark></p>");
				}
			break;
			
			case "Österreich":
				$porto2=32;
				echo ("<p><mark>Deine Ware(n) im Wert von $einkaufsWert2 € zzgl. $porto2 € Porto
					(gesamt " .$einkaufsWert2 + $porto2. " €) werden nach $land verschickt.</mark></p>");
			break;
			
			case "Frankreich":
				$porto2=40;
				echo ("<p><mark>Deine Ware(n) im Wert von $einkaufsWert2 € zzgl. $porto2 € Porto 
					(gesamt " .$einkaufsWert2 + $porto2. " €) werden nach $land verschickt.</mark></p>");
			break;
			
			default:
		}
	} else{
		echo("<p><mark>Du bestellst gar nichts bei Unternehmen2.</mark></p>");
	}	
	
}else{
	if($showMessages == true){
		echo("<p><b>Jetzt geht es wohl auch Unternehmen2 an den Kragen...</b></p>");
	}
}
?>