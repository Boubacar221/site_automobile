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
        <link rel="stylesheet" href="https://kit.fontawesome.com/votre_kit_fontawesome.css">
    </head>
    <body id="page-top">
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
                        <li class="nav-item"><a class="nav-link" href="#services">Services</a></li>
                        <li class="nav-item"><a class="nav-link" href="#portfolio">Nos voitures</a></li>
                        <li class="nav-item"><a class="nav-link" href="A propos.php">A propos</a></li>
                        
                        <li class="nav-item"><a class="nav-link" href="contact.php">Contact</a></li>
                        <li class="nav-item"><a class="nav-link" href="Gestion.php">Admin</a></li>
                        
                    </ul>
                </div>
            </div>
        </nav>
        
        <!-- Masthead-->
        <header class="masthead">
            <div class="container">
            
                <div class="masthead-subheading">Bougez au rythme de la dernière Technologie automobile</div>
                <!-- <div class="masthead-heading text-uppercase"> Parking de vos rêves</div> -->
                

                
            </div>
            <div>
                <form method="POST" name="gestionaccueil" id="searchForm" class="reserv" action="gestion_reserv.php" >
                     <Select class="taille_reserv" name="MARQUE" id="bolides" >
                            <option value="Mercedez Benz">Mercedez Benz</option>
                            <option value="Ferrari">Ferrari</option>
                            <option value="Lamborghini">Lamborghini</option>
                            <option value="Toyota">Toyota</option>
                            <option value="Chevrolet">Chevrolet</option>

                     </Select>
                     <select class="taille_reserv" name="SERVICE_RECHERCHER" id="Location">
                        <option value="Course rapide">Course rapide</option>
                        <option value="course Aéroport">course Aéroport </option>
                        <option value="Location journalière">Location journalière</option>
                        <option value="Location cérémonie<">Location cérémonie</option>
                        <option value="Autres">Autres</option>

                     </select>
                     <select class="taille_reserv" name="LIEU" id="Location">
                        <option value="Dakar">Dakar</option>
                        <option value="AIBD">AIBD</option>
                        <option value="Saint luis">Saint luis</option>
                        <option value="Mbour">Mbour</option>
                        <option value="Saly Portugual">Saly Portugual</option>

                     </select>
                    <input class="taille_reserv" type="datetime-local" name="DATE_RESERVATION">
                    <input class="envoie" type="submit" name="Reserver" value="Reserver">

                </form>
            </div> </br>
            <!-- <a class="btn btn-primary btn-xl text-uppercase" href="#services">En savoir plus</a> -->
        </header>
        
        <!-- <section class="page-section" id="services">
            <div class="container">
                <div class="text-center">
                    <h2 class="section-heading text-uppercase">Services</h2>
                    <h3 class="section-subheading text-muted">Decouvrez nos merveilles</h3>
                </div>
                
                <img class="iconesservices1" src="images/icons8-échange-de-clés-94.png" alt="">
                <img class="iconesservices2" src="images/icons8-vente-de-voitures-48.png" alt="">
                <img class="iconesservices3" src="images/icons8-chauffeur-48.png" alt="">
                <div class="row text-center">
                    <div class="col-md-4">
                       <img src="" alt="">
                        <h4 class="my-3">Location de voitures de luxe</h4>
                        <p class="text-muted">Explorez la liberté de voyager à votre propre rythme avec notre flotte de voitures de location haut de gamme. Que ce soit pour un voyage d'affaires ou des vacances en famille, nous avons le véhicule parfait pour répondre à vos besoins.</p>
                    </div>
                    <div class="col-md-4">
                       
                        <h4 class="my-3">Vente de voitures de luxe</h4>
                        <p class="text-muted">Découvrez la voiture de vos rêves chez nous ! Parcourez notre sélection impressionnante de véhicules de qualité, allant des voitures compactes aux SUV spacieux et luxueux. Avec des options de financement flexibles et des offres spéciales, trouver la voiture parfaite pour votre style de vie et votre budget n'a jamais été aussi facile.  </p>
                    </div>
                    <div class="col-md-4">
                        
                        <h4 class="my-3">Récrutement chauffeur Professionel</h4>
                        <p class="text-muted">Vous êtes passionné par la conduite et vous recherchez une opportunité excitante dans le domaine du transport ? Rejoignez notre équipe en tant que chauffeur professionnel et faites partie d'une entreprise dynamique et en pleine croissance ! </p>
                    </div>
                </div>
            </div>
        </section>  -->
        <!-- Portfolio Grid-->
        <section class="page-section bg-light" id="portfolio">
            <div class="container">
                <div class="text-center">
                    <!-- <h2 class="section-heading text-uppercase">Nos merveilles </h2>
                    <h3 class="section-subheading text-muted">Parcourez ces variétés et procurer vous en un seul clic!</h3>
                </div> -->
                <div class="row">
                    <div class="col-lg-4 col-sm-6 mb-4">
                        <!-- Portfolio item 1-->
                        <div class="portfolio-item">
                            <a class="portfolio-link" data-bs-toggle="modal" href="#portfolioModal1">
                                <div class="portfolio-hover">
                                    <div class="portfolio-hover-content"><i class="fas fa-plus fa-3x"></i></div>
                                </div>
                                <img class="img-fluid" src="images/urus-lamborghini.jpg" alt="..." />
                                <img class="img-fluid" src="images/Range rover.jpg" alt="..." />
                            </a>
                            <div class="portfolio-caption">
                                <div class="portfolio-caption-heading">Marque:lamborghini </div>
                                <div class="portfolio-caption-subheading text-muted">Description: urus, 500km/h
