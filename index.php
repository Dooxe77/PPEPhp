<?php
session_start();
$_SESSION['pseudo'] = '';
?>
<!DOCTYPE html>
<html>
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
        <title></title>
        <link rel="stylesheet" href="css/styleacc.css" type="text/css" media="screen" /><!-- css concernant seulement "index.php" -->
    </head>
    <body>
	
	<br/><br/>
        <img class="image" src="image/logo.jpg"></img>
		<div id="wrapper">

	<form name="login-form" class="login-form" action="index.php" method="post">
	
		<div class="header">
		<h1>Login </h1>
		</div>
	
		<div class="content">
		<input name="pseudo" type="text" class="input username" placeholder="Username" required/>
		<div class="user-icon"></div>
		<input name="password" type="password" class="input password" placeholder="Password" required/>
		<div class="pass-icon"></div>		
		</div>

		<div class="footer">
			<input type="button" name="button" value="Register" class="button2" onclick="document.location.href='vue/Inscription_util.php'"/>
			<input type="submit" name="submit" value="Login" class="button" />
		</div>
	</form>
	<br/>
	

</div>
<div class="gradient"></div>
    
    <?php
    
		require 'class/class_auth.php';
		if (isset($_POST['pseudo']) && isset($_POST['password']))
		{
				$utilisateur = new Authentification(($_POST['pseudo']),($_POST['password']));
				$_SESSION['pseudo']=$_POST['pseudo'];
				$utilisateur->verification();
		}else{
		  
		}	
	
   ?>
<div id="footer"><br/>Application CVVEN créé par Tony Villanova , Kevin Bounseng et Anthony Ruelle.</div>
    </body>
</html>














