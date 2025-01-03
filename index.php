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
    <header class="fixed top-0 left-0 w-full bg-white p-4 shadow z-40 lg:hidden">
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

    <?php get_template_part('sections/navbar'); ?>

    <?php get_template_part('sections/social'); ?>

    <main>
        <?php get_template_part('sections/hero'); ?>

        <!-- Maison d'Expérience -->
        <section id="services" class="text-center py-12 lg:py-0 bg-white">
            <h2 class="text-4xl lg:text-5xl font-bauhaus text-ac-darkblue mb-6 mx-8">Maison d'expérience</h2>
            <p class="inline-block bg-ac-green text-white text-lg font-bauhaus px-4 py-1 rounded-full">- depuis 1971 -</p>
            <div class="mt-8 grid grid-cols-1 lg:grid-cols-2 gap-12 items-center">
                <div>
                    <p class="text-ac-darkblue text-base font-plusJakarta leading-relaxed uppercase lg:ml-32 px-1 lg:px-48">
                        Notre force<br>le conseil et un accompagnement privilégié sur mesure, adapté à vos envies et votre budget.
                    </p>
                </div>
                <!-- Avis Google Desktop -->
                <div class="hidden lg:flex justify-center lg:mr-32">
                    <img src="<?php echo $uploads['baseurl']; ?>/2024/12/google.png" alt="Logo Google" class="h-20 w-auto">
                </div>
            </div>
            <div class="mt-12 grid grid-cols-2 lg:grid-cols-4">
                <div class="text-center">
                    <p class="text-[25px] font-bauhaus text-ac-darkblue mt-4">Interlocuteur<br>unique</p>
                    <div class="mt-4 mx-auto w-6 h-2 lg:w-20 rounded-full bg-ac-purple"></div>
                </div>
                <div class="text-center">
                    <p class="text-[25px] font-bauhaus text-ac-darkblue mt-4">Showroom<br>privatisé</p>
                    <div class="mt-4 mx-auto w-6 h-2 lg:w-20 rounded-full bg-ac-yellow"></div>
                </div>
                <div class="text-center">
                    <p class="text-[25px] font-bauhaus text-ac-darkblue mt-4">Conseils<br>Avisés</p>
                    <div class="mt-4 mx-auto w-6 h-2 lg:w-20 rounded-full bg-ac-orange"></div>
                </div>
                <div class="text-center">
                    <p class="text-[25px] font-bauhaus text-ac-darkblue mt-4">Service<br>de Vitrerie</p>
                    <div class="mt-4 mx-auto w-6 h-2 lg:w-20 rounded-full bg-ac-green"></div>
                </div>
            </div>
            <!-- Avis Google Mobile -->
            <div class="mt-12 text-center lg:hidden">
                <img src="<?php echo $uploads['baseurl']; ?>/2024/12/google.png" alt="Logo Google" class="mx-auto" loading="lazy">
            </div>
        </section>

        <?php get_template_part('sections/conseils'); ?>
        <?php get_template_part('sections/services'); ?>
        <?php get_template_part('sections/realisations'); ?>

    </main>

    <?php get_template_part('sections/footer'); ?>

</body>
<?php wp_footer(); ?>

</html>