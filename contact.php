<!DOCTYPE html>
<html lang="en">
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
    <body class="orientationcontact"  id="page-top">
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
                        <li class="nav-item"><a class="nav-link" href="index.php">Reservation</a></li>
                        <li class="nav-item"><a class="nav-link" href="contact.php">Contact</a></li>
                    </ul>
                </div>
            </div>
        </nav>
      
        <header class="masthead">
            <!-- <img class="imagescontact" src="images/Buggati7.jpg" alt=""> -->
        </header>
<section>
        
        <h3>Nous contactez!</h3>

<p class="orientationcontact">
    Appelez le 
    <a  href="mailto:abouabkrdiallo111@gmail.com">Service-client </a>.</li><br>
    Nous contactez par Whatssapp
   <a class="numero" href="https://wa.me/+221766301451">+221 76 630 14 51</a> <br>
   Nous contactez par Adresse email
   <a class="numero"href="mailto:abouabkrdiallo111@gmail.com">Nous contactez!</a>
</p>


</section>
<style>
    body {
        display: flex;
        justify-content: center;
        align-items: center;
        height: 100vh;
        margin: 0;
    }
    
    form {
        width: 300px;
        padding: 20px;
        background: #f9f9f9;
        border-radius: 8px;
        box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
        transition: transform 0.3s ease-in-out;
        margin-left: 5rem;
    }
    
    form:hover {
        transform: scale(1.05);
    }
    
    input[type="text"],
    input[type="email"],
    textarea {
        width: 100%;
        padding: 10px;
        margin-top: 8px;
        margin-bottom: 16px;
        border: 1px solid #ccc;
        border-radius: 4px;
        box-sizing: border-box;
    }
    
    input[type="submit"] {
        background-color: #4CAF50;
        color: white;
        padding: 12px 20px;
        border: none;
        border-radius: 4px;
        cursor: pointer;
    }
    
    input[type="submit"]:hover {
        background-color: #45a049;
    }
</style>
<form method="post" action="Traitement_com.php">
    <input type="text" name="Nom" placeholder="Nom">
    <input type="email" name="Email" placeholder="Email">
    <textarea  name="Commentaire" placeholder="Nous laissez un commentaire"></textarea>
    <input name="envoie" type="submit" value="Envoyer">
    <input name="afficher" type="submit" value="Afficher">
</form>


    </body>
</html>