<!DOCTYPE html>
<html lang="">

<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>portfolio-gabriel</title>
    <link rel="stylesheet" href="css/stylesheet.css" />

    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.0.0/jquery.min.js"></script>
    <script src="js/accordeon.js"></script>

    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-modal/0.9.1/jquery.modal.min.js"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/jquery-modal/0.9.1/jquery.modal.min.css" />
    <link rel="stylesheet" href="https://unpkg.com/swiper/swiper-bundle.min.css" />


</head>

<body>
    <div class="barmenu">
        <a href="" class="logo">
            <p>gabriel</p>
        </a>

        <img class="iconmenu" src="medias/images/iconmenu.png" tabindex="0" />
        <nav class="menu" id="menu">
            <ul>
                <li>
                    <a href="#home"><img src="medias/images/home.png" class="icon_menu" width="21" /><br />Home</a>
                </li>
                <li>
                    <a href="#apropos"><img src="medias/images/apropos.png" class="icon_menu" width="21" /><br />A propos</a>
                </li>
                <li>
                    <a href="#competence"><img src="medias/images/competence.png" class="icon_menu" width="21" /><br />Compétences</a>
                </li>
                <li>
                    <a href="#service"><img src="medias/images/service.png" class="icon_menu" width="21" /><br />Services</a>
                </li>
                <li>
                    <a href="#portfolio"><img src="medias/images/portfolio.png" class="icon_menu" width="21" /><br />portfolio</a>
                </li>
                <li>
                    <a href="#contact"><img src="medias/images/contact.png" class="icon_menu" width="21" /><br />Me-contacter</a>
                </li>
            </ul>
            <div class="btnfermer"><img src="medias/images/close.png" /></div>
        </nav>
    </div>


    <div class="rs">
        <div>
            <a href="https://www.linkedin.com/feed/?trk=homepage-basic_google-one-tap-submit"><img src="medias/images/iconlink.png" alt="linkedin" /></a>
        </div>
        <div>
            <a href="https://www.instagram.com/"><img src="medias/images/iconinsta.png" alt="instagram" /></a>
        </div>
        <div>
            <a href="https://www.facebook.com/"><img src="medias/images/iconface.png" alt="instagram" /></a>
        </div>
    </div>
    <main class="conteneur" id="home">
        <section class="section_home">
            <div class="conteneur_home">
                <div class="text_home">
                    <h1 class="titre_prenom">Gabriel</h1>
                    <h3 class="titre_secondaire">Web designer freelance</h3>
                    <p>
                        Je vous accompagne dans la creation de votre<br />
                        image de marque et dans la création de votre<br />
                        site web
                    </p>

                    <a href="#contact">
                        <div class="btncontact">
                            contacter-moi<img src="medias/images/flechecontact.png" />
                        </div>
                    </a>
                </div>
            </div>
        </section>
        <section class="section_apropos" id="apropos">
            <div class="conteneur_apropos">
                <h2>A propos de moi</h2>
                <h3>Introduction</h3>
                <img src="medias/images/imagedemoi.png" class="imagedemoi" />
                <p class="text_apropos">
                    Je vous accompagne dans la creation de votre image de marque et dans
                    la création de votre site web Je vous accompagne dans la creation de
                    votre image de marque
                </p>
                <div class="conteur">
                    <div class="conteur1">
                        <p class="chiffre">02 +</p>
                        <p>Annes <br />accompag</p>
                    </div>
                    <div class="conteur2">
                        <p class="chiffre">05 +</p>
                        <p>
                            enrteprise<br />
                            accompag
                        </p>
                    </div>
                    <div class="conteur3">
                        <p class="chiffre">05 +</p>
                        <p>
                            Projret<br />
                            accompag
                        </p>
                    </div>
                </div>

                <a href="lien_cv_pdf">
                    <div class="btn_cv">Télécharger mon CV</div>
                </a>
            </div>
        </section>

        <section class="section_competence" id="competence">
            <div class="conteneur_competence">
                <h2>Compétence</h2>
                <h3>Mon niveau</h3>
                <div class="accordeon">

                    <div class="competence1">
                        <img src="medias/images/iconui.png" class="ui" />
                        <div>
                            <h4>Ux/Ui</h4>
                            <p>Conception du design</p>
                        </div>
                        <img class="flechecompetence1" src="medias/images/flechehaut.png" />
                    </div>

                    <div class="text_bar">
                        <div class="text1">
                            <p>Wireframe</p>
                        </div>
                        <div class="nombre1">90%</div>
                        <div class="bar1">
                            <img src="medias/images/bar3.png" />
                        </div>

                        <div class="text2">
                            <p>Expérience utilisateur</p>
                        </div>
                        <div class="nombre1">80%</div>
                        <div class="bar1">
                            <img src="medias/images/bar3.png" />
                        </div>

                        <div class="text3">
                            <p>design</p>
                        </div>
                        <div class="nombre1">90%</div>
                        <div class="bar1">
                            <img src="medias/images/bar3.png" />
                        </div>
                    </div>



                    <div class="competence2">
                        <img class="integrationimg" src="medias/images/iconintegration.png" />
                        <div>
                            <h4>Integration</h4>
                            <p>Intégration de votre site web</p>
                        </div>
                        <img src="medias/images/flechebas.png" class="flechecompetence2" />
                    </div>

                    <div class="text_bar2">
                        <div class="text1">
                            <p>Wireframe</p>
                        </div>
                        <div class="nombre1">90%</div>
                        <div class="bar1"></div>
                        <div class="baropacite1"></div>
                        <div class="text2">
                            <p>Expérience utilisateur</p>
                        </div>
                        <div class="nombre2">80%</div>
                        <div class="bar2"></div>
                        <div class="baropacite2"></div>
                        <div class="text3">
                            <p>design</p>
                        </div>
                        <div class="nombre3">90%</div>
                        <div class="bar3"></div>
                        <div class="baropacite3"></div>
                    </div>


                    <div class="competence3">
                        <img class="mark" src="medias/images/iconmark.png" />
                        <div>
                            <h4>Marketing</h4>
                            <p>Publicité digital</p>
                        </div>
                        <img src="medias/images/flechebas.png" class="flechecompetence3" />
                    </div>

                    <div class="text_bar3">
                        <div class="text1">
                            <p>Wireframe</p>
                        </div>
                        <div class="nombre1">90%</div>
                        <div class="bar1"></div>
                        <div class="baropacite1"></div>
                        <div class="text2">
                            <p>Expérience utilisateur</p>
                        </div>
                        <div class="nombre2">80%</div>
                        <div class="bar2"></div>
                        <div class="baropacite2"></div>
                        <div class="text3">
                            <p>design</p>
                        </div>
                        <div class="nombre3">90%</div>
                        <div class="bar3"></div>
                        <div class="baropacite3"></div>
                    </div>
                </div>
            </div>
        </section>

        <section class="section_service" id="service">
            <div class="conteneur_service">
                <h2>Services</h2>
                <h3>Mes offres</h3>
                <section class="service">
                    <article class="service1">
                        <img class="iconservice" src="medias/images/iconuiservice.png" />
                        <p class="p_service">Ui/Ux<br />Designer</p>
                        <a href="#modal1" rel="modal:open">
                            <p class="voirplusservice">Voir +</p>
                        </a>
                    </article>

                    <article class="service2">
                        <img class="iconservice" src="medias/images/iconintegration.png" />
                        <p class="p_service">Intégration<br />Web</p>
                        <a href="#modal2" rel="modal:open">
                            <p class="voirplusservice">Voir +</p>
                        </a>
                    </article>

                    <article class="service3">
                        <img class="iconservice" src="medias/images/iconbrand.png" />
                        <p class="p_service">Branding<br />Designer</p>
                        <a href="#modal3" rel="modal:open">
                            <p class="voirplusservice">Voir +</p>
                        </a>
                    </article>
                </section>
            </div>
        </section>
        <section class="section_portfolio" id="portfolio">
            <div class="conteneur_portfolio">
                <h2>Portfolio</h2>
                <h3>Mes derniers réalisation</h3>
                <div class="swiper-container mySwiper">
                    <div class="swiper-wrapper">
                        <div class="swiper-slide">
                            <img src="medias/images/project1.png" class="imageprojet" />

                            <div class="flechegauche">
                                <img src="medias/images/flechegauche.png" />
                            </div>
                            <div class="flechedroite">
                                <img src="medias/images/flechedroite.png" />
                            </div>
                            <h4>Minimalist web</h4>
                            <p>
                                Je vous accompagne dans la creation de votre<br />
                                image de marque et dans la création de votre<br />
                                site web
                            </p>

                            <a href="lien_cv_pdf">
                                <div class="btn_portfolio">Voir +</div>
                            </a>
                        </div>
                        <div class="swiper-slide">
                            <img src="medias/images/project1.png" class="imageprojet" />

                            <div class="flechegauche">
                                <img src="medias/images/flechegauche.png" />
                            </div>
                            <div class="flechedroite">
                                <img src="medias/images/flechedroite.png" />
                            </div>
                            <h4>Minimalist web</h4>
                            <p>
                                Je vous accompagne dans la creation de votre<br />
                                image de marque et dans la création de votre<br />
                                site web
                            </p>

                            <a href="lien_cv_pdf">
                                <div class="btn_portfolio">Voir +</div>
                            </a>
                        </div>
                        <div class="swiper-slide">
                            <img src="medias/images/project1.png" class="imageprojet" />

                            <div class="flechegauche">
                                <img src="medias/images/flechegauche.png" />
                            </div>
                            <div class="flechedroite">
                                <img src="medias/images/flechedroite.png" />
                            </div>
                            <h4>Minimalist web</h4>
                            <p>
                                Je vous accompagne dans la creation de votre<br />
                                image de marque et dans la création de votre<br />
                                site web
                            </p>

                            <a href="lien_cv_pdf">
                                <div class="btn_portfolio">Voir +</div>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <section class="section_contact" id="contact">
            <div class="conteneur_contact">
                <h2>Me-contacter</h2>
                <h3>Envoyer moi un message</h3>
                <img src="medias/images/mobil.png" /><br />

                <div class="mobil">
                    <h4>Appeller-moi</h4>
                    <p>0621484617</p>
                </div>
                <img src="medias/images/localisation.png" />

                <div class="localisation">
                    <h4>Localisation</h4>
                    <p>Couiza-Aude-France</p>
                </div>
                <?php

