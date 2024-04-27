
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
        </nav>
      <div>
      <header class="hautpagegestion">

      </header>
        


<?php


$serveur = "localhost";
 $utilisateur = "root";
 $motDePasse = "";
 $nomDeLaBase = "automobile";
 
 $connexion = mysqli_connect($serveur, $utilisateur, $motDePasse, $nomDeLaBase);
 
 if (!$connexion) {
     die("La connexion à la base de données a échoué : " . mysqli_connect_error());
 }
 
 
 if (isset($_POST['Ajouter'])) {
   
        $MARQUE	 = $_POST['MARQUE'];
        $MODELE = $_POST['MODELE'];
        $KILOMETRAGES = $_POST['KILOMETRAGES'];
        $TYPE_CARBURANT = $_POST['TYPE_CARBURANT'];
        $COULEUR = $_POST['COULEUR'];
        $NOMBRE_DE_PLACE = $_POST['NOMBRE_DE_PLACE'];
        $PHOTO = $_POST['PHOTO'];
        $PRIX = $_POST['PRIX'];
        
       
     
     $requeteEnregistrement = "INSERT INTO gestion (MARQUE, MODELE, KILOMETRAGES, TYPE_CARBURANT, COULEUR, NOMBRE_DE_PLACE, PHOTO, PRIX) VALUES ('$MARQUE', '$MODELE', '$KILOMETRAGES', '$TYPE_CARBURANT', '$COULEUR', '$NOMBRE_DE_PLACE', '$PHOTO', '$PRIX')";
     mysqli_query($connexion, $requeteEnregistrement);
    
 
     echo " Enregistrement réussi! '<br>";
    
    

     // Vérifie si le formulaire a été soumis
     if ($_SERVER["REQUEST_METHOD"] == "POST") {
         // Collecte les données du formulaire
         $MARQUE = htmlspecialchars($_POST['MARQUE']);
         $MODELE = htmlspecialchars($_POST['MODELE']);
         
         // Crée une chaîne avec les informations
         $texte = "MARQUE: $MARQUE\nMODELE: $MODELE\n";
     
         // Spécifie le chemin et le nom du fichier où sauvegarder les données
         $fichier = "sauvegardevéhicules.txt";
     
         // Utilise file_put_contents() pour écrire les données dans le fichier, FILE_APPEND permet de ne pas écraser le contenu existant
         if (file_put_contents($fichier, $texte, FILE_APPEND)) {
             echo "Informations sauvegardées avec succès.";
         } else {
             echo "Erreur lors de la sauvegarde des informations.";
         }
     } else {
         // Si le formulaire n'a pas été soumis, redirige l'utilisateur vers le formulaire
         header('Location: Ajout.php');
     }
     
  
     
 } 

 
 elseif ($connexion->connect_error) {
     die("Échec de la connexion à la base de données : " . $connexion->connect_error);
 }
 
 // Récupération des données du formulaire
 elseif (isset($_POST['Rechercher'])) {
        $MARQUE	 = $_POST['MARQUE'];
        $MODELE = $_POST['MODELE'];
        $KILOMETRAGES = $_POST['KILOMETRAGES'];
        $TYPE_CARBURANT = $_POST['TYPE_CARBURANT'];
        $COULEUR = $_POST['COULEUR'];
        $NOMBRE_DE_PLACE = $_POST['NOMBRE_DE_PLACE'];
        $PHOTO = $_POST['PHOTO'];
        $PRIX = $_POST['PRIX'];
 
        $sql = "SELECT MARQUE, MODELE, KILOMETRAGES, TYPE_CARBURANT, NOMBRE_DE_PLACE, PRIX, PHOTO FROM gestion WHERE MARQUE='$MARQUE'AND MODELE='$MODELE'";
        $resultat = $connexion->query($sql);
        
        // Vérification du résultat de la requête
        if ($resultat->num_rows > 0) {
            
            while ($row = $resultat->fetch_assoc()) {
        
            
            echo " <div><img src='images/". htmlspecialchars($row["PHOTO"]). "' class='card-img-top mx-auto d-block' alt='Photo de la Voitures' style='max-width: 600px; height: 400px;'> </div>";
            // echo '<img class="imagesortie" src="data:image/jpg;base64,' . base64_encode($row['PHOTO']) . '" /><br>';
           
            include "supr.php";
            if (isset($_POST['supprimer'])) {
                $MARQUE	 = $_POST['MARQUE'];
                $MODELE = $_POST['MODELE'];
                $KILOMETRAGES = $_POST['KILOMETRAGES'];
                $TYPE_CARBURANT = $_POST['TYPE_CARBURANT'];
                $COULEUR = $_POST['COULEUR'];
                $NOMBRE_DE_PLACE = $_POST['NOMBRE_DE_PLACE'];
                $PHOTO = $_POST['PHOTO'];
                $PRIX = $_POST['PRIX'];
        
            // Connexion à la base de données
            $db = new mysqli("Localhost", "root", "", "automobile");
        
            if ($db->connect_error) {
                die("Connection failed: " . $db->connect_error);
            }
        
            // Suppression de l'image du dossier s'il y a lieu
            $query = "SELECT MARQUE, MODELE, KILOMETRAGES, TYPE_CARBURANT, NOMBRE_DE_PLACE, PRIX, PHOTO FROM gestion WHERE MARQUE='$MARQUE'AND MODELE='$MODELE' AND $PHOTO='$PHOTO'";
            $stmt = $db->prepare($query);
            $stmt->bind_param("i", $del);
            $stmt->execute();
            $result = $stmt->get_result();
            if ($result->num_rows === 1) {
                $row = $result->fetch_assoc();
                if (file_exists($row['images/'])) {
                    unlink($row['images/']); // Supprime le fichier image
                }
            }
            $stmt->close();
        
            // Suppression des informations de la base de données
            $query = "DELETE FROM gestion WHERE MARQUE='$MARQUE'AND MODELE='$MODELE' AND $PHOTO='$PHOTO' ";
            $stmt = $db->prepare($query);
            $stmt->bind_param("i", $del);
            $stmt->execute();
            $stmt->close();
        
            // Fermeture de la connexion à la base de données
            $db->close();
        
            // Redirection ou message de succès
            echo "L'image a été supprimée.";
            // ou header("Location: votre_page.php");
        }
        
            echo '<div class="container">';
            echo" <h6>Description: </h6>". "<br>";
            echo " <div class='descrip'> <strong> Marque:</strong> " . $row["MARQUE"] ."<br>" ;
            echo "<strong> Modèle: </strong>" . $row["MODELE"] . "<br>";
            echo "<strong> KILOMETRAGES: </strong> " . $row["KILOMETRAGES"] ."<br>" ;
            echo "<strong> TYPE_CARBURANT: </strong>" . $row["TYPE_CARBURANT"] . "<br>";
            echo "<strong> NOMBRE_DE_PLACE: </strong>" . $row["NOMBRE_DE_PLACE"] . "<br>";
            echo "<strong> PRIX: </strong>" . $row["PRIX"] . "<br>" ;
           
           
                
            }
        } 
        
    }
