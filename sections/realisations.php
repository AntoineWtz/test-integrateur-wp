<?php
$uploads = wp_upload_dir();
?>
<!-- Réalisations (Mobile) -->
<section id="realisations" class="py-8 px-4 lg:hidden" style="background-image: url('<?php echo $uploads['baseurl']; ?>/2024/12/fond-couleur2.png'); background-size: cover; background-position: center;">
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
            <img src="<?php echo $uploads['baseurl']; ?>/2024/12/realisations1.jpg" alt="Réalisation 1" class="w-full h-80 object-cover" loading="lazy">
        </div>
        <div class="relative rounded-xl overflow-hidden">
            <img src="<?php echo $uploads['baseurl']; ?>/2024/12/realisations2.jpg" alt="Réalisation 2" class="w-full h-80 object-cover" loading="lazy">
        </div>
        <div class="relative rounded-xl overflow-hidden">
            <img src="<?php echo $uploads['baseurl']; ?>/2024/12/realisations3.jpg" alt="Réalisation 3" class="w-full h-80 object-cover" loading="lazy">
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

<!-- Réalisations (Desktop) -->
<section id="realisations" class="hidden lg:block py-48 px-32 relative" style="background-image: url('<?php echo $uploads['baseurl']; ?>/2024/12/fond-couleur2.png'); background-size: cover; background-position: center;">
    <div class="grid grid-cols-2 items-center relative z-10">
        <div class="text-white font-plusJakarta pb-32">
            <h1 class="text-5xl mb-8 font-bauhaus leading-tight ml-60">Nos Réalisations</h1>
            <p class="text-ac-yellow text-base uppercase leading-snug ml-72 pr-24">
                Nous vous accompagnons dans vos projets de peinture, rénovation & décoration !
            </p>
            <p class="text-base mt-4 leading-6 ml-72 pr-24">
                Plus d’hésitations : découvrez en images un petit aperçu de nos réalisations pour vous inspirer et mieux vous projeter dans vos futurs projets !
            </p>
            <div class="flex items-center gap-4 mt-8 ml-72 pr-24">
                <a href="#" class="bg-ac-yellow text-ac-darkblue text-sm font-bold py-3 px-8 rounded-lg text-center hover:bg-white hover:text-ac-darkblue transition">
                    J'en veux +
                </a>
                <a href="#" class="flex items-center bg-transparent border-[3px] border-ac-yellow text-ac-yellow text-sm font-bold py-2 px-6 rounded-lg hover:bg-white hover:text-ac-yellow transition" aria-label="Suivez-nous">
                    <img src="<?php echo $uploads['baseurl']; ?>/2024/12/instagram-logo.png" alt="Logo Instagram" class="w-5 h-5 mr-2" loading="lazy">
                    Suivez-nous !
                </a>
            </div>
        </div>

        <!-- Images en grid -->
        <div class="relative">
            <div class="grid grid-cols-3 gap-4">
                <div class="relative rounded-xl overflow-hidden col-span-1">
                    <img src="<?php echo $uploads['baseurl']; ?>/2024/12/realisations1.jpg" alt="Réalisation 1" class="w-[280px] h-[299px] object-cover rounded-tl-[250px]" loading="lazy">
                </div>
                <div class="relative rounded-xl overflow-hidden col-span-1 row-span-1">
                    <img src="<?php echo $uploads['baseurl']; ?>/2024/12/realisations2.jpg" alt="Réalisation 2" class="w-[280px] h-[332px] object-cover rounded-xl" loading="lazy">
                </div>
                <div class="relative rounded-xl overflow-hidden col-span-1">
                    <img src="<?php echo $uploads['baseurl']; ?>/2024/12/realisations4.jpg" alt="Réalisation 4" class="w-[280px] h-[211px] object-cover rounded-xl" loading="lazy">
                </div>
                <div class="relative rounded-xl overflow-hidden col-span-1 row-span-2 transform -translate-y-8">
                    <img src="<?php echo $uploads['baseurl']; ?>/2024/12/realisations3.jpg" alt="Réalisation 3" class="w-[280px] h-[448px] object-cover rounded-xl" loading="lazy">
                </div>
                <div class="relative rounded-xl overflow-hidden col-span-1">
                    <img src="<?php echo $uploads['baseurl']; ?>/2024/12/realisations5.jpg" alt="Réalisation 5" class="w-[280px] h-[232px] object-cover rounded-xl" loading="lazy">
                </div>
                <div class="relative rounded-xl overflow-hidden col-span-1 transform -translate-y-[115px]">
                    <img src="<?php echo $uploads['baseurl']; ?>/2024/12/realisations6.jpg" alt="Réalisation 6" class="w-[280px] h-[536px] object-cover rounded-xl" loading="lazy">
                </div>
                <div class="relative rounded-xl overflow-hidden col-span-1 transform -translate-y-[18.5rem]">
                    <img src="<?php echo $uploads['baseurl']; ?>/2024/12/realisations7.jpg" alt="Réalisation 7" class="w-[280px] h-[164px] object-cover rounded-xl" loading="lazy">
                </div>
            </div>
        </div>
    </div>

    <div class="absolute left-1/2 transform -translate-x-1/2 bottom-[-80px] w-full flex justify-center gap-12 px-32">
        <!-- Rénovation -->
        <div class="relative group">
            <img src="<?php echo $uploads['baseurl']; ?>/2025/01/renovation-desktop.jpg" alt="Rénovation"
                class="w-[500px] h-[500px] object-cover rounded-[10px] rounded-tl-[250px]" loading="lazy">
            <div class="absolute bottom-0 left-0 bg-white py-6 px-16 rounded-tr-[50px] flex items-center justify-between gap-2 cursor-pointer"
                onclick="toggleAccordion('renovation')">
                <span class="text-ac-darkblue font-bauhaus text-2xl">Rénovation</span>
                <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 text-ac-blue transition-transform"
                    id="arrow-renovation" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7" />
                </svg>
            </div>
            <div id="content-renovation" class="text-center absolute bottom-0 left-[225px] transform -translate-x-1/2 w-[450px] bg-white p-6 rounded-tr-[50px] hidden transition-transform duration-500 ease-in-out">
                <div class="flex items-center justify-center gap-2 mb-4">
                    <span class="text-ac-darkblue font-bauhaus text-3xl">Rénovation</span>
                    <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 text-ac-blue transition-transform rotate-180"
                        id="arrow-renovation-content" fill="none" viewBox="0 0 24 24" stroke="currentColor"
                        onclick="toggleAccordion('renovation')">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 15l-7-7-7 7" />
                    </svg>
                </div>
                <p class="text-ac-darkblue text-xl mb-4 font-plusJakarta">
                    Vous êtes propriétaire ? Vous avez un appartement ou une maison à vendre ?
                </p>
                <button class="bg-ac-purple text-white font-bold py-3 px-8 rounded-lg text-center hover:bg-ac-darkblue transition">
                    découvrir
                </button>
            </div>
        </div>
        <!-- Remise en État -->
        <div class="relative group">
            <img src="<?php echo $uploads['baseurl']; ?>/2025/01/renovation2-desktop.jpg" alt="Remise en État"
                class="w-[500px] h-[500px] object-cover rounded-[10px] rounded-tr-[250px]" loading="lazy">
            <div class="absolute bottom-0 right-0 bg-white py-6 px-16 rounded-tl-[50px] flex items-center justify-between gap-2 cursor-pointer"
                onclick="toggleAccordion('remise')">
                <span class="text-ac-darkblue font-bauhaus text-2xl">Remise en État</span>
                <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 text-ac-blue transition-transform"
                    id="arrow-remise" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7" />
                </svg>
            </div>
            <div id="content-remise" class="text-center absolute bottom-0 right-[225px] transform translate-x-1/2 w-[450px] bg-white p-6 rounded-tl-[50px] hidden transition-transform duration-500 ease-in-out">
                <div class="flex items-center justify-center gap-2 mb-4">
                    <span class="text-ac-darkblue font-bauhaus text-3xl text-center">Remise en État</span>
                    <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 text-ac-blue transition-transform rotate-180"
                        id="arrow-remise-content" fill="none" viewBox="0 0 24 24" stroke="currentColor"
                        onclick="toggleAccordion('remise')">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 15l-7-7-7 7" />
                    </svg>
                </div>
                <p class="text-ac-darkblue text-xl mb-4 font-plusJakarta">
                    Vous avez été victime d’un sinistre dans votre maison ou votre appartement ?
                </p>
                <button class="bg-ac-purple text-white font-bold py-3 px-8 rounded-lg text-center hover:bg-ac-darkblue transition">
                    découvrir
                </button>
            </div>
        </div>
    </div>
</section>