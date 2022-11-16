<?php
if($_POST["name"] != null && $_POST["koerpergroesse"] != null && $_POST["geschlecht"] != null){
	$name = $_POST["name"];
	$koerpergroesse = $_POST["koerpergroesse"];
	$geschlecht = $_POST["geschlecht"];
	$k = 0;
	$gewicht=0;
	
	if($geschlecht == "m"){
		$k = 0.9;
		$gewicht = ($koerpergroesse - 100)*$k;
		echo("<p><mark>$name, als Mann mit einer Körpergröße von $koerpergroesse cm liegt dein ideal Gewicht bei $gewicht kg.</mark></p>");
	} else {
		$k = 0.85;
		$gewicht = ($koerpergroesse - 100)*$k;
		echo("<p><mark>$name, als Frau mit einer Körpergröße von $koerpergroesse cm liegt dein ideal Gewicht bei $gewicht kg.</mark></p>");
	}

}else{
	if($showMessages == true){
		echo("<p><b>Dein ideal Gewicht liegt dir wohl nicht so <em>schwer</em> auf den Herzen.</b></p>");
	}
}
?>