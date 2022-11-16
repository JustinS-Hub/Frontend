<?php 
if($_POST["kreditMenge"] != null && 
	$_POST["kreditZins"] != null &&
	$_POST["abzahlungsRate"] != null){
		
	$kreditRest = $_POST["kreditMenge"];
	$kreditZins = $_POST["kreditZins"];
	$sonderTilgung = $_POST["sonderTilgung"];
	$sonderTilgungAbstaende = $_POST["sonderTilgungAbstaende"];
	$abzahlungsRate = $_POST["abzahlungsRate"];
	$machtSondertilgung=false;
	
	if(	$sonderTilgung != 0 && $sonderTilgung != null &&
		$sonderTilgungAbstaende != 0 && $sonderTilgungAbstaende != null){
		$machtSondertilgung=true;
	}	
	
	$abzahlung = 0;
	$monat = 0;
	$kreditZins = $kreditZins /12;
	$zinsBetrag = $_POST["kreditMenge"]* $kreditZins;
	//------------------
	echo("Du möchtest einen Kredit von ".$kreditRest.". (Inklusive ". $kreditZins*12 ."%)</br>
		Dabei zahlst du " . $abzahlungsRate." im Monat.</br>");
	if($machtSondertilgung==true){
		echo("<p>Du möchstest eine Sondertilgung von ".$sonderTilgung."€ </br>
		in einem Abstand von ".$sonderTilgungAbstaende." Monaten machen.</p>");
	} else {
		echo("Du möchtest keine Sondertilgung machem.");
	}
	//----------------------
	echo "<div style='position:relative; left:40%;'>
			<table>
			<tr>
			<th><b>Monat</b></th>
			<th><b>Kreditrest</b></th>
			<th><b>Abzahlungen</b></th>
			</tr>";
	
	while($kreditRest > 0){
		echo ("<tr>
			<td>$monat</td>
			<td>".number_format($kreditRest, 2,  ","  ,  ".")." €</td>
			<td>".number_format($abzahlung, 0, "," , ".")." €</td>
			</tr>");
		$monat += 1;
		$kreditRest += $kreditRest/100*$kreditZins;
		$kreditRest -= $abzahlungsRate;
		$abzahlung += $abzahlungsRate;
		//-------------------------------
		if($kreditRest < $abzahlungsRate){
		echo ("<tr>
			<td>$monat</td>
			<td>".number_format($kreditRest, 2,  ","  ,  ".")."</td>
			<td>".number_format($abzahlung, 0, "," , ".")."</td>
			</tr>");
			$kreditRest += $kreditRest/100*$kreditZins;
			$abzahlung += $kreditRest;								
			$kreditRest -= $kreditRest;
			$monat += 1;
		echo ("<tr>
			<td>$monat</td>
			<td>".number_format($kreditRest, 2,  ","  ,  ".")." €</td>
			<td>".number_format($abzahlung, 2, "," , ".")." €</td>
			</tr>");								
		}
		//---------------------------------
		if($machtSondertilgung==true && $monat % $sonderTilgungAbstaende == 0){
			$kreditRest -= $sonderTilgung;
			$abzahlung += $sonderTilgung;								
		}
	}
	echo ("</table></div>");
	
} else {
	if($showMessages == true){
		echo("<p><b>Es wurde keine Eingaben für Kreditaufgabe festgestellt.</b></p>");
	}						
}
?>