Gazoil
Bleue</div>
                                <input class="boutton" type="button" name="action" value="Louer">
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-sm-6 mb-4">
                        <!-- Portfolio item 2-->
                        <div class="portfolio-item">
                            <a class="portfolio-link" data-bs-toggle="modal" href="#portfolioModal2">
                                <div class="portfolio-hover">
                                    <div class="portfolio-hover-content"><i class="fas fa-plus fa-3x"></i></div>
                                </div>
                                <img class="img-fluid" src="images/Ferrari0.jpg" alt="..." />
                                <img class="img-fluid" src="images/Buggati7.jpg" alt="..." />
                                
                            </a>
                            <div class="portfolio-caption">
                                <div class="portfolio-caption-heading">Marque: Ferrari</div>
                                <div class="portfolio-caption-subheading text-muted">Description:
                                     500km/h Gazoil Grise </div>
                                <input class="boutton" type="button" name="action" value="Louer">
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-sm-6 mb-4">
                        <!-- Portfolio item 2-->
                        <div class="portfolio-item">
                            <a class="portfolio-link" data-bs-toggle="modal" href="#portfolioModal2">
                                <div class="portfolio-hover">
                                    <div class="portfolio-hover-content"><i class="fas fa-plus fa-3x"></i></div>
                                </div>
                                <img class="img-fluid" src="images/Lamborghini3.jpg" alt="..." />
                                <img class="img-fluid" src="images/ferraribest.jpg" alt="..." />
                            </a>
                            <div class="portfolio-caption">
                                <div class="portfolio-caption-heading">Marque: Lamborghini</div>
                                <div class="portfolio-caption-subheading text-muted">Description</div>
                                <input class="boutton" type="button" name="action" value="Louer">
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-sm-6 mb-4">
                        <!-- Portfolio item 3-->
                        <div class="portfolio-item">
                            <a class="portfolio-link" data-bs-toggle="modal" href="#portfolioModal3">
                                <div class="portfolio-hover">
                                    <div class="portfolio-hover-content"><i class="fas fa-plus fa-3x"></i></div>
                                </div>
                                <img class="img-fluid" src="images/Bugatticoupe.jpg" alt="..." />
                            </a>
                            <div class="portfolio-caption">
                                <div class="portfolio-caption-heading">Marque: Bugatti</div>
                                <div class="portfolio-caption-subheading text-muted">Description</div>
                                <input class="boutton" type="button" name="action" value="Louer">
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-sm-6 mb-4 mb-lg-0">
                        <!-- Portfolio item 4-->
                        <div class="portfolio-item">
                            <a class="portfolio-link" data-bs-toggle="modal" href="#portfolioModal4">
                                <div class="portfolio-hover">
                                    <div class="portfolio-hover-content"><i class="fas fa-plus fa-3x"></i></div>
                                </div>
                                <img class="img-fluid" src="images/Ferrari.jpeg" alt="..." />
                            </a>
                            <div class="portfolio-caption">
                                <div class="portfolio-caption-heading">Marque: Bugatti</div>
                                <div class="portfolio-caption-subheading text-muted">Description</div>
                                <input class="boutton" class="boutton" type="button" name="action" value="Louer">
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-sm-6 mb-4 mb-sm-0">
                        <!-- Portfolio item 5-->
                        <div class="portfolio-item">
                            <a class="portfolio-link" data-bs-toggle="modal" href="#portfolioModal5">
                                <div class="portfolio-hover">
                                    <div class="portfolio-hover-content"><i class="fas fa-plus fa-3x"></i></div>
                                </div>
                                <img class="img-fluid" src="images/Buggati7.jpg" alt="..." />
                            </a>
                            <div class="portfolio-caption">
                                <div class="portfolio-caption-heading">Mercedez Benz</div>
                                <div class="portfolio-caption-subheading text-muted">Description</div>
                                <input class="boutton" type="button" name="action" value="Louer">
                            </div>
                        </div>
                        <div class="portfolio-item">
                            <a class="portfolio-link" data-bs-toggle="modal" href="#portfolioModal5">
                                <div class="portfolio-hover">
                                    <div class="portfolio-hover-content"><i class="fas fa-plus fa-3x"></i></div>
                                </div>
                                <img class="img-fluid" src="images/ferraribest.jpg" alt="..." />
                            </a>
                            <div class="portfolio-caption">
                                <div class="portfolio-caption-heading">Mercedez Benz</div>
                                <div class="portfolio-caption-subheading text-muted">Description</div>
                                <input class="boutton" type="button" name="action" value="Louer">
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-sm-6">
                        <!-- Portfolio item 6-->
                        <div class="portfolio-item">
                            <a class="portfolio-link" data-bs-toggle="modal" href="#portfolioModal6">
                                <div class="portfolio-hover">
                                    <div class="portfolio-hover-content"><i class="fas fa-plus fa-3x"></i></div>
                                </div>
                                <img class="img-fluid" src="images/Range rover.jpg" alt="..." />
                            </a>
                            <div class="portfolio-caption">
                                <div class="portfolio-caption-heading">Ferrari </div>
                                <div class="portfolio-caption-subheading text-muted">Description</div>
                                <input class="boutton" type="button" name="action" value="Louer">
                            </div>
                            
                        </div>
                        <div class="portfolio-item">
                            <a class="portfolio-link" data-bs-toggle="modal" href="#portfolioModal6">
                                <div class="portfolio-hover">
                                    <div class="portfolio-hover-content"><i class="fas fa-plus fa-3x"></i></div>
                                </div>
                                <img class="img-fluid" src="images/lamborghini3.jpg" alt="..." />
                                <img class="img-fluid" src="images/lamborghini3.jpg" alt="..." />
                            </a>
                            <div class="portfolio-caption">
                                <div class="portfolio-caption-heading">Ferrari </div>
                                <div class="portfolio-caption-subheading text-muted">Description</div>
                                <input class="boutton" type="button" name="action" value="Louer">
                            </div>
                            
                            
                        </div>
                    </div>
                </div>
                </div>
          
        </section>
        <h3 class="partenaire">Nos partenaires</h3>
        <img class="logobolides" src="images/logo-marque-voiture-905x509.jpg" alt="">
        <img class="logobolides" src="images/Top-15-Luxury-Car-Brands.png" alt="">
        <!-- About-->
       
        <!-- Team-->
        
        
  
        <section class="page-section" id="contact">
            <div class="container">
                <div class="text-center">
                <div>
                
                <a  class="numero"href="mailto:abouabkrdiallo111@gmail.com">Nous contactez !</a>
                <a href="#">confidentialité</a> 
                <a href="#">Politique d'utilisation</a></br>
                
                
                
                </div>
              <div>
        <form class="contactme" method="post" action="Traitement_com.php">
            <input type="text" name="Nom" placeholder="Nom">
            <input type="email" name="Email" placeholder="Email">
            <textarea  name="Commentaire" placeholder="Nous laissez un commentaire"></textarea>
            <input name="envoie" type="submit" value="Envoyer">
            <input name="afficher" type="submit" value="Afficher">
        </form>
                </div>
                
                    
