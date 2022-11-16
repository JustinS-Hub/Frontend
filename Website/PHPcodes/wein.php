<?php
if($_POST["anzahlWeinFlaschen"] != null){
	$anzahlWeinFlaschen = $_POST["anzahlWeinFlaschen"];
	$anzahlKästen = 0;
	$kostenWeinflasche = 8;
	$einkaufsWertWein = 0;
	
	$einkaufsWertWein = $anzahlWeinFlaschen * $kostenWeinflasche;
	$anzahlKästen = $anzahlWeinFlaschen / 12;
	$anzahlKästen = ceil($anzahlKästen);
	
	if($anzahlWeinFlaschen == 0){
		echo ("<p><mark>Sie kaufen gar keinen Wein ein...</mark></p>");
	}elseif($anzahlKästen > 5){
		$einkaufsWertWein = $einkaufsWertWein*0.9;
		echo("<p><mark>Sie kaufen $anzahlWeinFlaschen Flaschen Wein zum Stückpreis von $kostenWeinflasche €.</br>
			Sie müssen $anzahlKästen Kästen schleppen.</br>
			Ihre gesamt Kosten betragen $einkaufsWertWein €. Sie haben ".$anzahlWeinFlaschen * $kostenWeinflasche * 0.1 ."€ gespart.</mark></p>");
	} else {
		if($anzahlKästen > 1){
		echo("<p><mark>Sie kaufen $anzahlWeinFlaschen Flaschen Wein zum Stückpreis von $kostenWeinflasche €.</br>
			Sie müssen $anzahlKästen Kästen schleppen.</br>
			Ihre gesamt Kosten betragen $einkaufsWertWein €.</mark></p>");	
		}else{
		echo("<p><mark>Sie kaufen $anzahlWeinFlaschen Flaschen Wein zum Stückpreis von $kostenWeinflasche €.</br>
			Sie müssen $anzahlKästen Kasten schleppen.</br>
			Ihre gesamt Kosten betragen $einkaufsWertWein €.</mark></p>");	
		}
		
	}
}else{
	if($showMessages == true){
		echo("<b><p>Rentiert sich das Weingeschäft überhaupt? - Durch dich jedenfalls nicht.</b></p>");
	}
}
?>