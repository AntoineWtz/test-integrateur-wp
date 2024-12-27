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
    <header class="bg-white p-4 shadow-md">
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
        <section class="relative bg-contain bg-center"
            style="background-image: url('<?php echo $uploads['baseurl']; ?>/2024/12/fond-couleur.png');">
            <!-- Encarts -->
            <div class="grid grid-cols-1 gap-4">
                <div class="relative rounded-xl overflow-hidden mt-4 ml-4 mr-4">
                    <img src="<?php echo $uploads['baseurl']; ?>/2024/12/peinture.png" alt="Peinture & Décoration" class="w-full h-56 object-cover opacity-80">
                    <div class="absolute bottom-4 left-4 right-0 p-2">
                        <p class="text-white text-3xl">Peinture & Décoration</p>
                    </div>
                </div>
                <div class="relative  rounded-xl overflow-hidden ml-4 mr-4">
                    <img src="<?php echo $uploads['baseurl']; ?>/2024/12/revetement.jpg" alt="Revêtements Sols & Murs" class="w-full h-56 object-cover opacity-80">
                    <div class="absolute bottom-4 left-4 right-0 p-2">
                        <p class="text-white text-3xl">Revêtements Sols & Murs</p>
                    </div>
                </div>
                <div class="relative rounded-xl overflow-hidden ml-4 mr-4">
                    <img src="<?php echo $uploads['baseurl']; ?>/2024/12/vitrerie.jpg" alt="La Vitrerie" class="w-full h-56 object-cover opacity-80">
                    <div class="absolute bottom-4 left-4 right-0 p-2">
                        <p class="text-white text-3xl">La Vitrerie</p>
                    </div>
                </div>
                <div class="relative rounded-xl overflow-hidden mb-4 ml-4 mr-4">
                    <img src="<?php echo $uploads['baseurl']; ?>/2024/12/renovation.jpg" alt="Rénovation & Remise en état" class="w-full h-56 object-cover opacity-80">
                    <div class="absolute bottom-4 left-4 right-0 p-2">
                        <p class="text-white text-3xl">Rénovation & Remise en état</p>
                    </div>
                </div>
            </div>
        </section>

        <!-- Maison d'Expérience -->
        <section class="text-center py-8 bg-white">
            <h2 class="text-4xl font-bold text-gray-900 mb-6">Maison d'expérience</h2>
            <p class="inline-block bg-ac-green font-thin text-white text-lg px-3 py-1 rounded-full">- depuis 1971 -</p>
            <p class="mt-4 text-gray-700 text-base px-6 uppercase">
                Notre force le conseil et un accompagnement privilégié sur mesure, adapté à vos envies et votre budget.
            </p>
            <!-- Items -->
            <div class="grid grid-cols-2 gap-6 mt-8">
                <div class="text-center">
                    <p class="text-gray-900 text-xl font-bold">Interlocuteur unique</p>
                    <div class="mt-2 mx-auto w-6 h-2 rounded-full bg-ac-purple"></div>
                </div>
                <div class="text-center">
                    <p class="text-gray-900 text-xl font-bold">Showroom privatisé</p>
                    <div class="mt-2 mx-auto w-6 h-2 rounded-full bg-ac-yellow"></div>
                </div>
                <div class="text-center">
                    <p class="text-gray-900 text-xl font-bold">Conseils<br />Avisés</p>
                    <div class="mt-2 mx-auto w-6 h-2 rounded-full bg-ac-orange"></div>
                </div>
                <div class="text-center">
                    <p class="text-gray-900 text-xl font-bold">Service de Vitrerie</p>
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
                    <h3 class="text-3xl font-base text-gray-900">
                        Les Conseils <br />Couleurs <br />
                        <span class="text-ac-purple">d'Émilie</span>
                    </h3>
                </div>
            </div>
            <!-- Texte -->
            <div class="pt-2">
                <p class="text-ac-purple text-md uppercase"> Vivre la couleur est au quotidien est essentiel !</p>
                <p class="mt-4 text-gray-700 text-sm leading-6">
                    Avec passion, je vous accompagne et vous conseille dans vos projets de décoration d’intérieur, pour créer des ambiances harmonieuses en accord avec vos envies et votre budget.
                </p>
            </div>
            <!-- Bouton -->
            <div class="text-center mt-6 mb-4">
                <a href="#" class="bg-ac-purple text-white text-sm font-bold py-2 px-20 rounded-lg hover:bg-ac-orange transition">
                    découvrir
                </a>
            </div>
        </section>

        <!-- Vitrerie -->
        <section class="relative">
            <!-- Rectangle bleu clair derrière les images -->
            <div class="absolute inset-x-0 top-36 mx-auto w-full h-32 bg-ac-lightblue -z-10"></div>

            <div class="relative z-10 py-8 mx-4 my-8">
                <!-- Images avec alignement particulier -->
                <div class="flex items-center justify-center gap-4">
                    <div class="w-40 h-60 rounded-xl rounded-bl-[250px] overflow-hidden translate-y-8">
                        <img src="<?php echo $uploads['baseurl']; ?>/2024/12/vitrerie.jpg" alt="Vitrerie 1" class="w-full h-full object-cover">
                    </div>
                    <div class="w-40 h-60 rounded-xl rounded-tr-[250px] overflow-hidden">
                        <img src="<?php echo $uploads['baseurl']; ?>/2024/12/vitrerie2.png" alt="Vitrerie 2" class="w-full h-full object-cover">
                    </div>
                </div>
                <!-- Texte -->
                <div class="mt-12">
                    <h3 class="text-3xl text-center">La Vitrerie</h3>
                    <p class="text-ac-blue text-md mt-4 uppercase">Remplacement & Rénovation de vitres</p>
                    <p class="text-gray-700 text-sm mt-4 leading-6">
                        Verres simples, verres de verrières, verres de marquises, verres imprimés, verres feuilletés,
                        verres de fenêtres de toit, doubles vitrages, miroirs...
                    </p>
                </div>

                <!-- Bouton -->
                <div class="text-center mt-6">
                    <a href="#" class="bg-ac-blue text-white text-sm font-bold py-2 px-20 rounded-lg hover:bg-ac-orange transition">
                        en savoir +
                    </a>
                </div>
            </div>
        </section>

        <!-- Réalisations -->
        <section class="py-8 px-4" style="background-image: url('<?php echo $uploads['baseurl']; ?>/2024/12/fond-couleur2.png'); background-size: cover; background-position: center;">
            <!-- Texte -->
            <div class="text-white">
                <h1 class="text-3xl text-center mb-4">Nos Réalisations</h1>
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


    </main>

    <?php wp_footer(); ?>
</body>

</html>