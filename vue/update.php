<?php
require_once("../include/head.inc.php");
require_once("../include/menu.inc.php");
?>
<body>
<center>
    <h1>Modification de votre mot de passe : </h1>
    <form method="POST">
            
	    <label>Ancien mot de passe :<input type="password" name="old_mdp" placeholder="" required/></br></label>
        <label>Nouveau mot de passe :<input type="password" name="new_mdp" placeholder="" required/><br/></label>
        <label>Retapez le nouveau mot de passe :<input type="password" name="new_mdp2" placeholder="" required/><br/></label>
        <input type="submit" value="Valider" title="Valider" name="Update_mdp"/>
        <input type="button" value="Annuler" onclick="window.location='index2.php'"/>
    </form>
        </br></br>
</center>
    
    <?php
 include_once '../class/class_auth.php';
	if (isset($_POST['old_mdp']) and isset($_POST['new_mdp']))
	{
		$user = new Authentification($_SESSION['pseudo']);
		$user->modification($_SESSION['pseudo'],$_POST['old_mdp'],$_POST['new_mdp'],$_POST['new_mdp2']);
	}
?>
    
    </body>
</html>
