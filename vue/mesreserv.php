<?php
require_once("../include/head.inc.php");
require_once("../include/menu.inc.php");
?>
<body>
	<?php
		require_once("../conf/BDD_Connexion2.php");
		if(isset($_GET['id']) && is_numeric($_GET['id'])) {
			// Traitement de la suppression de l'événement
			$id = htmlentities($_GET['id']);
			
			$req = "DELETE FROM calendrier WHERE id_evenement = " .$id;
			mysql_query($req);
			
			$req = "DELETE FROM reservations WHERE id_reservation = " .$id;
			mysql_query($req);
			
			echo '<ul><li>Réservations annulée !</li></ul>';
		}
		
		$nom = $_SESSION['pseudo'];
		// Récupération des événements
		$req = "SELECT * FROM reservations WHERE pseudoUtil = '$nom'";
		$evenements = mysql_query($req);
		
		if(mysql_num_rows($evenements)) $nbEvents = true;
		else $nbEvents = false;
				
		mysql_close();
	?>
    <br/><br/>
	<h1>Mes réservation</h1>
	
    <?php
	if($nbEvents) {
		
		while($evenement = mysql_fetch_array($evenements)) {
				if (html_entity_decode($evenement['accepte']) == 0)
			{
				$etat = "<span style='color:red'><u>En attente</u></span>";
			}else{
				if(html_entity_decode($evenement['accepte']) == 1){
					$etat = "<span style='color:#04B431'><u>Validé</u></span>";
			}
			}
			
				if (html_entity_decode($evenement['numPension']) == 0)
			{
				$pension = "demi-pension";
			}else{
				$pension = "pension compléte";
			};
			
				if (html_entity_decode($evenement['menage']) == 1)
			{
				$menage = "Oui";
			}else{
				$menage = "Non";
			};
			$numLogement = html_entity_decode($evenement['numLogement']) ;
			
			
			include("../conf/BDD_Connexion.php");
			$req = "SELECT typeLogement FROM logements WHERE numLogement = '$numLogement'";
			$resultat = $bdd->query($req);
			$typeLogement = "";
			while ($donnees = $resultat->fetch())
			{
				$typeLogement = $donnees['typeLogement'];
			}
			
					
		
			echo '
			<table class="listeEvent">
			
				<tr><td><b>Etat : </b>'.$etat.'</td></tr>
				<tr><td><b>Id réservation	: </b>'.html_entity_decode($evenement['id_reservation']).'</td></tr>
				<tr><td><b>Titre : </b>'.html_entity_decode($evenement['titre_reservation']).'</td></tr>
				<tr><td><b>Auteur : </b>'.html_entity_decode($evenement['pseudoUtil']).'</td></tr>
				<tr><td><b>Contenu : </b>'.html_entity_decode($evenement['contenu_reservation']).'</td></tr>
				<tr><td><b>Prix réservation :  </b>'.html_entity_decode($evenement['prix_reservation']). ' Euros</td></tr>
				<tr><td><b>Pension choisie :  </b>'.$pension.'</td></tr>
                <tr><td><b>Ménage (Oui/Non) :  </b>'.$menage.'</td></tr>
                <tr><td><b>Votre numéro de logement :  </b>'.$numLogement.'</td></tr>
				<tr><td><b>Votre type de logement : </b> '.$typeLogement.'</td></tr>
				
				<tr><td><a href="mesreserv.php?id='.$evenement['id_reservation'].'">Annuler</a></td></tr>
			</table>
			
			<br/><br/>
			';
			
		}
			
	} else {
		
		echo '<p>Vous n\'avez aucune réservations en cours</p>';
		
	}
	?>
    
    <a href="mesreserv.php">Remonter en haut .</a>
    
</body>
</html>
