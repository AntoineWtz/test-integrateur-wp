<?php
$uploads = wp_upload_dir();
?>
<!-- Hero Section Desktop-->
<section id="home" class="relative lg:bg-cover lg:bg-center lg:h-full bg-none" style="background-image: url('<?php echo $uploads['baseurl']; ?>/2024/12/hero-decoration.png');" loading="lazy">
    <!-- Hero Background Desktop -->
    <div class="hidden lg:block relative z-10">
        <!-- Header -->
        <header class="absolute top-0 left-0 w-full p-20 z-40 flex items-center justify-end">
            <!-- CTA et Menu Burger -->
            <div class="flex items-center space-x-6">
                <a href="" class="bg-ac-green text-white px-6 py-2 rounded-lg flex items-center">
                    <img src="<?php echo $uploads['baseurl']; ?>/2024/12/CTA.png" alt="CTA" class="h-12 mr-4">
                    <span>Parlez-nous<br><span class="font-bold">de votre projet ?</span></span>
                </a>
                <button id="menu-burger-desktop" aria-label="Ouvrir le menu">
                    <img src="<?php echo $uploads['baseurl']; ?>/2024/12/MENU-BURGER.png" alt="Menu burger" class="h-20 mr-8">
                </button>
            </div>
        </header>

        <!-- Hero Content -->
        <div class="relative grid grid-cols-12 gap-4 items-center p-32">
            <!-- Logo & Texte -->
            <div class="col-span-5 flex flex-col items-center ml-48 mb-48 space-y-6">
                <img src="<?php echo $uploads['baseurl']; ?>/2024/12/LOGO-desktop.png" alt="Logo Desktop" class="h-48">
            </div>
            <!-- Images -->
            <div class="col-span-7 grid grid-cols-2 gap-2 relative">
                <div class="relative rounded-xl overflow-hidden">
                    <img src="<?php echo $uploads['baseurl']; ?>/2024/12/peinture.png" alt="Peinture & Décoration" class="w-[453px] rounded-xl rounded-tl-[250px] h-[487px] object-cover">
                    <div class="absolute inset-0 flex items-center justify-center">
                        <p class="text-white text-5xl font-bauhaus">Peinture<br>& Décoration</p>
                    </div>
                </div>
                <div class="relative rounded-xl overflow-hidden transform translate-y-32">
                    <img src="<?php echo $uploads['baseurl']; ?>/2024/12/revetement.jpg" alt="Revêtements Sols & Murs" class="w-[453px] rounded-xl rounded-br-[250px] h-[487px] object-cover">
                    <div class="absolute inset-0 flex items-center justify-center">
                        <p class="text-white text-5xl font-bauhaus">Revêtements<br>Sols & Murs</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Hero Mobile -->
<section id="home" class="relative bg-contain bg-center pt-16 lg:hidden"
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