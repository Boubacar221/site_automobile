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
   
        $email = $_POST['email'];
        $Users = $_POST['Nom_utilisateur'];
        $Password = $_POST['mot_de_passe'];
        
     
     $requeteEnregistrement = "INSERT INTO administrateurs (email, Nom_utilisateur, mot_de_passe) VALUES ('$email', '$Users', '$Password')";
     mysqli_query($connexion, $requeteEnregistrement);
 
     echo " Enregistrement réussi! '<br>";
    

 } 

 
 elseif ($connexion->connect_error) {
     die("Échec de la connexion à la base de données : " . $connexion->connect_error);
 }
 
 // Récupération des données du formulaire
 elseif (isset($_POST['connexion'])) {
    $email = $_POST['email'];
 $utilisateur = $_POST['Nom_utilisateur'];
 $password = $_POST['mot_de_passe'];

 
 // Requête SQL pour vérifier l'existence de l'utilisateur
 $sql = "SELECT * FROM administrateurs WHERE email='$email'  AND Nom_utilisateur='$utilisateur' AND mot_de_passe='$password'";
 $resultat = $connexion->query($sql);
 
 // Vérification du résultat de la requête
 if ($resultat->num_rows > 0) {
     // Utilisateur trouvé, accès autorisé
     echo "Accès autorisé.";
     header("Location: Accueil_admin.php");
     exit();
 } else {
     // Utilisateur non trouvé, accès refusé
     echo "Accès refusé.";
}
 }
 // Fermeture de la connexion à la base de données
 $connexion->close();


 
 




