<?php

require 'Modele/Modele.php';

// Affiche la liste de tous les mangas mangas
function accueil() {  
    $mangas = getMangas();  
    require 'Vue/Accueil.php';
}

// Affiche les détails des mangas
function manga($idManga) {  
    $manga = getManga($idManga);  
    $commentaires = getCommentaires($idManga); 
    $fan = getFan($idManga);
    require 'Vue/Manga.php';
}

// Afficher la vue ajout
function ajout() {   
    require 'Vue/Ajouter.php';
}
// Affiche vue erreur
function erreur($msgErreur) {  
    require 'Vue/Erreur.php';
}