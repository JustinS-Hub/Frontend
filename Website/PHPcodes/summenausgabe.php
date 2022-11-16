<?php 
if($_POST["summe1Ja"] == true || $_POST["summe2Ja"] == true || $_POST["summe3Ja"] == true){
	//----------------------------------Summe 1
	if($_POST["summe1Ja"] == true){
		$summe1 = 0;
		
		echo("Summe aller Zahlen von 1 bis 100:</br>");
		
		for ($i=1;$i<101;$i++){
			echo("$summe1 --- +$i</br>");
			$summe1 += $i;
		}
		echo($summe1 ."<p></p>");
	}
	//----------------------------------Summe 2
	if($_POST["summe2Ja"] == true && $_POST["zahlN2"] != null){
		$summe2 = 0;
		$zahlN2 = $_POST["zahlN2"];
		
		echo("Summe aller Zahlen zum Quadrat bis Zahl n:</br>");
		
		for ($i=1; $i< $zahlN2+1; $i++){
			echo($summe2 . " --- +$i (". ($i*$i).")</br>");
			$summe2 += $i*$i;			
		}
		echo($summe2 ."<p></p>");
	}
	//----------------------------------Summe 3
	if($_POST["summe3Ja"] == true && $_POST["zahlN3"] != null){
		$summe3 = 0;
		$zahlN3 = $_POST["zahlN3"];
		
		echo("Summe aller ungeraden Zahlen zum Quadrat bis Zahl n:</br>");
		
		for ($i=1; $i<= $zahlN3; $i++){
			echo($summe3 . " .... +". 2 * $i - 1 ."² (". pow((2*$i-1),2).")</br>");
			$summe3 += pow((2*$i-1),2);			
		}
		echo($summe3."<p></p>");
	}
	
}else {
	if($showMessages == true){
		echo("<p><b>Die Summenauagabe ist wohl nicht von Interesse.</b></p>");
	}
}
?>