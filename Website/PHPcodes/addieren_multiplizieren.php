<?php

	function addieren($zahl1, $zahl2){
		$zahl3 = $zahl1 + $zahl2;
		echo"<p><mark>$zahl1 + $zahl2 = $zahl3</mark><p>";
	}

	function multiplizieren($zahl1, $zahl2){
		$zahl3 = $zahl1 * $zahl2;
		echo"<p><mark>$zahl1 * $zahl2 = $zahl3</mark><p>";
	}
	
	$rechenart = $_POST['rechenart'];
	$uebergabeZahl1 = $_POST['uebergabeZahl1'];
	$uebergabeZahl2 = $_POST['uebergabeZahl2'];
	
	if ($rechenart == "addieren"){
		addieren($uebergabeZahl1, $uebergabeZahl2);
	} else {
		multiplizieren($uebergabeZahl1, $uebergabeZahl2);
	}
?>