//1-je recupere les donnees envoyees par le formulaire
// nom
// email
// tel
$nom = $_POST['nom'];
$email = $_POST['email'];
$tel = $_POST['tel'];
$message = $_POST['message'];

// traite l'envoi que si le formulaire a ete sounis cad si les champs existeent

if(isset($nom) && isset($email) && isset($message)){
    if($nom=="" || $email=="" || $message==""){
    echo "<h3>Merci de remplir tous les champs obligatoire</h3>";
}else{
    //3- on constitue le corp du mail
    $corps = "bonjour, vous vennez de recevoir un email via le formulaire de contact de votre portfolio. Nom et prenom de la personne: " .$nom.", son email: ".$email.", son message: ".$message.;
    
//4- envoi du mail
// 4-1 si l'envoie echoue, indiquer a l'utilisateur de reessayer plus tard 
// 4-2 sinom afficher le message suivant ;merci pour votre message!
    if(!mail("g.belkhirat@protonmail.com","message via le portfolio",$coprs)){
        echo "merci ressayer plus tard";
    }else{
        echo "merci pour votre message";
    }
}



//2-verifier si les champs sont vides
// 2-1 si les champs sont vide, on n'envoie pas le mail et on indique a l'utilisateur de remplir tous les champs
// 2-2 sinom on passe a l'etape suivante

    
}

