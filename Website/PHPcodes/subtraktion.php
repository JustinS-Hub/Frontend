<?php 
if ($_POST["subtraktion1"] != null or $_POST["subtraktion2"] != null){

	$zahls1 = $_POST["subtraktion1"];
	$zahls2 = $_POST["subtraktion2"];	
	
	$zahls3 = $zahls1 - $zahls2;						
	echo ($zahls1." - " . $zahls2 ." = ". $zahls3);
}else {
	if($showMessages == true){
		echo("<p><b>Es wurde keine Subtraktion vorgenommen.</b></p>");
	}
}
?>