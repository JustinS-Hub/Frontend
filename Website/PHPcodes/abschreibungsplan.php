<?php 
if($_POST["anschaffungsKosten"] != null && $_POST["nutzungsJahre"] != null){
	$anschaffungsKosten = $_POST["anschaffungsKosten"];
	$nutzungsJahre = $_POST["nutzungsJahre"];
	$abschreibungImJahr = $anschaffungsKosten / $nutzungsJahre;
	$abschreibungImJahr = round($abschreibungImJahr,1);
	$machinenWert = null;
	
	echo "<div style='position:relative; left:19%;'>
			<table>
			<tr>
			<th><b>Nutzungsjahr</b></th>
			<th><b>Anfangswert</b></th>
			<th><b>Abschreibungen</b></th>
			<th><b>Restwert</b></th>
			</tr>";
			
	for($i = 1; $i <= $nutzungsJahre; $i++){
		echo("<tr>
		<td>$i</td>
		<td>$anschaffungsKosten</td>
		<td>$abschreibungImJahr</td>
		<td>".$anschaffungsKosten -= $abschreibungImJahr."</td>
		</tr>");
		
	}
	echo ("</table></div>");
	
} else {
	if($showMessages == true){
		echo("<p><b>Der Abschreibungsplan lässt dich wohl kalt.</b></p>");
	}						
}
?>