<style>
   
    
    .contactme {
        width: 300px;
        padding: 20px;
        background: #f9f9f9;
        border-radius: 8px;
        box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
        transition: transform 0.3s ease-in-out;
        float: right;
        margin-top: 20px;
        
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
                    
            
        </section>
        
        </style>

   

    <!-- Remplacer YOUR_API_KEY par votre clé API Google Maps -->
    <img src="https://maps.app.goo.gl/W5euF5caAw4F2vG8A" alt="">
    
     
  
        <!-- Footer-->
        <footer class="footer py-4">
            <div class="container">
                <div class="row align-items-center">
                    <div class="col-lg-4 text-lg-start">Copyright &copy; Diallo AUTOMOBILE 2023</div>
                    <div class="col-lg-4 my-3 my-lg-0">
                        <a class="btn btn-dark btn-social mx-2" href="#!" aria-label="Twitter"><i class="fab fa-twitter"></i></a>
                        <a class="btn btn-dark btn-social mx-2" href="#!" aria-label="Facebook"><i class="fab fa-facebook-f"></i></a>
                        <a class="btn btn-dark btn-social mx-2" href="https://www.linkedin.com/in/boubacardiallo-informatique-solutions/" aria-label="LinkedIn"><i class="fab fa-linkedin-in"></i></a>
                    </div>
                    <div class="col-lg-4 text-lg-end">
                        
                        <a class="link-dark text-decoration-none" href="#!">Termes d'utilisation</a>
                    </div>
                </div>
            </div>
        </footer>
        <!-- Portfolio Modals-->
        <!-- Portfolio item 1 modal popup-->
        <div class="portfolio-modal modal fade" id="portfolioModal1" tabindex="-1" role="dialog" aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="close-modal" data-bs-dismiss="modal"><img src="assets/img/close-icon.svg" alt="Close modal" /></div>
                    <div class="container">
                        <div class="row justify-content-center">
                            <div class="col-lg-8">
                                <div class="modal-body">
                                    <!-- Project details-->
                                    <h4 class="text-uppercase">Marque: Lamborghini</h4>
                                    <p class="item-intro text-muted">Modèle:Irus</p>
                                   
                                    <img class="img-fluid d-block mx-auto" src="images/urus.jpg" alt="..." />
                                    <div>
                                    <input class="effetboutton" type="submit" name="Achat" value="Acheter">
                                    <input class="effetboutton"  type="submit" name="Reservation" value="Reserver">
                                    </div>
                                    <button class="btn btn-primary btn-xl text-uppercase" data-bs-dismiss="modal" type="button">
                                        <i class="fas fa-xmark me-1"></i>
                                      
                                       Retour
                                    </button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Portfolio item 2 modal popup-->
        <div class="portfolio-modal modal fade" id="portfolioModal2" tabindex="-1" role="dialog" aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="close-modal" data-bs-dismiss="modal"><img src="assets/img/close-icon.svg" alt="Close modal" /></div>
                    <div class="container">
                        <div class="row justify-content-center">
                            <div class="col-lg-8">
                                <div class="modal-body">
                                    <!-- Voitures details-->
                                    <h4 class="text-uppercase">Marque: Ferrari</h4>
                                    <p class="item-intro text-muted">Modèle: Electrique</p>
                                    <img class="img-fluid d-block mx-auto" src="images/ferrari_purosangue_7.jpg" alt="..." />
                                    <img class="img-fluid d-block mx-auto" src="images/Lamboirus.jpg" alt="..." />
                                    <div>
                                    <input class="effetboutton" type="submit" name="Achat" value="Acheter">
                                    <input class="effetboutton"  type="submit" name="Reservation" value="Reserver">
                                    </div>
                                    <button class="btn btn-primary btn-xl text-uppercase" data-bs-dismiss="modal" type="button">
                                        <i class="fas fa-xmark me-1"></i>
                                        Retour
                                    </button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        
        <div class="portfolio-modal modal fade" id="portfolioModal3" tabindex="-1" role="dialog" aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="close-modal" data-bs-dismiss="modal"><img src="assets/img/close-icon.svg" alt="Close modal" /></div>
                    <div class="container">
                        <div class="row justify-content-center">
                            <div class="col-lg-8">
                                <div class="modal-body">
                                    <!-- Voitures details-->
                                    <h4 class="text-uppercase">Marque: Ferrari</h4>
                                    <p class="item-intro text-muted">Description de la Ferrari Enzo
La Ferrari Enzo est un modèle de voiture de sport qui est puissante, rapide et esthétique. La Ferrari Enzo a un plancher en fibre ultra-léger et résistant, qui a su parfaire un équilibre optimal. Avec ses lignes complexes et anguleuses, la Ferrari Enzo est un hymne à l’aérodynamisme, et semble fendre l’air.

Les dimensions de ce véhicule sont de : 

1 150 mm de hauteur
4 4710 mm de longueur
2 040 mm de largeur  </p>
                                    <img class="img-fluid d-block mx-auto" src="images/Ferrari0.jpg" alt="..." />
                                    <div>
                                            <input class="effetboutton" type="submit" name="Achat" value="Acheter">
                                            <input class="effetboutton"  type="submit" name="Reservation" value="Reserver">
                                        </div>
                                    <button class="btn btn-primary btn-xl text-uppercase" data-bs-dismiss="modal" type="button">
                                        <i class="fas fa-xmark me-1"></i>
                                        
                                        Retour
                                        
                                    </button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Portfolio item 4 modal popup-->
        <div class="portfolio-modal modal fade" id="portfolioModal4" tabindex="-1" role="dialog" aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="close-modal" data-bs-dismiss="modal"><img src="assets/img/close-icon.svg" alt="Close modal" /></div>
                    <div class="container">
                        <div class="row justify-content-center">
                            <div class="col-lg-8">
                                <div class="modal-body">
                                    <!-- Voitures details-->
                                    <h4 class="text-uppercase">Marque: </h4>
                                    <p class="item-intro text-muted">Description: </p>
                                    <img class="img-fluid d-block mx-auto" src="images/Ferrari_488_GTB_2015_4aa4d" alt="..." />
                                    <div>
                                    <input class="effetboutton" type="submit" name="Achat" value="Acheter">
                                    <input class="effetboutton"  type="submit" name="Reservation" value="Reserver">
                                    </div>
                                    <button class="btn btn-primary btn-xl text-uppercase" data-bs-dismiss="modal" type="button">
                                        <i class="fas fa-xmark me-1"></i>
                                        Retour
                                    </button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Portfolio item 5 modal popup-->
        <div class="portfolio-modal modal fade" id="portfolioModal5" tabindex="-1" role="dialog" aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="close-modal" data-bs-dismiss="modal"><img src="assets/img/close-icon.svg" alt="Close modal" /></div>
                    <div class="container">
                        <div class="row justify-content-center">
                            <div class="col-lg-8">
                                <div class="modal-body">
                                    <!-- Voitures details-->
                                    <h4 class="text-uppercase">Marque: </h4>
                                    <p class="item-intro text-muted">Modèle:</p>
                                    <img class="img-fluid d-block mx-auto" src="images/ferrari-458-italia-interieur.jpg" alt="..." />
                                    <div>
                                    <input class="effetboutton" type="submit" name="Achat" value="Acheter">
                                    <input class="effetboutton"  type="submit" name="Reservation" value="Reserver">
                                    </div>
                                    <button class="btn btn-primary btn-xl text-uppercase" data-bs-dismiss="modal" type="button">
                                        <i class="fas fa-xmark me-1"></i>
                                        Retour
                                    </button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Portfolio item 6 modal popup-->
        <div class="portfolio-modal modal fade" id="portfolioModal6" tabindex="-1" role="dialog" aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="close-modal" data-bs-dismiss="modal"><img src="assets/img/close-icon.svg" alt="Close modal" /></div>
                    <div class="container">
                        <div class="row justify-content-center">
                            <div class="col-lg-8">
                                <div class="modal-body">
                                    <!-- Voitures details-->
                                    <h4 class="text-uppercase">Marque: Ferrari_GN </h4>
                                    <p class="item-intro text-muted">Modèle: Ferrari_488_GTB_2015_4aa4d </p>
                                    <img class="img-fluid d-block mx-auto" src="images/Ferrari_488_GTB_2015_4aa4d.jpg" alt="..." />
                                    <div>
                                    <input class="effetboutton" type="submit" name="Achat" value="Acheter">
                                    <input class="effetboutton"  type="submit" name="Reservation" value="Reserver">
                                    </div>
                                    <button class="btn btn-primary btn-xl text-uppercase" data-bs-dismiss="modal" type="button">
                                        <i class="fas fa-xmark me-1"></i>
                                        Retour
                                    </button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Bootstrap core JS-->
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"></script>
        <!-- Core theme JS-->
        <script src="js/scripts.js"></script>
        <!-- * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * *-->
        <!-- * *                               SB Forms JS                               * *-->
        <!-- * * Activate your form at https://startbootstrap.com/solution/contact-forms * *-->
        <!-- * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * *-->
        <script src="https://cdn.startbootstrap.com/sb-forms-latest.js"></script>
    </body>
</html>
