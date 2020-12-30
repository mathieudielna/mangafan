<?php
require_once 'Modele/Manga.php';
require_once 'Modele/Ajouter.php';
require_once 'Vue/Vue.php';

class ControleurAjouter {  
    private $manga; 
    
    public function __construct() {    
        $this->manga = new Ajouter();    
         
    }  
    
    // Affiche les détails sur un manga  
    public function ajouter() {      
        $vue = new Vue("Ajouter");
        $vue->generer(array());
        
    }
    
    public function add($titre,$auteur,$version,$description){
        $this->manga->ajouterManga($titre, $auteur, $version, $description); 
    }

    
}
