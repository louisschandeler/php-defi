<?php
include('includes/form-validator.php');
?>  
<!DOCTYPE html>
<html lang="fr">
	<head>
		<title>Louis Schandeler | Php defi</title>
		<meta charset="UTF-8" />
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<meta name="viewport" content="width=device-width,initial-scale=1,maximum-scale=1,user-scalable=no">		
		<link rel="stylesheet" href="css/style.css">
		<link rel="stylesheet" href="css/font-awesome.min.css">
		<link href='http://fonts.googleapis.com/css?family=Open+Sans:400,700' rel='stylesheet' type='text/css'>
	</head>
<body>	
<div class="form-wrapper">
<div class="form">
	<div class="form-header first-class">
    	<h1 class="float-left">Nous contacter</h1>
    </div>
    <div class="form-container">
    	<form method="post" action="index.php">
    	
        	<div class="field first-class">
        		<label for="nom">Votre nom <span class="required">*</span></label>
                <input class="float-right" name="nom" type="text" value="<?php if(isset($nom)) echo $nom ?>">
                <i class="fa fa-user float-left"></i> 
                <?php if(isset($erreurnom)) echo '<span class="error-message">'.$erreurnom.'</span>'; ?>
            </div><!-- end field name -->
            
            
            <div class="field field-email first-class">
            	<label for="email">Votre email <span class="required">*</span></label>
                <input class="float-right" name="email" type="text" value="<?php if(isset($email)) echo $email ?>">
            	<i class="fa fa-envelope float-left"></i>
            	<?php if(isset($erreuremail)) echo '<span class="error-message">'.$erreuremail.'</span>'; ?>
            </div><!-- end field email -->
            
            
            <div class="field field-message first-class">   
            	<label for="message">Votre message <span class="required">*</span></label>          	
            	<textarea class="float-right" name="message"><?php if(isset($message)) echo $message ?></textarea>
            	<i class="fa fa-pencil float-left"></i>
            	<?php if(isset($erreurmessage)) echo '<span class="error-message">'.$erreurmessage.'</span>'; ?> 
            </div> <!-- end field message -->
            
            
            <div class="submit first-class">           
               <input type="submit" id="envoyer" class="float-right btn-primary" value="Envoyer"><br /> 
               <?php if(($valid)) echo '<span class="valid">'.$valid.'</span>'; ?>   
            </div> <!-- end input submit -->             
        </form><!-- end form -->
                       
    </div>
    </div>
</div>
</div>
</body>
</html>