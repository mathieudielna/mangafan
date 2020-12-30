<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->

        <?php $this->titre = "Accueil - MangaFan"; ?>
 
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
                    <th scope="col">Pas Fan</th>
                    </tr>
                    <?php
                    if(isset($mangas)){
                        foreach ($mangas as $manga) {
                            echo "<tr scope='row'>";
                            echo "<td><a href=index.php?action=manga&id=".$manga['id'].">".$manga['titre']."</a></td>";
                            echo "<td>".$manga['auteur']."</td>";                        
                            echo "<td>".$manga['description']."</td>";
                            echo "<td>".$manga['version']."</td>";
                            echo "<td>" . "<form method=post action=index.php?action=Fan&id=".$manga['id'].">"                         
                                    ."<button type='submit' class='btn btn-success'>+1</button>"
                                    . "</form></td>";
                            echo "<td>"
                            . "<form method=post action=index.php?action=Pasfan&id=".$manga['id'].">"                         
                                    ."<button type='submit' class='btn btn-danger'>+1</button>"
                                    . "</form></td>";
                            echo "</tr>";             
                        }   
                    }
                    else {
                        echo 'Erreur : Champs Vide !!!';
                    }
                ?>  
                </table>
            </div>
        </div>


