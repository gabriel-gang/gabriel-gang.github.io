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
        <div class="barmenu2">
            <a href="" class="logo">
                <p>gabriel</p>
            </a>

            <img class="iconmenu" src="medias/images/apps.svg" tabindex="0" />
            <nav class="menu" id="menu">
                <ul>
                    <li>
                        <a href="#home"><img src="medias/images/home.svg" class="icon_menu" /><br />Home</a>
                    </li>
                    <li>
                        <a href="#apropos"><img src="medias/images/apropos.svg" class="icon_menu" /><br />A propos</a>
                    </li>
                    <li>
                        <a href="#competence"><img src="medias/images/competence.svg" class="icon_menu" /><br />Compétences</a>
                    </li>
                    <li>
                        <a href="#service"><img src="medias/images/service.svg" class="icon_menu" width="21" /><br />Services</a>
                    </li>
                    <li>
                        <a href="#portfolio"><img src="medias/images/portfolio.svg" class="icon_menu" /><br />portfolio</a>
                    </li>
                    <li>
                        <a href="#contact"><img src="medias/images/contact.svg" class="icon_menu" /><br />Me-contacter</a>
                    </li>
                </ul>
                <div class="btnfermer"><img src="medias/images/close.png" /></div>
            </nav>
        </div>

    </div>



    <main class="conteneur" id="home">

        <section class="section_home">
            <div class="rs">
                <div>
                    <a href="https://www.linkedin.com/in/gabriel-belkhirat-ab47b319a/"><img src="medias/images/link.png" alt="linkedin" /></a>
                </div>
                <div>
                    <a href="https://dribbble.com/"><img src="medias/images/dribbble.png" alt="instagram" /></a>
                </div>
                <div>
                    <a href="https://github.com/gabriel-gang"><img src="medias/images/github.png" alt="instagram" /></a>
                </div>
            </div>
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
                            Contacter-moi<img src="medias/images/contactblanc.png" class="contactblanc" />
                        </div>
                    </a>
                </div>
            </div>
        </section>
        <section class="section_apropos" id="apropos">
            <div class="conteneur_apropos">
                <h2>A propos de moi</h2>
                <h3>Introduction</h3>
                <div class="apropos_flex">
                    <img src="medias/images/image_de_moi.png" class="imagedemoi" />
                    <div class=text_apropos_flex>
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

                        <a href="moncv.pdf">
                            <div type="button" class="btn_cv">Télécharger mon CV</div>
                        </a>
                    </div>
                </div>
            </div>
        </section>

        <section class="section_competence" id="competence">
            <div class="conteneur_competence">
                <h2>Compétence</h2>
                <h3>Mon niveau</h3>
                <div class="accordeon">
                    <div class="col_gauche">

                        <div class="competence_flex_tablette">
                            <div class="flex_comp1">

                                <div class="competence1">
                                    <img src="medias/images/front.svg" class="front" />
                                    <div>
                                        <h4>Frontend</h4>
                                        <p>Intégration de votre site web</p>
                                    </div>
                                    <img class="flechecompetence1" src="medias/images/flechehaut.svg" />
                                </div>

                                <div class="text_bar">

                                    <div class="text1">
                                        <p>Wireframe<span>90%</span></p>

                                    </div>

                                    <div class="bar1">
                                        <div class="barre">
                                            <div class="barre90">
                                            </div>
                                        </div>
                                    </div>

                                    <div class="text2">

                                        <p>Expérience utilisateur<span>80%</span></p>
                                    </div>
                                    <div class="bar1">
                                        <div class="barre">
                                            <div class="barre90">
                                            </div>
                                        </div>
                                    </div>

                                    <div class="text3">

                                        <p>design<span>80%</span></p>
                                    </div>
                                    <div class="bar1">
                                        <div class="barre">
                                            <div class="barre90">
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="competence_flex_tablette">
                            <div class="flex_comp1">
                                <div class="competence2">
                                    <img class="backend" src="medias/images/backend.svg" />
                                    <div>
                                        <h4>backend</h4>
                                        <p>Intégration de votre site web</p>
                                    </div>
                                    <img src="medias/images/flechebas.svg" class="flechecompetence2" />
                                </div>

                                <div class="text_bar2">
                                    <div class="flex_comp">
                                        <div class="text1">
                                            <p>Wireframe<span>90%</span></p>

                                        </div>
                                    </div>
                                    <div class="bar1">
                                        <div class="barre">
                                            <div class="barre90">
                                            </div>
                                        </div>
                                    </div>

                                    <div class="text2">

                                        <p>Expérience utilisateur<span>80%</span></p>
                                    </div>
                                    <div class="bar1">
                                        <div class="barre">
                                            <div class="barre90">
                                            </div>
                                        </div>
                                    </div>

                                    <div class="text3">

                                        <p>design<span>80%</span></p>
                                    </div>
                                    <div class="bar1">
                                        <div class="barre">
                                            <div class="barre90">
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col_droite">
                        <div class="competence_flex_tablette">
                            <div class="flex_comp1">
                                <div class="competence3">
                                    <img class="designer" src="medias/images/designer.svg" />
                                    <div>
                                        <h4>Designer</h4>
                                        <p>designe de votre site</p>
                                    </div>
                                    <img src="medias/images/flechebas.svg" class="flechecompetence3" />
                                </div>

                                <div class="text_bar3">
                                    <div class="flex_comp">
                                        <div class="text1">
                                            <p>Wireframe<span>90%</span></p>

                                        </div>
                                    </div>
                                    <div class="bar1">
                                        <div class="barre">
                                            <div class="barre90">
                                            </div>
                                        </div>
                                    </div>

                                    <div class="text2">

                                        <p>Expérience utilisateur<span>80%</span></p>
                                    </div>
                                    <div class="bar1">
                                        <div class="barre">
                                            <div class="barre90">
                                            </div>
                                        </div>
                                    </div>

                                    <div class="text3">

                                        <p>design<span>80%</span></p>
                                    </div>
                                    <div class="bar1">
                                        <div class="barre">
                                            <div class="barre90">
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
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
                        <img class="iconservice" src="medias/images/service1.svg" />
                        <h4 class="p_service">Ui/Ux<br />Designer</h4>

                        <a href="#modal1" rel="modal:open">

                            <p class="voirplusservice">Voir plus</p><img src="medias/images/flechebtn.png">

                        </a>

                    </article>

                    <article class="service2">
                        <img class="iconservice" src="medias/images/integration.svg" />
                        <h4 class="p_service">Intégration<br />Web</h4>
                        <a href="#modal2" rel="modal:open">
                            <p class="voirplusservice">Voir plus</p><img src="medias/images/flechebtn.png">
                        </a>
                    </article>

                    <article class="service3">
                        <img class="iconservice" src="medias/images/brand.svg" />
                        <h4 class="p_service">Branding<br />Designer</h4>
                        <a href="#modal3" rel="modal:open">
                            <p class="voirplusservice">Voir plus</p><img src="medias/images/flechebtn.png">
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


                            <div class="text_portfolio">
                                <h4>Minimalist web</h4>
                                <p class="bloctext">
                                    Je vous accompagne dans la creation de votre<br />
                                    image de marque et dans la création de votre<br />
                                    site web
                                </p>

                                <a href="lien_site">
                                    <div class="btn_portfolio">Voir plus<img src="medias/images/flechebtnblanc.png"></div>
                                </a>
                            </div>
                        </div>
                        <div class="swiper-slide">

                            <img src="medias/images/project1.png" class="imageprojet" />


                            <div class="text_portfolio">
                                <h4>Minimalist web</h4>
                                <p class="bloctext">
                                    Je vous accompagne dans la creation de votre<br />
                                    image de marque et dans la création de votre<br />
                                    site web
                                </p>

                                <a href="lien_site">
                                    <div class="btn_portfolio">Voir plus<img src="medias/images/flechebtnblanc.png"></div>
                                </a>
                            </div>
                        </div>
                        <div class="swiper-slide">

                            <img src="medias/images/project1.png" class="imageprojet" />


                            <div class="text_portfolio">
                                <h4>Minimalist web</h4>
                                <p class="bloctext">
                                    Je vous accompagne dans la creation de votre<br />
                                    image de marque et dans la création de votre<br />
                                    site web
                                </p>

                                <a href="lien_site">
                                    <div class="btn_portfolio">Voir plus<img src="medias/images/flechebtnblanc.png"></div>
                                </a>
                            </div>
                        </div>

                    </div>

                </div>

                <div class="flechegauche">
                    <img src="medias/images/flechegauche.png" />
                </div>
                <div class="flechedroite">
                    <img src="medias/images/flechedroite.png" />
                </div>


            </div>
            <div class="swiper-pagination"></div>
        </section>
        <section class="section_contact" id="contact">

            <h2>Me-contacter</h2>
            <h3>Envoyer moi un message</h3>

            <div class="conteneur_contact">
                <div class="contact_appeler">
                    <a href="tel:+33621484617"> <img class="appeler" src="medias/images/tel.svg" /><br />

                        <div class="mobil">
                            <h4>Appeller-moi</h4>
                            <p>0621484617</p>
                        </div>
                    </a>
                    <a href="https://www.google.fr/maps/@42.9443861,2.2542786,14.3z"> <img src="medias/images/location.svg" class="location"><br />
                        <div class="localisation">
                            <h4>Localisation</h4>
                            <p>Couiza-France</p>
                        </div>
                    </a>
                </div>
                <?php
        //1-Je récupère les données envoyées par le formulaire
        //      nom_prenom
        //      email
        //      message
        $nom = $_POST['nom'];
        $email = $_POST['email'];
        $tel = $_POST['tel'];
        $message = $_POST['message'];

        
        //ON NE TRAITE L'ENVOI QUE SI LE FORMULAIRE A ETE SOUMIS CAD SI LES CHAMPS EXISTENT
        if(isset($nom) && isset($email) && isset($tel) && isset($message)){
            //2-Vérifier si les champs sont vides
            //  2-1 Si les champs sont vides, on n'envoie pas le mail et on indique à l'utilisateur de remplir tous les champs
            //  2-2 Sinon on passe à l'étape suivante
            if($nom=="" || $email=="" || $message=="" || $tel=="" ){
                echo "Merci de remplir tous les champs";
            }else{
                //3- on constitue le corps du mail
                $corps = "Bonjour, vous venez de recevoir un email via le formulaire de contact de votre portfolio.\n Nom et prénom de la personne: ".$nom.",\n son email: ".$email.",\n son tel: ".$tel.",\n son message: ".$message."";

                //4- Envoi du mail
                //  4-1 si l'envoi échoue, indiquer à l'utilisateur de réessayer plus tard
                //  4-2 sinon afficher le message suivant à l'utilisateur: Merci pour votre message!
                if(!mail("g.belkhirat@protonmail.com","message via le portfolio",$corps)){
                    echo "Merci de réessayer plus tard";
                }else{
                    echo "Merci pour votre message";
                }
            }
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
                    <a href="https://www.linkedin.com/in/gabriel-belkhirat-ab47b319a/"><img src="medias/images/linkedinblanc.png" alt="linkedin" /></a>
                </div>
                <div>
                    <a href="https://www.instagram.com/"><img src="medias/images/dribbbleblanc.png" alt="instagram" /></a>
                </div>
                <div>
                    <a href="https://github.com/gabriel-gang"><img src="medias/images/github-blanc.png" alt="github" /></a>
                </div>
            </div>
        </div>
    </footer>

    <div class="modal" id="modal1">
        <ul>
            <h4>Ui/Ux<br>
                Designer</h4>
            <li>Developement de l'interface utilisateur</li>
            <li>designe des pages web</li>
            <li>creation des elements d'interaction</li>
            <li>creation d'une image de marque</li>
        </ul>
    </div>
    <div class="modal" id="modal2">
        <ul>
            <h4>Intergation<br>
                Web</h4>
            <li>Developement de l'interface utilisateur</li>
            <li>designe des pages web</li>
            <li>creation des elements d'interaction</li>
            <li>creation d'une image de marque</li>
        </ul>
    </div>
    <div class="modal" id="modal3">
        <ul>
            <h4>Branding<br>
                Designer</h4>
            <li>Developement de l'interface utilisateur</li>
            <li>designe des pages web</li>
            <li>creation des elements d'interaction</li>
            <li>creation d'une image de marque</li>
        </ul>
    </div>

    <div class="fondimage"></div>
    <div class="fond2"></div>

    <!-- Swiper JS -->
    <script src="https://unpkg.com/swiper/swiper-bundle.min.js"></script>

    <!-- Initialize Swiper -->
    <script>
        var swiper = new Swiper(".mySwiper", {
            cssMode: true,
            pagination: {
                el: ".swiper-pagination",
            },
            navigation: {
                nextEl: ".flechedroite",
                prevEl: ".flechegauche",
            },
            mousewheel: true,
            keyboard: true,
        });

    </script>
</body>

</html>
