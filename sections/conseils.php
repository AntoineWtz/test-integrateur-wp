<?php
$uploads = wp_upload_dir();
?>
<!-- Conseils Couleurs Emilie -->
<section id="conseils" class="relative bg-white mx-4 my-8 lg:mx-32 lg:my-16 overflow-hidden">
    <div class="grid grid-cols-1 lg:grid-cols-3 gap-6 items-center">
        <!-- Image -->
        <div class="relative lg:col-span-2">
            <img src="<?php echo $uploads['baseurl']; ?>/2024/12/conseils-couleurs.png"
                alt="Les Conseils Couleurs d'Émilie"
                class="w-full h-80 lg:h-full object-cover rounded-[34px]"
                loading="lazy">
            <!-- Flèches carrousel -->
            <div class="absolute bottom-4 left-4 flex space-x-2 hidden lg:block lg:bg-white lg:rounded-full">
                <button aria-label="Image précédente" class="bg-white text-ac-purple rounded-full p-2 hover:bg-ac-lightblue transition">
                    <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 19l-7-7 7-7" />
                    </svg>
                </button>
                <button aria-label="Image suivante" class="bg-white text-ac-purple rounded-full p-2 hover:bg-ac-lightblue transition">
                    <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7" />
                    </svg>
                </button>
            </div>
            <!-- Conteneur texte superposé pour mobile -->
            <div class="absolute bottom-0 right-0 bg-white pt-2 pl-6 rounded-tl-3xl text-left w-2/3 lg:hidden">
                <h3 class="text-4xl font-base text-ac-darkblue font-bauhaus">
                    Les Conseils <br />Couleurs <br />
                    <span class="text-ac-purple text-5xl">d'Émilie</span>
                </h3>
            </div>
        </div>
        <!-- Texte et titre pour desktop -->
        <div class="relative bg-white lg:rounded-tl-[34px] lg:p-6 lg:-ml-40 lg:mt-[430px]">
            <div class="hidden lg:flex items-center mb-6">
                <img src="<?php echo $uploads['baseurl']; ?>/2024/12/photo-emilie.png"
                    alt="Photo d'Émilie"
                    class="h-16 w-16 rounded-tl-lg object-cover mr-4 lg:h-20 lg:w-20"
                    loading="lazy">
                <h3 class="text-4xl font-bauhaus text-ac-darkblue">
                    Les Conseils Couleurs <br>
                    <span class="text-ac-purple text-5xl">d'Émilie</span>
                </h3>
            </div>
            <p class="text-[16px] text-ac-purple uppercase font-plusJakarta mb-4 lg:pl-8">Vivre la couleur au quotidien est essentiel !</p>
            <p class="text-[16px] text-black leading-2 font-plusJakarta mb-6 lg:mr-60 lg:pl-8">
                Avec passion, je vous accompagne et vous conseille dans vos projets de décoration d’intérieur, pour créer des ambiances harmonieuses en accord avec vos envies et votre budget.
            </p>
            <!-- Bouton -->
            <div class="text-center lg:text-left lg:p-8">
                <a href="#"
                    class="bg-ac-purple text-white font-bauhaus py-2 px-20 lg:px-8 lg:py-2 rounded-lg hover:bg-ac-orange transition inline-block lg:w-auto lg:mb-16"
                    aria-label="Découvrir">
                    découvrir
                </a>
            </div>
        </div>
    </div>
</section>