<?php

require_once 'Controleur/ControleurAccueil.php';
require_once 'Controleur/ControleurManga.php';
require_once 'Controleur/ControleurAjouter.php';
require_once 'Vue/Vue.php';
//require 'Controleur/Routeur.php';

class Routeur {  
    private $ctrlAccueil;  
    private $ctrlManga;
    private $ctrlAjouter;
    
    public function __construct() {    
        $this->ctrlAccueil = new ControleurAccueil();    
        $this->ctrlManga = new ControleurManga();
        $this->ctrlAjouter = new ControleurAjouter();
    }  
    
    // Traite une requête entrante  
    public function routerRequete() {    
        try {      
            if (isset($_GET['action'])) {    
                if ($_GET['action'] == 'manga') {
                    //id defini ici !!
                    $idManga = intval($this->getParametre($_GET, 'id'));      
                    if ($idManga != 0) {        
                        $this->ctrlManga->manga($idManga);      
                    }
                    else        
                        throw new Exception("Identifiant de manga non valide");    
                    
                    }    
                    else 
                        if ($_GET['action'] == 'commenter') {      
                            $pseudo = $this->getParametre($_POST, 'pseudo');      
                            $commentaire = $this->getParametre($_POST, 'commentaire');      
                            $idManga = $this->getParametre($_POST, 'id');      
                            $this->ctrlManga->commenter($pseudo, $commentaire, $idManga);                      
                    }
                     else 
                         if($_GET['action'] == 'ajouter'){
                            $this->ctrlAjouter->ajouter();
                    }
                    else 
                        if ($_GET['action'] == 'Add') {      
                            $titre = $this->getParametre($_POST, 'titre');      
                            $auteur = $this->getParametre($_POST, 'auteur');      
                            $version = $this->getParametre($_POST, 'version');
                            $description = $this->getParametre($_POST, 'description'); 
                            $this->ctrlAjouter->add($titre, $auteur, $version, $description);
                            $this->ctrlAccueil->accueil(); 
                        
                    }
                    else 
                        if ($_GET['action'] == 'Fan') {
                            $idManga = intval($this->getParametre($_GET, 'id')); 
                            $this->ctrlManga->fan($idManga);
                            $this->ctrlAccueil->accueil(); 
                    }
                    else 
                        if ($_GET['action'] == 'Pasfan') {
                            $idManga = intval($this->getParametre($_GET, 'id')); 
                            $this->ctrlManga->pasfan($idManga);
                            $this->ctrlAccueil->accueil(); 
                    }
                    else      
                            throw new Exception("Action non valide");   
                    }  
                    else {  // aucune action définie : affichage de l'accueil    
                        $this->ctrlAccueil->accueil();                         
                        }                          
                    } 
                    catch (Exception $e) {      
                        $this->erreur($e->getMessage());                            
                    }                      
                }  

                // Affiche une erreur               
                private function erreur($msgErreur) {    
                    $vue = new Vue("Erreur");    
                    $vue->generer(array('msgErreur' => $msgErreur));              
                }
                
                 // Recherche un paramètre dans un tableau  
                private function getParametre($tableau, $nom) {    
                    if (isset($tableau[$nom])) {      
                        return $tableau[$nom];                            
                    }    
                    else      
                        throw new Exception("Paramètre '$nom' absent");  }
            }
            
                       
