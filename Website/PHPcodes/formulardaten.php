<?php 
if($_POST['firstName'] != null &&
	$_POST['lastName'] != null &&
	$_POST['gender'] != null &&
	$_POST['birthday'] != null &&
	$_POST['skill'] != null &&
	$_POST['password'] != null){
		
	$firstName = $_POST['firstName'];
	$lastName = $_POST['lastName'];
	$gender = $_POST['gender'];
	$birthday = $_POST['birthday'];
	$skill =$_POST['skill'];
	$password = $_POST['password'];

	echo("<p><mark>Du heißt $firstName $lastName.</mark></p>");
	echo("<p><mark>Als Geshlecht hast du $gender  angegeben.</mark></p>");
	echo("<p><mark>Du bist $birthday  geboren.</mark></p>");
	echo("<p><mark>Dein IT-Skilllevel ist: $skill</mark></p>");
	echo("<p><mark>Als Passwort haben sie '$password' gewählt.</mark></p>");					
	
}else{
	if($showMessages == true){
		echo("<p><b>Es wurde keine/unvollständige Formulardaten übermittelt!</b></p>");
	}
}
?>