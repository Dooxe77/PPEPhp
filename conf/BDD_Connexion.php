<?php
    try {
        $user ='root';
        $mdp='';
            
          $bdd = new PDO('mysql:host=localhost;dbname=ppe_gestion', $user, $mdp);  
         
        }
        catch(Exception $e)
        {
          
            die('Erreur : ' .$e->getMessage());
        }
          
?>
