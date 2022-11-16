<?php 
if ($_POST["division1"] != null && $_POST["division2"] != null){
	$zahld1 = $_POST["division1"];
	$zahld2 = $_POST["division2"];
	$zahld3 = $zahld1 / $zahld2;
	
	echo ("<mark>$zahld1 / $zahld2 = $zahld3</mark>");
} else {
	if($showMessages == true){
		echo("<p><b>Es wurde keine Division vorgenommen.</b></p>");
	}	
}
?>