?>
                <form action="index.php#contact" method="post">
                    <p><input type="text" placeholder="Nom" name="nom" /></p>
                    <p><input type="email" placeholder="Email" name="email" /></p>
                    <p><input type="tel" placeholder="Mobil" name="tel" /></p>
                    <textarea placeholder="Message" name="message"></textarea>
                    <p><input type="submit" value="Envoyer votre message" /></p>
                </form>
            </div>
        </section>
    </main>
    <footer>
        <div class="conteneur_footer">
            <h1 class="prenom_footer">Gabriel</h1>
            <h3 class="titre_secondaire_footer">Web designer freelance</h3>
            <a href="#service">
                <p>Services</p>
            </a>
            <a href="#portfolio">
                <p>Portfolio</p>
            </a>
            <a href="#contact">
                <p>Me-contacter</p>
            </a>
            <div class="rs_footer">
                <div>
                    <a href="https://www.linkedin.com/feed/?trk=homepage-basic_google-one-tap-submit"><img src="medias/images/iconlinkblanc.png" alt="linkedin" /></a>
                </div>
                <div>
                    <a href="https://www.instagram.com/"><img src="medias/images/iconinstablanc.png" alt="instagram" /></a>
                </div>
                <div>
                    <a href="https://www.facebook.com/"><img src="medias/images/iconfaceblanc.png" alt="instagram" /></a>
                </div>
            </div>
        </div>
    </footer>

    <div class="modal" id="modal1">
        <ul>
            <li>lorem ipsum</li>
            <li>lorem ipsum</li>
            <li>lorem ipsum</li>
        </ul>
    </div>
    <div class="modal" id="modal2">
        <ul>
            <li>lorem ipsum</li>
            <li>lorem ipsum</li>
            <li>lorem ipsum</li>
        </ul>
    </div>
    <div class="modal" id="modal3">
        <ul>
            <li>lorem ipsum</li>
            <li>lorem ipsum</li>
            <li>lorem ipsum</li>
        </ul>
    </div>

    <div class="fondimage"></div>
    <div class="fond2"></div>

    <!-- Swiper JS -->
    <script src="https://unpkg.com/swiper/swiper-bundle.min.js"></script>

    <!-- Initialize Swiper -->
    <script>
        var swiper = new Swiper(".mySwiper", {
            navigation: {
                nextEl: ".swiper-button-next",
                prevEl: ".swiper-button-prev",
            },
        });

    </script>
</body>

</html>
