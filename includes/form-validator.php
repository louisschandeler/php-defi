<?php
if (!empty($_POST)){
	extract($_POST);
	$valid=true;
	
	//si nom vide alors erreur
	if(empty($nom)){
		$valid=false;
		$erreurnom="Tu n'as pas de nom ?";
	}
	
	//validation de l'email
	if(!preg_match("/^[a-z0-9-_.]+@[a-z0-9-_.]+\.[a-z]{2,3}$/i",$email)){
		$valid=false;
		$erreuremail="Ton email n'est pas valide";
	}
	
	//si email vide alors erreur
	if(empty($email)){
		$valid=false;
		$erreuremail="Ton email est vide";
	}
	
	//si message vide alors erreur
	if(empty($message)){
		$valid=false;
		$erreurmessage="Il n'y a pas de message";
	}
	
	//si form valide on envoie
	if($valid){
  	    $to = "louisschandeler@gmail.com"; 
		$sujet = $nom." vous a contacté sur louisschandeler.be";
		$header = "From: $email \n";
		$header .= "Reply-To: $email";
		$message = stripslashes($message);
		$nom = stripslashes($nom);
		if(mail($to,$sujet,$message,$header)){
			$valid = "Ton message nous ai bien parvenu";
			unset($nom);
			unset($email);
			unset($message);
		}
	}
}
?>	