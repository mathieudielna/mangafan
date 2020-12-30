<?php

require_once 'Modele/Manga.php';
require_once 'Vue/Vue.php';

class ControleurAccueil {  
    private $manga; 
    
    public function __construct() {    
        $this->manga = new Manga();  
    }  

    // Affiche la liste de tous les mangas du blog  
    public function accueil() {    
        $mangas = $this->manga->getMangas();
        $vue = new Vue("Accueil");    
        $vue->generer(array('mangas' => $mangas));  
    }
}
