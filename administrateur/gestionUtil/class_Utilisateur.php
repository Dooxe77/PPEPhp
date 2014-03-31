<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of class_Utilisateur
 *
 * @author tony
 */
class Utilisateur {
    
    private $bdd;
    
    function __construct() {
         include_once '../../conf/BDD_Connexion.php'; 
         $this->bdd = $bdd;
    }
    
    /**
     * Affiche les utilisateur de la bdd, grâce à l'intervalle passé en paramètre
     * $limitD = début de l'intervalle
     * $limitF = fin de l'intervalle
     * @param type $limitD
     * @param type $limitF
     */
    function afficherUtilisateur($limitD = 0,$limitF = 0)
    {
        $req = "select idUtilisateur, pseudoUtil, droitUtil from utilisateur LIMIT $limitD,$limitF;";
        $rep = $this->bdd->query($req);
        while($donnee = $rep->fetch())
        {
            echo "Id de l'utilisateur ".$donnee['idUtilisateur']."<br/>Pseudo: ".$donnee['pseudoUtil']."<br/>Droit: ".$donnee['droitUtil']."<br/><br/>";
        }
    }
    
    function utilPresent($pseudo)
    {
        $reqRechercheUtil = "select count(*) from utilisateur where pseudoUtil = '$pseudo';";
        $rep = $this->bdd->query($reqRechercheUtil);
        while ($donnee = $rep->fetch())
        {
           return  $donnee['count(*)'];
        }
    }
    function  updateDroitUtil($pseudo,$droit)
    {
        
        
        $req = "update utilisateur set droitUtil = $droit where pseudoUtil = '$pseudo';";
        return  $this->bdd->query($req) or die ('erreur maj droit');
        
        
    }
}
