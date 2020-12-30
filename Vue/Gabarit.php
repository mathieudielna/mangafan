<!doctype html>
<html lang="fr">  
    <head>    
        <meta charset="UTF-8" />    
        <link rel="stylesheet" href="Contenu/style.css" />
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
        <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
        <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
        <title>
            <?= $titre ?>
        </title>   <!-- Élément spécifique -->
        </head>  
        <body>
            <!-- Image and text -->
            <nav class="navbar navbar-expand-lg navbar-light bg-light">
                <a class="navbar-brand" href="index.php">MangaFan.com</a>
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
                  <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarNavDropdown">
                  <ul class="navbar-nav">
                    <li class="nav-item active">
                      <a class="nav-link" href="index.php">Nos mangas <span class="sr-only">(current)</span></a>
                    </li>
                    <li class="nav-item">
                      <a class="nav-link" href="index.php?action=ajouter">Ajouter un manga</a>
                    </li>
                    <li class="nav-item dropdown">
                      <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        Nos mangas
                      </a>
                      <div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
                        <a class="dropdown-item" href="#">amelioration futur</a>
                        <a class="dropdown-item" href="#">amelioration a faire</a>
                      </div>
                    </li>
                  </ul>
                </div>
              </nav>
            <div id="global">      
                <header>        
                    <a href="index.php">
                        <h1 id="titreBlog">MangaFan</h1></a>        
                        <center><p>N°1 du manga à René Descarte</p></center>    
                </header>      
                <div id="contenu">        
                <?= $contenu ?>   <!-- Élément spécifique -->      
                </div>
                 
            </div> <!-- #global -->  
  
         <!-- Footer -->
        <footer class="py-3 bg-transparent">
          <div class="container">
              <hr>
            <p class="m-0 text-center text-muted ml-auto">Copyright MangaFan &copy; SLAM Descartes 2020-2021</p>
          </div>
          <!-- /.container -->
        </footer>
    </body>
</html>
