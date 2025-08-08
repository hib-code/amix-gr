<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>Amix Group</title>
    <link rel="icon" type="image/png" href="AMIXX.png">
    <link rel='stylesheet' href='https://cdn.jsdelivr.net/npm/swiper@10/swiper-bundle.min.css'>
    <link rel='stylesheet' href='https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css'>
    <link rel="stylesheet" href="./style.css">

</head>

<body>

        <style>

        </style>
   
    <!-- partial:index.partial.html -->
    <!-- Bouton hamburger pour mobile -->
    <button class="hamburger-menu" id="hamburger-menu" aria-label="Ouvrir la navigation">
        <i class="fa-solid fa-bars"></i>
    </button>
    
    <!-- Overlay pour fermer le menu -->
    <div class="menu-overlay" id="menu-overlay"></div>
    
    <main>
        <aside id="sidebar">
            <ul class="Links">
                <li onclick="Navigate(0)" class="activeLink"><i class="fa-solid fa-house"></i>
                    <p>Accueil</p>
                </li>
                <li onclick="Navigate(1)"><i class="fa-solid fa-user"></i>
                    <p>A Propos</p>
                </li>
                <li onclick="Navigate(2)"><i class="fa-solid fa-list"></i>
                    <p>Services</p>
                </li>
                <li onclick="Navigate(3)"><i class="fa-solid fa-images"></i>
                    <p>Projets</p>
                </li>
                <li onclick="Navigate(4)"><i class="fa-solid fa-comments"></i>
                    <p>Contactez Nous</p>
                </li>
            </ul>
        </aside>
        <div class="swiper mySwiper">
            <div class="SlideContainer swiper-wrapper">
                <div class="swiper-slide home-slide">
                    <div class="HomeContent">
                        <h1>Nous Sommes <span class="stylized-name"> Amix</span>,</h1>
                        <h2>Full stack , <span class="proffesions">Devops Developer</span></h2>
                        <p class="heroline">
                            Nous sommes Group Amix, un groupe spécialisé en DevOps, développement Full Stack et réseaux. 
                        </p>
                        <div class="buttonGroup">
                           
                                <button onclick="Navigate(4)">Contactez nous</button>
                           
                        </div>
                    </div>
                    <div class="SideImg">
                        <div class="top-right-corner">
                            <hr class="hr1">
                            <hr class="hr2">
                        </div>
                        <img src="logody.jpeg" alt="">
                        <div class="bottom-left-corner">
                            <hr class="hr1">
                            <hr class="hr2">
                        </div>
                    </div>
                    <p class="slide-help">Faites défiler pour la diapositive suivante <i class="fa-solid fa-chevron-right fa-shake"></i>
                    </p>
                </div>
                <div class="swiper-slide">
                    <div class="about-us">
                        <h1 class="heading">A propos de Nous</h1>
                        <h3 class="sub-heading">Amix <span class="proffesions">Group</span></h3>
                        <p class="aboutme-deatils">
                            Group Amix est un collectif d’experts passionnés en DevOps, 
                            développement Full Stack et réseaux informatiques. 
                            Notre mission est de concevoir, développer et maintenir des solutions technologiques performantes et 
                            sécurisées. Grâce à une approche collaborative et une veille technologique constante, 
                            nous accompagnons nos clients dans la réussite de leurs projets digitaux, 
                            de l’infrastructure à l’interface utilisateur.
                        </p>
                        <div class="about-me-divison">
                            <div class="about-me-table">
                                <li><span>Experience:</span> 2+ Année</li>
                                <li><span>Pays:</span> Maroc</li>
                                <li><span>Ville:</span>Sidi Slimane</li>
                                <li><span>Disponibilité:</span> 24/7 </li>
                                <li onclick="openPopup('popup-about')"><span>Telephone</span>:212 6 12 46 31 72</li>
                                <div id="popup" class="popup">
                                    <div class="popup-content">
                                        <h4>Contacter via :</h4>
                                        <a href="https://wa.me/212612463172" target="_blank" class="popup-btn">WhatsApp</a>
                                        <a href="tel:+212612463172" class="popup-btn">Téléphone</a>
                                        <button onclick="closePopup('popup-about')" class="popup-close">Fermer</button>
                                    </div>
                                    </div>
                                <div class="buttonGroup">
                                    
                                        <button  onclick="Navigate(4)">Contactez Nous</button>
                                   
                                </div>
                            </div>

                           
                        </div>
                    </div>
                </div>
                <div class="swiper-slide services">

                    <h1 class="heading">Nos Services</h1>
                    <div class="service-box">
                        <div class="service">
                            <div class="service-icon"><i class="fa-solid fa-pen-ruler"></i></div>
                           <h2>Conception Web</h2>
                            <p>Des designs modernes et fonctionnels pour une meilleure expérience utilisateur.</p>
                        </div>
                        <div class="service">
                            <div class="service-icon"><i class="fa-solid fa-globe"></i></div>
                            <h2>Développement Web</h2>
                            <p>Des sites web dynamiques, performants et adaptés à vos besoins.</p>
                        </div>
                        <div class="service">
                            <div class="service-icon"><i class="fa-solid fa-magnifying-glass"></i></div>
                            <h2>Référencement SEO</h2>
                            <p>Optimisez votre visibilité sur les moteurs de recherche.</p>
                        </div>
                        <div class="service">
                            <div class="service-icon"><i class="fa-solid fa-image"></i></div>
                            <h2>DevOps</h2>
                            <p>Optimisation du déploiement et de la gestion des infrastructures.</p>
                        </div>
                        <div class="service">
                            <div class="service-icon"><i class="fa-solid fa-mobile-screen-button"></i></div>
                            <h2>Développement de Logiciels</h2>
                            <p>Des applications desktop et mobiles sur mesure.</p>
                        </div>
                        <div class="service">
                            <div class="service-icon"><i class="fa-solid fa-database"></i></div>
                            <h2>Administration de Bases de Données</h2>
                            <p>Gestion et optimisation de vos bases de données.</p>
                        </div>
                    </div>
                </div>
              <div class="swiper-slide gallery">
                    <h1 class="heading"> Nos projets</h1>

                    <div class="project">
                        <img src="proj1.png" alt="">
                        <a href="https://allo-mecano.vercel.app/" class="btn-view" target="_blank">Voir</a>
                    </div>

                    <div class="project">
                        <img src="proj2.png" alt="">
                        <a href="https://legumespropres.vercel.app/" class="btn-view" target="_blank">Voir</a>
                    </div>

                    <div class="project">
                        <img src="proj3.png" alt="">
                        <a href="https://dms.dervox.com/" class="btn-view" target="_blank">Voir</a>
                    </div>

                    <div class="project">
                        <img src="proj4.png" alt="">
                        <a href="https://fruizy.vercel.app/" class="btn-view" target="_blank">Voir</a>
                    </div>

                   
                </div>

                <div class="swiper-slide contactMe">
                    <h1 class="heading">Contactez Nous</h1>
                    <div class="cnt">
                        <div class="contactinfo" onclick="openPopup('popup-contact')">
                        <i class="fa-solid fa-phone"></i>
                        <h3>Téléphone</h3>
                        <p>212 6 12 46 31 72</p>
                        </div>
                        <div id="popup-contact" class="popup">
                        <div class="popup-content">
                        <h4>Contacter via :</h4>
                        <a href="https://wa.me/212612463172" target="_blank" class="popup-btn">WhatsApp</a>
                        <a href="tel:+212612463172" class="popup-btn">Téléphone</a>
                        <button onclick="closePopup('popup-contact')" class="popup-close">Fermer</button>
                    </div>
                    </div>


                        <div class="contactinfo"><i class="fa-solid fa-location-dot"></i>
                            <h3>Location</h3>
                            <p>Sidi Slimane</p>
                        </div>
                        <div class="contactinfo"><i class="fa-regular fa-envelope"></i>
                            <h3>Email</h3>
                            <p>Amix.services@gmail.com</p>
                        </div>
                       
                    </div>
                    <section id="contact">
                        <form id="contactForm" action="send_email.php" method="POST">
                            <h2>Envoyer un message <div class="SocialLinks">
                                  
                                    <a href="https://www.instagram.com/amix.codingteam2025/" target="_blank"><i class="fa-brands fa-instagram"></i></a>
                                    <a href="https://github.com/Amix-group" target="_blank"><i class="fa-brands fa-github"></i></a>
                                    <a href="https://www.linkedin.com/in/amix-amix-ma-269599378/" target="_blank"><i class="fa-brands fa-linkedin"></i></a>
                                    <a href="https://www.facebook.com/profile.php?id=61579173472670" target="_blank"><i class="fa-brands fa-facebook"></i></a>

                                </div>
                            </h2>
                            <input type="text" name="nom" placeholder="Nom" required>
                            <input type="email" name="email" placeholder="Email" required>
                            <textarea name="message" rows="10" placeholder="Tapez Votre Message..." required></textarea>
                            <button type="submit" class="primary">Envoyer</button>
                        </form>
                        <div id="messageZone"></div>
                    </section>
                </div>
            </div>
    </main>
    <!-- partial -->
    <script src='https://cdnjs.cloudflare.com/ajax/libs/Swiper/11.0.5/swiper-bundle.min.js'></script>
    <script src="./script.js"></script>

</body>

</html>