elseif (isset($_POST["Afficher"])) {
 
   

    $sql = "SELECT * FROM gestion";
    $resultat = $connexion->query($sql);
    
    // Vérification du résultat de la requête
    if ($resultat->num_rows > 0) {
        // echo "<h3> Liste de toutes nos voitures </h3>";
       
        while ($row = $resultat->fetch_assoc()) {
             
           
            echo "<div> <img src='images/". htmlspecialchars($row["PHOTO"]). "' class='card-img-top mx-auto d-block' alt='Photo de la Voitures' style='max-width: 600px; height: 400px;'> </div>";
            echo " <input class='supr' type='Button' name='supprimer' value='supprimer'>";
           
            echo" <h6>Description: </h6>". "<br>";
            echo "<strong> Marque:</strong> " . $row["MARQUE"] ."<br>" ;
            echo "<strong> Modèle: </strong>" . $row["MODELE"] . "<br>";
            echo "<strong> KILOMETRAGES: </strong> " . $row["KILOMETRAGES"] ."<br>" ;
            echo "<strong> TYPE_CARBURANT: </strong>" . $row["TYPE_CARBURANT"] . "<br>";
            echo "<strong> NOMBRE_DE_PLACE: </strong>" . $row["NOMBRE_DE_PLACE"] . "<br>";
            echo "<strong> PRIX: </strong>" . $row["PRIX"] . "<br>";
           
           
          
            // echo '<img class="imagesortie" src="data:image/jpg;base64,' . base64_encode($row['PHOTO']) . '" /><br>';
          
        }
        echo "<button class='bouttonretour' type='submit' name='retour' > Précedent</button>";
    } 
    

    else {
       
        echo "Il n'ya aucune voiture dans la base données";
        echo "<button class='bouttonretour' type='submit' name='retour' > Précedent</button>";
    }



}







 
 




