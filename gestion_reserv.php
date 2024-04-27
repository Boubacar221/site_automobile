<?php
// Connexion à la base de données

$host = 'localhost'; // ou votre adresse de serveur
$dbname = 'automobile';
$username = 'root';
$password = '';
$dsn = "mysql:host=$host;dbname=$dbname;charset=UTF8";


try {
   
    $conn = new PDO($dsn, $username, $password);
    // Définir le mode d'erreur de PDO à exception
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    // Récupérer la valeur sélectionnée du formulaire
    $optionSelectionnee = $_POST['MARQUE'];
    $optionservice = $_POST['SERVICE_RECHERCHER'];
    $optionlieu = $_POST['LIEU'];
    $optiondate = $_POST['DATE_RESERVATION'];
    // Préparer la requête SQL
    $sql = "INSERT INTO reservation_auto (MARQUE, SERVICE_RECHERCHER,  LIEU, DATE_RESERVATION) VALUES (:optionSelectionnee, :optionservice, :optionlieu, :optiondate)";

    $stmt = $conn->prepare($sql);

    // Lier le paramètre à la valeur récupérée
    $stmt->bindValue(':optionSelectionnee', $optionSelectionnee);
    $stmt->bindValue(':optionservice', $optionservice);
    $stmt->bindValue(':optionlieu', $optionlieu);
    $stmt->bindValue(':optiondate', $optiondate);

    // Exécuter la requête
    $stmt->execute();

    echo "Option insérée avec succès!";
} catch(PDOException $e) {
    echo "Erreur : " . $e->getMessage();
}

// if (isset($_POST['Reserver'])) {

//     header('Location: Identification.php');
//     if (isset($_POST['Confirmer'])){
//         $NOM = $_POST['NOM'];
//         $TELEPHONE = $_POST['TELEPHONE'];
//         $EMAIL = $_POST['EMAIL'];
//         $sql = "INSERT INTO reservation_auto (NOM, TELEPHONE, EMAIL ) VALUES ('$NOM', '$TELEPHONE', '$EMAIL')";
//         mysqli_query($connexion, $requeteEnregistrement);
 
//         echo " Enregistrement réussi! '<br>";
       
   
//     } 
   
    
//     elseif ($connexion->connect_error) {
//         die("Échec de la connexion à la base de données : " . $connexion->connect_error);
//     }
//     }