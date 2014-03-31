        <?php 
        include '../class/class_auth.php';
        $utilDroit = new Authentification($_SESSION['pseudo']);
        $_SESSION['droit'] = $utilDroit->getDroitUtil(); // on a la variable droit de session
                                                         // si 1 administrateur       
        ?>

       <img src="../image/banniere.jpg" id="ban"/>
		<ul id="navigation">
			<li><a href="accueilUtilisateur.php">Accueil</a></li>
			<li><a href="ajoutevent.php">Faire une réservation</a></li>
			<li><a href="mesreserv.php">Mes réservations</a></li>
			
			<?php 
				if($_SESSION['droit'] == 1)
				{
			?>
				<li><a href="../administrateur/index.php">Partie Admin</a></li>
			<?php
				}
			?>
			
			<li><a href="contact.php">Contacter l'admin</a></li>
			<li><a href="update.php">Modifier password</a></li>
			<li><a href="logout.php">Se déconnecter</a></li>
		</ul>
		 <br/><br/>
		 <p align="center">Connecté en tant que <?php echo $_SESSION['pseudo']; ?></p>
		<br/>
		
		
		
		

