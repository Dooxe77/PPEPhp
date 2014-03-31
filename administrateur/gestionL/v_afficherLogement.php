<!DOCTYPE html>
<html>
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
        <title>Gestion logement affichage - suppression</title>
        <link rel="stylesheet" href="../../css/style.css" type="text/css" media="screen" /><!-- css concernant seulement "index.php" -->
    </head>
    <body>
        <h3>Gestion logement / affichage - suppression</h3>
        <a href='./v_gererLogement.php'>Retour</a><br/> 


        <form method="post" action="v_afficherLogement.php" >
            <label>Entrez le nombre de logement à afficher:<br/> <input type="number" name="limit" required/></label><br/>
            <input type="submit" value="Envoyer" />
        </form>
           <?php
                require 'class/class_Logement.php';
                $logement = new Logement();
                if(isset($_REQUEST['limit']))
                {
                   $logement->afficherLesLogements($_REQUEST['limit']);                  
                     
                }
                if(isset($_GET['numlogement']))
                {
                    $logement->supprimerLogement($_GET['numlogement']);
                    ?>
                        <script>alert("Le logement "+<?php echo $_GET['numlogement']; ?>+" a été supprimé !");</script>
                    <?php                
                }
                
                
            ?>

    </body>
</html>
