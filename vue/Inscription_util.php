<!DOCTYPE html>
<html>
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
        <title></title>
        <link rel="stylesheet" href="../css/style.css" type="text/css" media="screen" /><!-- css toute les vues -->
		<link rel="stylesheet" href="../css/styleacc.css" type="text/css" media="screen" />
        <link rel="stylesheet" type="text/css" href="../css/calendrier.css" media="screen" />

   </head>
   
   <div id="footer"><br/>Application CVVEN créé par Tony Villanova , Kevin Bounseng et Anthony Ruelle.</div>
   

    <body>
        </br></br></br>
        <center>
        <img src="../image/logo.jpg"></img><br/><br/><br/>
        <fieldset>
			<legend>Création d'un compte : </legend>
        
		<form method="POST">
                <label>Login :</label><br/><input id="login" type="text" name="login" placeholder="Login" required/><br/>
                <label>Mot de passe (+ de 6 caractéres svp ):</label><br/><input id='mdp1' type="password" name="mdp" placeholder="Mot de passe" required/><br/>
                <label>Verification :</label><br/><input id="mdp2" type="password" name="mdp2" placeholder="Entrez à nouveau" required/><br/>
                <label>Adresse:</label><br/><input id="adresse" type="text" name="adresse" placeholder="Adresse" required/><br/>
                <label>Code Postal:</label><br/><input id="cpt" type="text" name="cp" placeholder="Code postal" required/><br/>
                <label>Ville :</label><br/><input id="ville" type="text" name="ville" placeholder="Ville" required/><br/>
                <br/><br/>
				<input type="submit" value="Annuler" onclick="document.location.href='../index.php'">
				<input type="submit" value="Créer">
            
        </form>
		</fieldset>
        </center>
    

<?php


require '../class/class_auth.php';
require '../fonction/verifInscription.php';

?>
    
    </body>
</html>
