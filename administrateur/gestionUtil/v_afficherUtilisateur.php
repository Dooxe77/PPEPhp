<!DOCTYPE html>
<html>
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
        <title>Afficher les utilisateurs</title>
        <link rel="stylesheet" href="../../css/style.css" type="text/css" media="screen" /><!-- css concernant seulement "index.php" -->
    </head>
    <body>
        <h3>Afficher les utilisateurs</h3>
        <a href='./v_accueilGestionUtil.php'>Retour</a><br/> 
        
        <br/><br/>
        <p>Entrez les intervalles par rapport à la position des utilisateurs recherchés dans la base</p>
         <form method="post">
            <label>Début intervalle: <br/> <input type="number" name="limitDebut" required/></label><br/>
            <label>fin intervalle: <br/> <input type="number" name="limitFin" required/></label><br/>
            <input type="submit" value="Envoyer" />
        </form>
          
        <br/>
        <br/>
        
        <?php 
         require 'class_Utilisateur.php';
         $util = new Utilisateur();
         
            if(isset($_REQUEST['limitDebut']) && isset($_REQUEST['limitFin']))
            {
                if($_REQUEST['limitDebut'] >= 0 && $_REQUEST['limitFin'] >= 0  )
                $util->afficherUtilisateur($_REQUEST['limitDebut'],$_REQUEST['limitFin']);
                else
                    echo '<p>Vos limites doivent être obligatoirement positives.</p>';
            }
        ?>  
    </body>
</html>
