<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Test Intégrateur WP</title>
    <!-- <?php wp_head(); ?> -->
</head>

<body>
    <?php
    $uploads = wp_upload_dir();
    ?>
    <header class="fixed top-0 left-0 w-full bg-white p-4 shadow z-50">
        <div class="flex items-center justify-between">
            <!-- Logo -->
            <div>
                <img src="<?php echo $uploads['baseurl']; ?>/2024/12/LOGO-mobile.png" alt="Logo" class="h-10">
            </div>
            <!-- CTA et Menu Burger -->
            <div class="flex space-x-4">
                <img src="<?php echo $uploads['baseurl']; ?>/2024/12/CTA.png" alt="CTA" class="h-8">
                <img src="<?php echo $uploads['baseurl']; ?>/2024/12/MENU-BURGER.png" alt="Menu burger" class="h-8">
            </div>
        </div>
    </header>

    <main>
        <section class="relative bg-contain bg-center pt-20"
            style="background-image: url('<?php echo $uploads['baseurl']; ?>/2024/12/fond-couleur.png');">
            <!-- Encarts -->
            <div class="grid grid-cols-1 gap-4">
                <div class="relative rounded-xl overflow-hidden mt-4 ml-4 mr-4">
                    <img src="<?php echo $uploads['baseurl']; ?>/2024/12/peinture.png" alt="Peinture & Décoration" class="w-full h-56 object-cover opacity-80">
                    <div class="absolute bottom-4 left-4 right-0 p-2">
                        <p class="text-white text-4xl font-bauhaus">Peinture & Décoration</p>
                    </div>
                </div>
                <div class="relative  rounded-xl overflow-hidden ml-4 mr-4">
                    <img src="<?php echo $uploads['baseurl']; ?>/2024/12/revetement.jpg" alt="Revêtements Sols & Murs" class="w-full h-56 object-cover opacity-80">
                    <div class="absolute bottom-4 left-4 right-0 p-2">
                        <p class="text-white text-4xl font-bauhaus">Revêtements Sols & Murs</p>
                    </div>
                </div>
                <div class="relative rounded-xl overflow-hidden ml-4 mr-4">
                    <img src="<?php echo $uploads['baseurl']; ?>/2024/12/vitrerie.jpg" alt="La Vitrerie" class="w-full h-56 object-cover opacity-80">
                    <div class="absolute bottom-4 left-4 right-0 p-2">
                        <p class="text-white text-4xl font-bauhaus">La Vitrerie</p>
                    </div>
                </div>
                <div class="relative rounded-xl overflow-hidden mb-4 ml-4 mr-4">
                    <img src="<?php echo $uploads['baseurl']; ?>/2024/12/renovation.jpg" alt="Rénovation & Remise en état" class="w-full h-56 object-cover opacity-80">
                    <div class="absolute bottom-4 left-4 right-0 p-2">
                        <p class="text-white text-4xl font-bauhaus">Rénovation & Remise en état</p>
                    </div>
                </div>
            </div>
        </section>

        <!-- Maison d'Expérience -->
        <section class="text-center py-8 bg-white">
            <h2 class="text-4xl font-bauhaus text-ac-darkblue mx-6 mb-6">Maison d'expérience</h2>
            <p class="inline-block bg-ac-green font-bauhaus text-white text-xl px-4 py-1 rounded-full">- depuis 1971 -</p>
            <p class="mt-4 text-ac-darkblue text-sm font-plusJakarta px-6 uppercase">
                Notre force<br>le conseil et un accompagnement privilégié sur mesure, adapté à vos envies et votre budget.
            </p>
            <!-- Items -->
            <div class="grid grid-cols-2 gap-6 mt-8">
                <div class="text-center">
                    <p class="text-xl font-bauhaus text-ac-darkblue">Interlocuteur unique</p>
                    <div class="mt-2 mx-auto w-6 h-2 rounded-full bg-ac-purple"></div>
                </div>
                <div class="text-center">
                    <p class="text-xl font-bauhaus text-ac-darkblue">Showroom privatisé</p>
                    <div class="mt-2 mx-auto w-6 h-2 rounded-full bg-ac-yellow"></div>
                </div>
                <div class="text-center">
                    <p class="text-xl font-bauhaus text-ac-darkblue">Conseils<br />Avisés</p>
                    <div class="mt-2 mx-auto w-6 h-2 rounded-full bg-ac-orange"></div>
                </div>
                <div class="text-center">
                    <p class="text-xl font-bauhaus text-ac-darkblue">Service<br>de Vitrerie</p>
                    <div class="mt-2 mx-auto w-6 h-2 rounded-full bg-ac-green"></div>
                </div>
            </div>
            <!-- Google Avis -->
            <div class="mt-12 text-center">
                <img src="<?php echo $uploads['baseurl']; ?>/2024/12/google.png" alt="Logo Google" class="mx-auto">
            </div>
        </section>

        <!-- Conseils Couleurs Emilie -->
        <section class="relative bg-white mx-4 my-8 overflow-hidden">
            <!-- Image avec titre superposé -->
            <div class="relative">
                <img src="<?php echo $uploads['baseurl']; ?>/2024/12/conseils-couleurs.png" alt="Les Conseils Couleurs d'Émilie" class="w-full h-80 object-cover rounded-[34px]">
                <!-- Conteneur avec fond blanc arrondi -->
                <div class="absolute bottom-0 right-0 bg-white pt-2 pl-4 rounded-tl-3xl text-left w-2/3">
                    <h3 class="text-3xl font-base text-ac-darkblue font-bauhaus">
                        Les Conseils <br />Couleurs <br />
                        <span class="text-ac-purple">d'Émilie</span>
                    </h3>
                </div>
            </div>
            <!-- Texte -->
            <div class="pt-4 font-plusJakarta">
                <p class="text-ac-purple text-md uppercase"> Vivre la couleur est au quotidien est essentiel !</p>
                <p class="mt-4 text-black text-sm leading-6">
                    Avec passion, je vous accompagne et vous conseille dans vos projets de décoration d’intérieur, pour créer des ambiances harmonieuses en accord avec vos envies et votre budget.
                </p>
            </div>
            <!-- Bouton -->
            <div class="text-center mt-6 mb-4">
                <a href="#" class="bg-ac-purple text-white font-bauhaus py-2 px-20 rounded-lg hover:bg-ac-orange transition">
                    découvrir
                </a>
            </div>
        </section>

        <!-- Vitrerie -->
        <section class="relative">
            <!-- Rectangle bleu clair derrière les images -->
            <div class="absolute inset-x-0 top-36 mx-auto w-full h-32 bg-ac-lightblue -z-10"></div>

            <div class="relative z-10 py-8 mx-4 my-8">
                <!-- Images  -->
                <div class="flex items-center justify-center gap-2">
                    <div class="w-40 h-60 rounded-xl rounded-bl-[250px] overflow-hidden translate-y-12">
                        <img src="<?php echo $uploads['baseurl']; ?>/2024/12/vitrerie.jpg" alt="Vitrerie 1" class="w-full h-full object-cover">
                    </div>
                    <div class="w-40 h-60 rounded-xl rounded-tr-[250px] overflow-hidden">
                        <img src="<?php echo $uploads['baseurl']; ?>/2024/12/vitrerie2.png" alt="Vitrerie 2" class="w-full h-full object-cover">
                    </div>
                </div>
                <!-- Texte -->
                <div class="mt-16 font-plusJakarta">
                    <h3 class="text-3xl text-center font-bauhaus text-ac-darkblue">La Vitrerie</h3>
                    <p class="text-ac-blue text-md mt-4 uppercase">Remplacement<br>& Rénovation de vitres</p>
                    <p class="text-black text-sm mt-4 leading-6">
                        Verres simples, verres de verrières, verres de marquises, verres imprimés, verres feuilletés,
                        verres de fenêtres de toit, doubles vitrages, miroirs...
                    </p>
                </div>

                <!-- Bouton -->
                <div class="text-center mt-6">
                    <a href="#" class="bg-ac-blue text-white text-sm font-plusJakarta py-2 px-20 rounded-lg hover:bg-ac-orange transition">
                        en savoir +
                    </a>
                </div>
            </div>
        </section>

        <!-- Réalisations -->
        <section class="py-8 px-4" style="background-image: url('<?php echo $uploads['baseurl']; ?>/2024/12/fond-couleur2.png'); background-size: cover; background-position: center;">
            <!-- Texte -->
            <div class="text-white font-plusJakarta">
                <h1 class="text-4xl text-center mb-6 font-bauhaus">Nos Réalisations</h1>
                <p class="text-ac-yellow text-md uppercase">
                    Nous vous accompagnons dans vos projets de peinture, rénovation & décoration !
                </p>
                <p class="text-md mt-4 leading-6">
                    Plus d’hésitations : découvrez en images un petit aperçu de nos réalisations pour vous inspirer et mieux vous projeter dans vos futurs projets !
                </p>
            </div>

            <!-- Images -->
            <div class="grid grid-cols-1 gap-6 mt-8">
                <div class="relative rounded-xl overflow-hidden">
                    <img src="<?php echo $uploads['baseurl']; ?>/2024/12/realisations1.jpg" alt="Réalisation 1" class="w-full h-64 object-cover">
                </div>
                <div class="relative rounded-xl overflow-hidden">
                    <img src="<?php echo $uploads['baseurl']; ?>/2024/12/realisations2.jpg" alt="Réalisation 2" class="w-full h-64 object-cover">
                </div>
                <div class="relative rounded-xl overflow-hidden">
                    <img src="<?php echo $uploads['baseurl']; ?>/2024/12/realisations3.jpg" alt="Réalisation 3" class="w-full h-64 object-cover">
                </div>
            </div>

            <!-- Boutons -->
            <div class="flex items-center justify-between gap-4 mt-8 px-0">
                <a href="#" class="flex-1 bg-ac-yellow text-ac-darkblue text-xs font-bold py-3 px-1 rounded-lg text-center hover:bg-white hover:text-ac-darkblue transition">
                    J'en veux +
                </a>
                <a href="#" class="flex-1 flex items-center justify-center bg-transparent border-[3px] border-ac-yellow text-ac-yellow text-xs font-bold py-2 px-1 rounded-lg hover:bg-white hover:text-ac-yellow transition">
                    <img src="<?php echo $uploads['baseurl']; ?>/2024/12/instagram-logo.png" alt="Logo Instagram" class="w-5 h-5 mr-2">
                    Suivez-nous !
                </a>
            </div>
        </section>

        <!-- Footer -->
        <footer>
            <!-- Section coordonnées -->
            <div class="text-ac-darkblue py-8 px-4 font-plusJakarta">
                <div class="flex justify-center">
                    <img src="<?php echo $uploads['baseurl']; ?>/2024/12/logo-mobile.png" alt="Logo" class="h-20">
                </div>
                <div class="m-8 space-y-6">
                    <!-- Adresse -->
                    <div class="flex items-center gap-4">
                        <div class="w-8 h-8 bg-ac-yellow rounded-lg flex items-center justify-center">
                            <img src="<?php echo $uploads['baseurl']; ?>/2024/12/icon-localisation.png" alt="Adresse" class="w-auto h-4">
                        </div>
                        <p class="text-sm leading-relaxed text-ac-darkblue">
                            16 Rue du Général Renault<br>
                            37000 Tours
                        </p>
                    </div>
                    <!-- Téléphone -->
                    <div class="flex items-center gap-4">
                        <div class="w-8 h-8 bg-ac-green rounded-lg flex items-center justify-center">
                            <img src="<?php echo $uploads['baseurl']; ?>/2024/12/icon-tel.png" alt="Téléphone" class="w-4 h-auto">
                        </div>
                        <p class="text-sm leading-relaxed text-ac-darkblue">02 47 66 63 70</p>
                    </div>
                    <!-- Horaires -->
                    <div class="flex items-center gap-4">
                        <div class="w-8 h-20 bg-ac-purple rounded-lg flex items-center justify-center">
                            <img src="<?php echo $uploads['baseurl']; ?>/2024/12/icon-timer.png" alt="Horaires" class="w-auto h-4">
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
                    <a href="#" class="bg-ac-blue text-white text-base font-bauhaus py-2 px-12 rounded inline-flex items-center hover:bg-ac-darkblue transition">
                        <img src="<?php echo $uploads['baseurl']; ?>/2024/12/icon-mail.png" alt="Contactez-nous" class="w-5 h-auto mr-2">
                        Contactez-nous
                    </a>
                </div>
            </div>

            <!-- Section images finales -->
            <div class="bg-ac-darkblue py-4 px-4">
                <div class="grid grid-cols-2 gap-2">
                    <div class="rounded-xl overflow-hidden">
                        <img src="<?php echo $uploads['baseurl']; ?>/2024/12/footer1.png" alt="Image 1" class="w-full h-36 object-cover">
                    </div>
                    <div class="rounded-xl overflow-hidden">
                        <img src="<?php echo $uploads['baseurl']; ?>/2024/12/footer2.png" alt="Image 2" class="w-full h-36 object-cover">
                    </div>
                    <div class="rounded-xl overflow-hidden">
                        <img src="<?php echo $uploads['baseurl']; ?>/2024/12/footer3.png" alt="Image 3" class="w-full h-36 object-cover">
                    </div>
                    <div class="rounded-xl overflow-hidden">
                        <img src="<?php echo $uploads['baseurl']; ?>/2024/12/footer4.png" alt="Image 4" class="w-full h-36 object-cover">
                    </div>
                    <div class="rounded-xl overflow-hidden">
                        <img src="<?php echo $uploads['baseurl']; ?>/2024/12/footer5.png" alt="Image 5" class="w-full h-36 object-cover">
                    </div>
                    <div class="rounded-xl overflow-hidden">
                        <img src="<?php echo $uploads['baseurl']; ?>/2024/12/footer6.png" alt="Image 6" class="w-full h-36 object-cover">
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
                    <img src="<?php echo $uploads['baseurl']; ?>/2024/12/SiGNATURE.png" alt="Logo Creatisweb" class="mx-auto h-12">
                </div>
            </div>
        </footer>



    </main>

</body>
<?php wp_footer(); ?>

</html>