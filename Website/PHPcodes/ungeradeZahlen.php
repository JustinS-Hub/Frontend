<?php 
if($_POST["ungeradeZahl1"] != null && $_POST["ungeradeZahl2"] != null){
	$ungeradeZahl1 = $_POST["ungeradeZahl1"];
	$ungeradeZahl2 = $_POST["ungeradeZahl2"];
	
	echo("Die Anfangs Zahl ist $ungeradeZahl1 und die Endzahl ist $ungeradeZahl2.</br>");
	for($i = $ungeradeZahl1; $i <= $ungeradeZahl2; $i++){
		if($i % 2 != 0){
		echo("..$i..");			
		}
	}
}else{
	if($showMessages ==true){
		echo("<p><b>Hast du kein Herz für ungerade Zahlen?</b></p>");
	}
}
?>