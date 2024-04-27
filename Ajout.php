<!DOCTYPE html>
<html lang="fr">
    <head>
        <meta charset="utf-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
        <meta name="description" content="" />
        <meta name="author" content="" />
        
        <title>DIALLO AUTOMOBILE</title>
        <!-- Favicon-->
        <link rel="icon" type="image/x-icon" href="assets/favicon.ico" />
        <!-- Font Awesome icons (free version)-->
        <script src="https://use.fontawesome.com/releases/v6.3.0/js/all.js" crossorigin="anonymous"></script>
        <!-- Google fonts-->
        <link href="https://fonts.googleapis.com/css?family=Montserrat:400,700" rel="stylesheet" type="text/css" />
        <link href="https://fonts.googleapis.com/css?family=Roboto+Slab:400,100,300,700" rel="stylesheet" type="text/css" />
        <!-- Core theme CSS (includes Bootstrap)-->
        <link href="css/styles.css" rel="stylesheet" />
    </head>
    <body class="page_getion" id="page-top">
        <!-- Navigation-->
        <nav class="navbar navbar-expand-lg navbar-dark fixed-top" id="mainNav">
            <div class="container">
                <a class="navbar-brand" href="#page-top"><img src="images/Bugatti2.jpg" alt="..." /></a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
                    Menu
                    <i class="fas fa-bars ms-1"></i>
                </button>
                <div class="collapse navbar-collapse" id="navbarResponsive">
               
                    <ul class="navbar-nav text-uppercase ms-auto py-4 py-lg-0">
                    <li class="nav-item"><a class="nav-link" href="index.php">Accueil</a></li>
                    <li class="nav-item"><a class="nav-link" href="Ajout.php">Ajout voitures</a></li>
                    <li class="nav-item"><a class="nav-link" href="collection.php">Rechercher</a></li>
                    <li class="nav-item"><a class="nav-link" href="Affichage.php">Afficher tout</a></li>
                    <li class="nav-item"><a class="nav-link" href="Espace_admin.php">Ajout administrateur</a></li>
                    </ul>
                </div>
                </div>
            </div>
        </nav>
      <div>
        
        
      
        <form method="POST" action="gestion_bolide.php" class="formadmin">
            <h4> Ajouter dans  la base de données</h4>
  
  <div data-mdb-input-init class="form-outline mb-4">
    <input type="text" name="MARQUE" id="form1Example1" class="form-control" />
    <label class="form-label" for="form1Example1">MARQUE</label>
  </div>
  <div data-mdb-input-init class="form-outline mb-4">
    <input type="text" name="MODELE" id="form1Example1" class="form-control" />
    <label class="form-label" for="form1Example1">MODELE</label>
  </div>

 
  <div data-mdb-input-init class="form-outline mb-4">
    <input name="KILOMETRAGES" type="VARCHAR" id="form1Example2" class="form-control" />
    <label class="form-label" for="form1Example2">KILOMETRAGES	</label>
  </div>
  <div data-mdb-input-init class="form-outline mb-4">
    <input name="TYPE_CARBURANT" type="text" id="form1Example2" class="form-control" />
    <label class="form-label" for="form1Example2">TYPE_CARBURANT</label>
  </div>
  <div data-mdb-input-init class="form-outline mb-4">
    <input name="COULEUR" type="text" id="form1Example2" class="form-control" />
    <label class="form-label" for="form1Example2">COULEUR	</label>
  </div>
  <div data-mdb-input-init class="form-outline mb-4">
    <input name="NOMBRE_DE_PLACE" type="int" id="form1Example2" class="form-control" />
    <label class="form-label" for="form1Example2">NOMBRE_DE_PLACE</label>
  </div>
 
  <div data-mdb-input-init class="form-outline mb-4">
    <input name="PHOTO" type="file" id="form1Example2" class="form-control" />
    <label class="form-label" for="form1Example2">PHOTO	</label>
  </div>
  
  <div data-mdb-input-init class="form-outline mb-4">
    <input name="PRIX" type="text" id="form1Example2" class="form-control" />
    <label class="form-label" for="form1Example2">PRIX</label>
  </div>

  <!-- Submit button -->
  <button data-mdb-ripple-init type="submit" name="Ajouter" class="btn btn-primary btn-block" title="cliquez pour ajouter">Ajouter</button>
  
  
</form>
</div>
    </body>
</html>