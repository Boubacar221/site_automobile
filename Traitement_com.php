
<?php

$serveur = "localhost";
 $utilisateur = "root";
 $motDePasse = "";
 $nomDeLaBase = "automobile";
 
 $connexion = mysqli_connect($serveur, $utilisateur, $motDePasse, $nomDeLaBase);
 
 if (!$connexion) {
     die("La connexion à la base de données a échoué : " . mysqli_connect_error());
 }
 
 
 if (isset($_POST['envoie'])) {
   
        $Nom = $_POST['Nom'];
        $Email = $_POST['Email'];
        $Commentaire = $_POST['Commentaire'];
        
    
     
     $requeteEnregistrement = "INSERT INTO Commentaires (Nom, Email, Commentaire) VALUES ('$Nom', '$Email', '$Commentaire')";
     mysqli_query($connexion, $requeteEnregistrement);
 
     echo " Message envoyé avec succès! '<br>";
    
    
 } 
 elseif (isset($_POST['afficher'])) {
   
    $Nom = $_POST['Nom'];
    $Email = $_POST['Email'];
    $Commentaire = $_POST['Commentaire'];
    
 $requeteEnregistrement = "Select * FROM commentaires";
 $resultat = $connexion->query($requeteEnregistrement);
 
 if ($resultat->num_rows > 0) {
    echo" <h1>Forum et Avis clients </h1> "; "<br>"; "<br>";
   
    echo "<table border='1'>
    <tr>
        <th>Nom</th>
        <th>Email</th>
        <th>Commentaire</th>
        
        
        </tr>";
   
      
        
   

while ($row = mysqli_fetch_assoc($resultat)) {
echo "<tr>
        <td>{$row['Nom']}</td>
        <td>{$row['Email']}</td>
        <td>{$row['Commentaire']}</td>
       
       
      </tr>";
}

echo "</table>";


// Libérer le résultat de la requête
mysqli_free_result($resultat);
}
        
} 
else {
   
    echo "Aucun commentaire dans la base de données";
}
// mysqli_query($connexion, $requeteEnregistrement);

 