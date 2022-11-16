<?php 
if($_POST["schaltJahr"] != null){
	$istSchaltJahr = false;
	$schaltJahr = $_POST["schaltJahr"];
	if($schaltJahr % 400 == 0){
		$istSchaltJahr = true;
	} else if($schaltJahr % 100 == 0){
		$istSchaltJahr = false;
	} else if($schaltJahr % 4 == 0){
		$istSchaltJahr = true;
	} else {
		$istSchaltJahr = false;
	}

	if($istSchaltJahr){
		echo("Das Jahr ". $schaltJahr . " ist ein Schaltjahr.");
	}else{
		echo("Das Jahr ". $schaltJahr . " ist kein Schaltjahr.");
	}

} else {
	if($showMessages == true){
		echo("<p><b>Du willst anscheindend kein Schaltjahr ermittlen.</b></p>");
	}						
}
?>