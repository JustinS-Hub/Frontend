<?php
if($_POST["einkaufsWert1"] != null){
	$einkaufsWert1 = $_POST["einkaufsWert1"];
	$porto1 =5.5;
	if($einkaufsWert1>=200){
		$porto1 = 0;
		echo("<p><mark>Sie kaufen für $einkaufsWert1 € ein und zahlen kein Porto.</mark></p>");
	} elseif($einkaufsWert1==0){
		echo("<p><mark>Sie kaufen gar nichts von Unternehmen1 ein...</mark>.</p>");
	}
	else{
		echo("<p><mark>Sie kaufen für $einkaufsWert1 € ein und zahlen zzgl. einen Porto von $porto1 € (gesamt " .$einkaufsWert1 + $porto1. " €)</mark>.</p>");
	}
}else{
	if($showMessages == true){
		echo("<p><b>Wegen dir geht Unternehmen1 zugrunde!</b></p>");
	}
}
?>