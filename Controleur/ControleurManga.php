<?php
require_once 'Modele/Manga.php';
require_once 'Modele/Commentaire.php';
require_once 'Vue/Vue.php';

class ControleurManga {  
    private $manga;  
    private $commentaire;  
    
    public function __construct() {    
        $this->manga = new Manga();    
        $this->commentaire = new Commentaire();  
    }  
    
// Affiche les détails sur un manga  
    public function manga($idManga) {    
        $manga = $this->manga->getManga($idManga);    
        $commentaires = $this->commentaire->getCommentaires($idManga);
        $fan= $this->manga->getFan($idManga);
        $vue = new Vue("Manga");    
        $vue->generer(array('manga' => $manga, 'commentaires' => $commentaires, 'fan'=> $fan, 'pasfan'=>$fan));  
    }
    
    // Ajoute un commentaire à un manga  
    public function commenter($pseudo, $commentaire, $idManga) {    
        // Sauvegarde du commentaire    
        $this->commentaire->ajouterCommentaire($pseudo, $commentaire, $idManga);     
        // Actualisation de l'affichage du manga    
        $this->manga($idManga);  
    }
    
    public function fan($idManga){
        $this->manga->setFan($idManga);
    }
    
    public function pasfan($idManga){
        $this->manga->setPasfan($idManga);
    }
    
}
