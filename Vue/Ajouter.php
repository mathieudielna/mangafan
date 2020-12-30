
<?php $this->titre = "Ajouter - MangaFan"; ?> 
<form method="post" action="index.php?action=Add">
    <div class="ajouter-form">
    
        <h2 class="text-center">Ajouter un Manga</h2>
        <div class="form-group">
            <input type="text" class="form-control" placeholder="Titre" id="nom" name="titre" required="required">
        </div>
          <div class="form-group">
            <input type="text" class="form-control" placeholder="Auteur" id="prenom" name="auteur" required="required">
        </div>
          <div class="form-group">
            <input type="text" class="form-control" placeholder="version" id="user" name="version" required="required">
        </div>
        <div class="form-group">
            <textarea class="form-control" name="description"   placeholder="description" required></textarea>
        </div>
        <div class="form-group">
            <button type="submit" class="btn btn-primary btn-block" id="Envoyer" >Ajouter ce manga </button>  
        </div>
    </div>
</form>
