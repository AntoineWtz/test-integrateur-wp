<?php
$uploads = wp_upload_dir();
?>
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
            <a href="" class="flex items-center space-x-4 bg-transparent text-ac-purple border-4 border-ac-purple py-2 px-6 rounded-lg shadow hover:bg-ac-lightblue transition">
                <img src="<?php echo $uploads['baseurl']; ?>/2024/12/icon-contact.png" alt="Contact" class="h-6 w-6">
                <span class="font-bauhaus text-white">Parlez-nous<br>de votre projet ?</span>
            </a>
        </div>
        <!-- Réseaux sociaux -->
        <div class="flex items-center space-x-4 mt-8">
            <p class="text-white font-plusJakarta">Suivez-nous</p>
            <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6 text-ac-yellow mx-2" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7" />
            </svg>
            <a href="#" class="hover:opacity-75">
                <img src="<?php echo $uploads['baseurl']; ?>/2024/12/instagram-navbar.png" alt="Instagram" class="h-8">
            </a>
            <a href="#" class="hover:opacity-75">
                <img src="<?php echo $uploads['baseurl']; ?>/2024/12/facebook-navbar.png" alt="Facebook" class="h-8">
            </a>
        </div>
    </nav>
</div>