<?php
if($_POST["einkaufsWert3"] != null){
	$einkaufsWert3 = $_POST["einkaufsWert3"];
	$porto3 =0;
	if($einkaufsWert3>=200){
		$porto3 = 0;
		echo("<p><mark>Sie kaufen für $einkaufsWert3 € ein und zahlen kein Porto.</mark></p>");
		
	} elseif(($einkaufsWert3 >= 100) && ($einkaufsWert3 < 200)){
		$porto3 =3;
		echo("<p><mark>Sie kaufen für $einkaufsWert3 € ein und zahlen zzgl. 
			einen Porto von $porto3 €(gesamt " .$einkaufsWert3 + $porto3. " €).</mark></p>");
	}
	else if($einkaufsWert3 <100){
		$porto3 =5.5;
		echo("<p><mark>Sie kaufen für $einkaufsWert3 € ein und zahlen zzgl. 
			einen Porto von $porto3 €(gesamt " .$einkaufsWert3 + $porto3. " €).</mark></p>");
	} else{
		
		echo("<p><mark>Sie kaufen gar nichts von Unternehmen3 ein...</mark></p>");
	}
}else{
	if($showMessages == true){
		echo("<p><b>Wegen dir geht auch Unternehmen3 zugrunde!</b></p>");
	}
}
?>