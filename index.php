<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Test Intégrateur WP</title>
    <?php wp_head(); ?>
</head>

<body>
    <?php
    $uploads = wp_upload_dir();
    ?>
    <header class="fixed top-0 left-0 w-full bg-white p-4 shadow z-40">
        <div class="flex items-center justify-between">
            <!-- Logo -->
            <div>
                <img src="<?php echo $uploads['baseurl']; ?>/2024/12/LOGO-mobile.png" alt="Logo" class="h-10">
            </div>
            <!-- CTA et Menu Burger -->
            <div class="flex space-x-4">
                <img src="<?php echo $uploads['baseurl']; ?>/2024/12/CTA.png" alt="CTA" class="h-8">
                <button id="menu-burger" aria-label="Ouvrir le menu">
                    <img src="<?php echo $uploads['baseurl']; ?>/2024/12/MENU-BURGER.png" alt="Menu burger" class="h-8">
                </button>
            </div>
        </div>
    </header>

    <!-- Menu Burger -->
    <div id="burger-menu" class="fixed inset-0 z-50 bg-cover bg-center transform translate-x-full transition-transform duration-300 ease-out" style="background-image: url('<?php echo $uploads['baseurl']; ?>/2024/12/bg-burger.jpg'); background-blend-mode: overlay; background-color: rgba(20, 20, 20, 0.9);">
        <!-- Bouton fermer -->
        <button id="close-menu" aria-label="Fermer le menu" class="absolute top-16 left-1/2 transform -translate-x-1/2 z-50">
            <img src="<?php echo $uploads['baseurl']; ?>/2024/12/close-button.png" alt="Fermer" class="h-10">
        </button>
        <!-- Liens de navigation -->
        <nav class="flex flex-col items-center justify-center h-full text-white space-y-8 relative">
            <div class="absolute top-36">
                <div class="flex flex-col items-start space-y-6">
                    <div class="flex items-center">
                        <span class="w-1 h-6 bg-ac-red rounded-full mr-4"></span>
                        <a href="#home" class="text-2xl font-bauhaus hover:text-ac-green transition">La Maison</a>
                    </div>
                    <div class="flex items-center">
                        <span class="w-1 h-6 bg-ac-orange rounded-full mr-4"></span>
                        <a href="#services" class="text-2xl font-bauhaus hover:text-ac-green transition">Nos Services</a>
                    </div>
                    <div class="flex items-center">
                        <span class="w-1 h-6 bg-ac-purple rounded-full mr-4"></span>
                        <a href="#conseils" class="text-2xl font-bauhaus hover:text-ac-green transition">Les Conseils Couleurs<br>& Bien-être d'Émilie</a>
                    </div>
                    <div class="flex items-center">
                        <span class="w-1 h-6 bg-ac-yellow rounded-full mr-4"></span>
                        <a href="#realisations" class="text-2xl font-bauhaus hover:text-ac-green transition">Nos Réalisations</a>
                    </div>
                </div>
            </div>
            <!-- Bouton contact -->
            <div class="pt-20">
                <a href="#contact" class="flex items-center space-x-4 bg-transparent text-ac-purple border-4 border-ac-purple py-2 px-6 rounded-lg shadow hover:bg-ac-lightblue transition">
                    <img src="<?php echo $uploads['baseurl']; ?>/2024/12/icon-contact.png" alt="Contact" class="h-6 w-6">
                    <span class="font-bauhaus text-white">Parlez-nous<br>de votre projet ?</span>
                </a>
            </div>
            <!-- Réseaux sociaux -->
            <div class="flex items-center space-x-4 mt-8">
                <p class="text-white font-plusJakarta">Suivez-nous</p>
                <!-- Flèche en SVG -->
                <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6 text-ac-yellow mx-2" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7" />
                </svg>
                <!-- Réseaux sociaux -->
                <a href="#" class="hover:opacity-75">
                    <img src="<?php echo $uploads['baseurl']; ?>/2024/12/instagram-navbar.png" alt="Instagram" class="h-8">
                </a>
                <a href="#" class="hover:opacity-75">
                    <img src="<?php echo $uploads['baseurl']; ?>/2024/12/facebook-navbar.png" alt="Facebook" class="h-8">
                </a>
            </div>

        </nav>
    </div>

    <main>
        <section class="relative bg-contain bg-center pt-8"
            style="background-image: url('<?php echo $uploads['baseurl']; ?>/2024/12/fond-couleur.png');" loading="lazy">
            <!-- Encarts -->
            <div class="grid grid-cols-1 gap-4">
                <div class="relative rounded-xl overflow-hidden mt-4 ml-4 mr-4">
                    <img src="<?php echo $uploads['baseurl']; ?>/2024/12/peinture.png" alt="Peinture & Décoration" class="w-full h-56 object-cover opacity-80" loading="lazy">
                    <div class="absolute bottom-4 left-4 right-0 p-2">
                        <p class="text-white text-4xl font-bauhaus">Peinture & Décoration</p>
                    </div>
                </div>
                <div class="relative  rounded-xl overflow-hidden ml-4 mr-4">
                    <img src="<?php echo $uploads['baseurl']; ?>/2024/12/revetement.jpg" alt="Revêtements Sols & Murs" class="w-full h-56 object-cover opacity-80" loading="lazy">
                    <div class="absolute bottom-4 left-4 right-0 p-2">
                        <p class="text-white text-4xl font-bauhaus">Revêtements Sols & Murs</p>
                    </div>
                </div>
                <div class="relative rounded-xl overflow-hidden ml-4 mr-4">
                    <img src="<?php echo $uploads['baseurl']; ?>/2024/12/vitrerie.jpg" alt="La Vitrerie" class="w-full h-56 object-cover opacity-80" loading="lazy">
                    <div class="absolute bottom-4 left-4 right-0 p-2">
                        <p class="text-white text-4xl font-bauhaus">La Vitrerie</p>
                    </div>
                </div>
                <div class="relative rounded-xl overflow-hidden mb-4 ml-4 mr-4">
                    <img src="<?php echo $uploads['baseurl']; ?>/2024/12/renovation.jpg" alt="Rénovation & Remise en état" class="w-full h-56 object-cover opacity-80" loading="lazy">
                    <div class="absolute bottom-4 left-4 right-0 p-2">
                        <p class="text-white text-4xl font-bauhaus">Rénovation & Remise en état</p>
                    </div>
                </div>
            </div>
        </section>

        <!-- Maison d'Expérience -->
        <section class="text-center py-12 bg-white">
            <h2 class="text-4xl font-bauhaus text-ac-darkblue mb-6 mx-8">Maison d'expérience</h2>
            <p class="inline-block bg-ac-green text-white text-lg font-bauhaus px-4 py-1 rounded-full">- depuis 1971 -</p>
            <div class="mt-8 grid grid-cols-1 lg:grid-cols-2 gap-12 items-center">
                <!-- Texte -->
                <div>
                    <p class="text-gray-700 text-base font-plusJakarta leading-relaxed uppercase md:ml-32 px-1 md:px-12">
                        Notre force<br>le conseil et un accompagnement privilégié sur mesure, adapté à vos envies et votre budget.
                    </p>
                </div>
                <!-- Avis Google Desktop -->
                <div class="hidden lg:flex justify-center md:mr-32">
                    <img src="<?php echo $uploads['baseurl']; ?>/2024/12/google.png" alt="Logo Google" class="h-20 w-auto">
                </div>
            </div>
            <div class="mt-12 grid grid-cols-2 md:grid-cols-4 gap-2">
                <div class="text-center">
                    <p class="text-xl font-bauhaus text-ac-darkblue">Interlocuteur<br>unique</p>
                    <div class="mt-2 lg:mt-4 mx-auto w-6 h-2 lg:w-20 rounded-full bg-ac-purple"></div>
                </div>
                <div class="text-center">
                    <p class="text-xl font-bauhaus text-ac-darkblue">Showroom<br>privatisé</p>
                    <div class="mt-2 lg:mt-4 mx-auto w-6 h-2 lg:w-20 rounded-full bg-ac-yellow"></div>
                </div>
                <div class="text-center">
                    <p class="text-xl font-bauhaus text-ac-darkblue">Conseils<br>avisés</p>
                    <div class="mt-2 lg:mt-4 mx-auto w-6 h-2 lg:w-20 rounded-full bg-ac-orange"></div>
                </div>
                <div class="text-center">
                    <p class="text-xl font-bauhaus text-ac-darkblue">Service<br>de vitrerie</p>
                    <div class="mt-2 lg:mt-4 mx-auto w-6 h-2 lg:w-20 rounded-full bg-ac-green"></div>
                </div>
            </div>
            <!-- Avis Google Mobile -->
            <div class="mt-12 text-center lg:hidden">
                <img src="<?php echo $uploads['baseurl']; ?>/2024/12/google.png" alt="Logo Google" class="mx-auto" loading="lazy">
            </div>
        </section>

        <!-- Conseils Couleurs Emilie -->
        <section class="relative bg-white mx-4 my-8 lg:mx-32 lg:my-16 overflow-hidden">
            <div class="grid grid-cols-1 lg:grid-cols-3 gap-6 items-center">
                <!-- Image principale avec fleches -->
                <div class="relative lg:col-span-2">
                    <img src="<?php echo $uploads['baseurl']; ?>/2024/12/conseils-couleurs.png"
                        alt="Les Conseils Couleurs d'Émilie"
                        class="w-full h-80 lg:h-full object-cover rounded-[34px]"
                        loading="lazy">
                    <!-- Flèches pour le carrousel (uniquement desktop) -->
                    <div class="absolute bottom-4 left-4 flex space-x-4 lg:block hidden">
                        <button aria-label="Image précédente" class="bg-white text-ac-purple rounded-full p-2 shadow hover:bg-ac-lightblue transition">
                            <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 19l-7-7 7-7" />
                            </svg>
                        </button>
                        <button aria-label="Image suivante" class="bg-white text-ac-purple rounded-full p-2 shadow hover:bg-ac-lightblue transition">
                            <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7" />
                            </svg>
                        </button>
                    </div>
                    <!-- Conteneur texte superposé pour mobile -->
                    <div class="absolute bottom-0 right-0 bg-white pt-2 pl-6 rounded-tl-3xl text-left w-2/3 lg:hidden">
                        <h3 class="text-3xl font-base text-ac-darkblue font-bauhaus">
                            Les Conseils <br />Couleurs <br />
                            <span class="text-ac-purple">d'Émilie</span>
                        </h3>
                    </div>
                </div>
                <!-- Texte et titre sur fond blanc pour desktop -->
                <div class="relative bg-white lg:rounded-tl-[34px] lg:p-8 lg:-ml-40 lg:-mb-48">
                    <!-- Bloc image et titre -->
                    <div class="hidden lg:flex items-center mb-6">
                        <img src="<?php echo $uploads['baseurl']; ?>/2024/12/photo-emilie.png"
                            alt="Photo d'Émilie"
                            class="h-16 w-16 rounded-tl-lg object-cover mr-4 lg:h-20 lg:w-20"
                            loading="lazy">
                        <h3 class="text-3xl font-bauhaus text-ac-darkblue">
                            Les Conseils Couleurs <br>
                            <span class="text-ac-purple">d'Émilie</span>
                        </h3>
                    </div>
                    <!-- Texte descriptif -->
                    <p class="text-md text-ac-purple uppercase font-plusJakarta mb-2 lg:pl-8">Vivre la couleur au quotidien est essentiel !</p>
                    <p class="text-sm text-black leading-2 font-plusJakarta mb-6 lg:mr-52 lg:pl-8">
                        Avec passion, je vous accompagne et vous conseille dans vos projets de décoration d’intérieur, pour créer des ambiances harmonieuses en accord avec vos envies et votre budget.
                    </p>
                    <!-- Bouton -->
                    <div class="text-center lg:text-left lg:pl-8">
                        <a href="#"
                            class="bg-ac-purple text-white font-bauhaus py-2 px-20 lg:px-8 lg:py-2 rounded-lg hover:bg-ac-orange transition inline-block lg:w-auto"
                            aria-label="Découvrir">
                            découvrir
                        </a>
                    </div>
                </div>
            </div>
        </section>

        <!-- Vitrerie -->
        <section class="relative">
            <!-- Rectangle bleu clair derrière les images -->
            <div class="absolute inset-x-0 top-36 mx-auto w-full h-32 bg-ac-lightblue -z-10 lg:top-0 lg:right-0 lg:left-auto lg:w-[420px] lg:h-[150px] lg:translate-y-0 lg:rounded-tl-full lg:rounded-bl-full"></div>

            <div class="relative z-10 py-8 mx-4 my-8 lg:py-16 lg:mx-32">
                <!-- Mobile layout -->
                <div class="block lg:hidden">
                    <div class="flex items-center justify-center gap-2">
                        <!-- Image 1 -->
                        <div class="w-40 h-60 rounded-xl rounded-bl-[250px] overflow-hidden translate-y-12">
                            <img src="<?php echo $uploads['baseurl']; ?>/2024/12/vitrerie.jpg" alt="Vitrerie 1" class="w-full h-full object-cover" loading="lazy">
                        </div>
                        <!-- Image 2 -->
                        <div class="w-40 h-60 rounded-xl rounded-tr-[250px] overflow-hidden">
                            <img src="<?php echo $uploads['baseurl']; ?>/2024/12/vitrerie2.png" alt="Vitrerie 2" class="w-full h-full object-cover" loading="lazy">
                        </div>
                    </div>
                    <div class="mt-16 font-plusJakarta">
                        <h3 class="text-3xl text-center font-bauhaus text-ac-darkblue">La Vitrerie</h3>
                        <p class="text-ac-blue text-md mt-4 uppercase text-left">Remplacement<br>& Rénovation de vitres</p>
                        <p class="text-black text-sm mt-4 leading-6 text-left">
                            Verres simples, verres de verrières, verres de marquises, verres imprimés, verres feuilletés,
                            verres de fenêtres de toit, doubles vitrages, miroirs...
                        </p>
                        <div class="text-center mt-8">
                            <a href="#" class="bg-ac-blue text-white text-sm font-plusJakarta py-2 px-20 rounded-lg hover:bg-ac-orange transition" aria-label="En savoir +">
                                en savoir +
                            </a>
                        </div>
                    </div>
                </div>

                <!-- Desktop layout -->
                <div class="hidden lg:grid lg:grid-cols-3 lg:gap-8 lg:items-center">
                    <!-- Texte -->
                    <div class="text-left lg:col-span-1 lg:translate-x-32">
                        <h3 class="text-3xl font-bauhaus text-ac-darkblue">La Vitrerie</h3>
                        <p class="text-ac-blue text-md mt-4 uppercase pl-12">Remplacement<br>& Rénovation de vitres</p>
                        <p class="text-black text-sm mt-4 leading-6 pl-12">
                            Verres simples, verres de verrières, verres de marquises, verres imprimés, verres feuilletés,
                            verres de fenêtres de toit, doubles vitrages, miroirs...
                        </p>
                        <div class="text-left mt-8 pl-12">
                            <a href="#" class="bg-ac-blue text-white text-sm font-plusJakarta py-2 px-8 rounded-lg hover:bg-ac-orange transition" aria-label="En savoir +">
                                en savoir +
                            </a>
                        </div>
                    </div>
                    <!-- Images -->
                    <div class="lg:col-span-2 flex flex-col lg:flex-row items-start gap-6 lg:gap-4 justify-end">
                        <!-- Image 1 -->
                        <div class="w-64 h-96 rounded-xl rounded-bl-[250px] overflow-hidden translate-y-12 lg:translate-y-32">
                            <img src="<?php echo $uploads['baseurl']; ?>/2024/12/vitrerie.jpg" alt="Vitrerie 1" class="w-full h-full object-cover" loading="lazy">
                        </div>
                        <!-- Image 2 -->
                        <div class="w-64 h-96 rounded-xl rounded-tr-[250px] overflow-hidden -translate-y-6 lg:-translate-y-4">
                            <img src="<?php echo $uploads['baseurl']; ?>/2024/12/vitrerie2.png" alt="Vitrerie 2" class="w-full h-full object-cover" loading="lazy">
                        </div>
                    </div>
                </div>
            </div>
        </section>



        <!-- Réalisations -->
        <section class="py-8 px-4" style="background-image: url('<?php echo $uploads['baseurl']; ?>/2024/12/fond-couleur2.png'); background-size: cover; background-position: center;">
            <!-- Texte -->
            <div class="text-white font-plusJakarta">
                <h1 class="text-4xl text-center mb-6 font-bauhaus">Nos Réalisations</h1>
                <p class="text-ac-yellow text-sm uppercase">
                    Nous vous accompagnons dans vos projets de peinture, rénovation & décoration !
                </p>
                <p class="text-sm mt-4 leading-6">
                    Plus d’hésitations : découvrez en images un petit aperçu de nos réalisations pour vous inspirer et mieux vous projeter dans vos futurs projets !
                </p>
            </div>

            <!-- Images -->
            <div class="grid grid-cols-1 gap-6 mt-8">
                <div class="relative rounded-xl overflow-hidden">
                    <img src="<?php echo $uploads['baseurl']; ?>/2024/12/realisations1.jpg" alt="Réalisation 1" class="w-full h-64 object-cover" loading="lazy">
                </div>
                <div class="relative rounded-xl overflow-hidden">
                    <img src="<?php echo $uploads['baseurl']; ?>/2024/12/realisations2.jpg" alt="Réalisation 2" class="w-full h-64 object-cover" loading="lazy">
                </div>
                <div class="relative rounded-xl overflow-hidden">
                    <img src="<?php echo $uploads['baseurl']; ?>/2024/12/realisations3.jpg" alt="Réalisation 3" class="w-full h-64 object-cover" loading="lazy">
                </div>
            </div>

            <!-- Boutons -->
            <div class="flex items-center justify-between gap-4 mt-8 px-0">
                <a href="#" class="flex-1 bg-ac-yellow text-ac-darkblue text-xs font-bold py-3 px-1 rounded-lg text-center hover:bg-white hover:text-ac-darkblue transition">
                    J'en veux +
                </a>
                <a href="#" class="flex-1 flex items-center justify-center bg-transparent border-[3px] border-ac-yellow text-ac-yellow text-xs font-bold py-2 px-1 rounded-lg hover:bg-white hover:text-ac-yellow transition" aria-label="Suivez-nous">
                    <img src="<?php echo $uploads['baseurl']; ?>/2024/12/instagram-logo.png" alt="Logo Instagram" class="w-5 h-5 mr-2" loading="lazy">
                    Suivez-nous !
                </a>
            </div>
        </section>

        <!-- Footer -->
        <footer>
            <!-- Section coordonnées -->
            <div class="text-ac-darkblue py-8 px-4 font-plusJakarta">
                <div class="flex justify-center">
                    <img src="<?php echo $uploads['baseurl']; ?>/2024/12/logo-mobile.png" alt="Logo" class="h-20" loading="lazy">
                </div>
                <div class="mt-16 m-8 space-y-6">
                    <!-- Adresse -->
                    <div class="flex items-center gap-4">
                        <div class="w-8 h-8 bg-ac-yellow rounded-lg flex items-center justify-center">
                            <img src="<?php echo $uploads['baseurl']; ?>/2024/12/icon-localisation.png" alt="Adresse" class="w-auto h-4" loading="lazy">
                        </div>
                        <p class="text-sm leading-relaxed text-ac-darkblue">
                            16 Rue du Général Renault<br>
                            37000 Tours
                        </p>
                    </div>
                    <!-- Téléphone -->
                    <div class="flex items-center gap-4">
                        <div class="w-8 h-8 bg-ac-green rounded-lg flex items-center justify-center">
                            <img src="<?php echo $uploads['baseurl']; ?>/2024/12/icon-tel.png" alt="Téléphone" class="w-4 h-auto" loading="lazy">
                        </div>
                        <p class="text-sm leading-relaxed text-ac-darkblue">02 47 66 63 70</p>
                    </div>
                    <!-- Horaires -->
                    <div class="flex items-center gap-4">
                        <div class="w-8 h-20 bg-ac-purple rounded-lg flex items-center justify-center">
                            <img src="<?php echo $uploads['baseurl']; ?>/2024/12/icon-timer.png" alt="Horaires" class="w-auto h-4" loading="lazy">
                        </div>
                        <p class="text-sm leading-relaxed text-ac-darkblue">
                            Du Lundi au Jeudi<br>
                            8h00 – 12h30 | 13h30 – 17h00<br>
                            Vendredi<br>8h00 à 12h00
                        </p>
                    </div>
                </div>
                <!-- Contactez-nous -->
                <div class="text-center mt-6">
                    <p class="text-sm mb-2 text-ac-darkblue">Une question ? Un conseil…</p>
                    <a href="#" class="bg-ac-blue text-white text-base font-bauhaus py-2 px-12 rounded inline-flex items-center hover:bg-ac-darkblue transition" aria-label="Contactez-nous">
                        <img src="<?php echo $uploads['baseurl']; ?>/2024/12/icon-mail.png" alt="Contactez-nous" class="w-5 h-auto mr-2" loading="lazy">
                        Contactez-nous
                    </a>
                </div>
            </div>

            <!-- Section images finales -->
            <div class="bg-ac-darkblue py-4 px-4">
                <div class="grid grid-cols-2 gap-2">
                    <div class="rounded-xl overflow-hidden">
                        <img src="<?php echo $uploads['baseurl']; ?>/2024/12/footer1.png" alt="Image 1" class="w-full h-36 object-cover" loading="lazy">
                    </div>
                    <div class="rounded-xl overflow-hidden">
                        <img src="<?php echo $uploads['baseurl']; ?>/2024/12/footer2.png" alt="Image 2" class="w-full h-36 object-cover" loading="lazy">
                    </div>
                    <div class="rounded-xl overflow-hidden">
                        <img src="<?php echo $uploads['baseurl']; ?>/2024/12/footer3.png" alt="Image 3" class="w-full h-36 object-cover" loading="lazy">
                    </div>
                    <div class="rounded-xl overflow-hidden">
                        <img src="<?php echo $uploads['baseurl']; ?>/2024/12/footer4.png" alt="Image 4" class="w-full h-36 object-cover" loading="lazy">
                    </div>
                    <div class="rounded-xl overflow-hidden">
                        <img src="<?php echo $uploads['baseurl']; ?>/2024/12/footer5.png" alt="Image 5" class="w-full h-36 object-cover" loading="lazy">
                    </div>
                    <div class="rounded-xl overflow-hidden">
                        <img src="<?php echo $uploads['baseurl']; ?>/2024/12/footer6.png" alt="Image 6" class="w-full h-36 object-cover" loading="lazy">
                    </div>
                </div>
                <!-- Mentions légales -->
                <div class="text-center text-xs font-plusJakarta text-white mt-8 uppercase">
                    <p>Mentions légales</p>
                    <p>Politiques de confidentialités</p><br>
                    <p>&copy; 2024 – Tous droits réservés</p>
                </div>
                <!-- Signature -->
                <div class="text-center mt-4">
                    <img src="<?php echo $uploads['baseurl']; ?>/2024/12/SiGNATURE.png" alt="Logo Creatisweb" class="mx-auto h-12" loading="lazy">
                </div>
            </div>
        </footer>



    </main>

</body>
<?php wp_footer(); ?>

</html>