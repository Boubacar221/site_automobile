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
                <a class="Tel" href="https://wa.me/+221766301451">76 630 14 51</a>
                    <ul class="navbar-nav text-uppercase ms-auto py-4 py-lg-0">
                    <li class="nav-item"><a class="nav-link" href="index.php">Accueil</a></li>
                        <li class="nav-item"><a class="nav-link" href="index.php">Services</a></li>
                        <li class="nav-item"><a class="nav-link" href="index.php">Nos voitures</a></li>
                        <li class="nav-item"><a class="nav-link" href="A propos.php">A propos</a></li>
                        <li class="nav-item"><a class="nav-link" href="Gestion.php">Gestion</a></li>
                        <li class="nav-item"><a class="nav-link" href="#contact">Contact</a></li>
                        <li class="nav-item"><a class="nav-link" href="collection.php">Rechercher</a></li>
                    </ul>
                </div>
            </div>
        </nav>
      <div>
        
        
        <form method="POST" action="Resultat.php" class="formadmin">
            <h4>Connexion administrateurs</h4>
  
  <div data-mdb-input-init class="form-outline mb-4">
    <input type="email" name="email" id="form1Example1" class="form-control" />
    <label class="form-label" for="form1Example1">Adresse email</label>
  </div>
  <div data-mdb-input-init class="form-outline mb-4">
    <input type="text" name="Nom_utilisateur" id="form1Example1" class="form-control" />
    <label class="form-label" for="form1Example1">Utilsateur</label>
  </div>

  <div data-mdb-input-init class="form-outline mb-4">
    <input name="mot_de_passe" type="password" id="form1Example2" class="form-control" />
    <label class="form-label" for="form1Example2">Mot de passe</label>
  </div>

  <!-- 2 column grid layout for inline styling -->
  <div class="row mb-4">
    <div class="col d-flex justify-content-center">
      <!-- Checkbox -->
      <div class="form-check">
        <input class="form-check-input" type="checkbox" value="" id="form1Example3" checked />
        <label class="form-check-label" for="form1Example3"> Me reconnaitre </label>
      </div>
    </div>

    <div class="col">
      <!-- Simple link -->
      <a href="#!">Mot de passe oublié?</a>
    </div>
  </div>

  <!-- Submit button -->

  <button data-mdb-ripple-init type="submit" name="connexion" class="btn btn-primary btn-block">Se connecter</button>

  
</form>
</div>
    </body>
</html>