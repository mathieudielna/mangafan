
<?php $this->titre = "MangaFan - " . $manga['titre']; ?>
        <!--Afichage unitaire des mangas -->
        <div class="container">
            <div class="row">
            </div>
            <div class="row">
                <table class="table table-bordered table-hover">
                    <tr class="thead-light">
                    <th scope="col">Titre</th>
                    <th scope="col">Auteur</th>
                    <th scope="col">Desc</th>
                    <th scope="col">version</th>
                    <th scope="col">Fan</th>
                    <th scope="col">PasFan</th>
                    </tr>
                    <?php
                    if(isset($manga)){                  
                            echo "<tr scope='row'>";
                            echo "<td>".$manga['titre']."</td>";
                            echo "<td>".$manga['auteur']."</td>";                        
                            echo "<td>".$manga['description']."</td>";
                            echo "<td>".$manga['version']."</td>";
                            echo "<td><button type='buton' class='btn btn-success'>". $fan['fan']."</button></td>";
                            echo "<td><button type='buton' class='btn btn-danger'>". $fan['pasfan']."</button></td>";
                            echo "</tr>";             
                           
                    }
                    else {
                        echo 'Erreur -> ce manga n existe pas !!!';
                    }
                ?>  
                </table>
            </div>
        </div>
        <br>
        <hr>
        
        <center><h5>Commentaires :</h5></center>
        <!--Afichage unitaire des commentaires -->
        <div class="container">
            <div class="row">
            </div>
            <div class="row">
                <table class="table table-bordered table-hover">
                    <tr class="thead-light">
                    <th scope="col">Pseudo</th>
                    <th scope="col">Commentaire</th>
                    </tr>
                    <?php
                    if(isset($commentaires)){
                        foreach ($commentaires as $commentaire){
                            echo "<tr scope='row'>";
                            echo "<td>".$commentaire['auteur']."</td>";
                            echo "<td>".$commentaire['contenu']."</td>";                        
                            echo "</tr>";             
                        }
                    }
                    else {
                        echo 'Aucun commentaire';
                    }
                ?>  
                </table>
            </div>
        </div>
        <!--Commentaire-->
 
        <hr>
        <form method="post" action="index.php?action=commenter">
            <div class="ajouter-form">

                <h2 class="text-center">Commenter</h2>
                <div class="form-group">
                    <input type="text" class="form-control" placeholder="Votre pseudo" id="nom" name="pseudo" required="required">
                </div>
                <div class="form-group">
                    <textarea class="form-control" name="commentaire"   placeholder="Commentaire sur <?= $manga['titre']; ?>" required></textarea>
                </div>
                <div class="form-group">
                    <input type="hidden" name="id" value="<?= $manga['id'] ?>" />
                    <button type="submit" class="btn btn-primary btn-block" id="Envoyer" >publier </button>  
                </div>
            </div>
        </form>


   