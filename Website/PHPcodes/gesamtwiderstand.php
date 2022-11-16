<?php 
if ( $_POST["widerstand1"] != null && $_POST["widerstand2"] != null){
	$r1 = $_POST["widerstand1"];
	$r2 = $_POST["widerstand2"];
	$rGesamt = $r1 * $r2 / ($r1 +$r2);
	echo ("<p><mark>Der Gesamtwiderstand aus zwei parralelgeschaltet Widerständen beträgt $rGesamt Ohm.</mark></p>");
} else {
	if($showMessages == true){
		echo("<p><b>Es wurde keine Widerstandsrechung vorgenommen.</b></p>");
	}
}
?>