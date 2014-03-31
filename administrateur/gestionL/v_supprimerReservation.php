<!DOCTYPE html>
<html>
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
        <title>Gestion Réservation / suppression</title>
        <link rel="stylesheet" href="../../css/style.css" type="text/css" media="screen" /><!-- css concernant seulement "index.php" -->
    </head>
    <body>
        <h2>Supprimer Réservation</h2>
        <div>
            <a href='.././index.php'>Accueil Administrateur</a><br/><br/><br/>
        </div>
        


	<?php
		require_once("../../conf/BDD_Connexion2.php");
		
		if(isset($_GET['id']) && is_numeric($_GET['id'])) {
			// Traitement de la suppression de l'événement
			$id = htmlentities($_GET['id']);
			
			$req = "DELETE FROM calendrier WHERE id_evenement = " .$id;
			mysql_query($req);
			
			$req = "DELETE FROM reservations WHERE id_reservation = " .$id;
			mysql_query($req);
			
			echo '<ul><li>Evénement supprimé !</li></ul>';
		}
		
		
		// Récupération des événements
		$req = "SELECT * FROM reservations";
		$evenements = mysql_query($req);
		
		if(mysql_num_rows($evenements)) $nbEvents = true;
		else $nbEvents = false;
		
		
		mysql_close();
	?>
   
    <?php
	if($nbEvents) {
		
		while($evenement = mysql_fetch_array($evenements)) {
			echo '
			<table class="listeEvent">
				<tr><td>Titre : '.html_entity_decode($evenement['titre_reservation']).'</td></tr>
				<tr><td>Auteur : '.html_entity_decode($evenement['pseudoUtil']).'</td></tr>
				<tr><td>Contenu : '.html_entity_decode($evenement['contenu_reservation']).'</td></tr>
				<tr><td><a href="v_supprimerReservation.php?id='.$evenement['id_reservation'].'">Supprimer</a></td></tr>
			</table>
			<br/><br/>
			';
		}
		
	}
	?>
    













		
    </body>
</html>


    </body>
</html>

