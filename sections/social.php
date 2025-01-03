<?php
$uploads = wp_upload_dir();
?>
<!-- Réseaux sociaux et flèche de retour en haut -->
<div class="fixed top-1/3 right-16 transform -translate-y-1/2 z-50 hidden lg:flex flex-col items-center gap-4">
    <a href="#" aria-label="Facebook" class="hover:opacity-75">
        <img src="<?php echo $uploads['baseurl']; ?>/2024/12/facebook-navbar.png" alt="Facebook" class="w-10 h-10">
    </a>
    <a href="#" aria-label="Instagram" class="hover:opacity-75">
        <img src="<?php echo $uploads['baseurl']; ?>/2024/12/instagram-navbar.png" alt="Instagram" class="w-10 h-10">
    </a>
    <!-- Scroll Top Button -->
    <button id="scroll-to-top" aria-label="Retour en haut" class="bg-ac-green rounded-lg w-10 h-10 flex items-center justify-center shadow-lg hover:bg-ac-orange transition">
        <svg xmlns="http://www.w3.org/2000/svg" class="w-6 h-6 text-white" fill="none" viewBox="0 0 24 24" stroke="currentColor">
            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 15l7-7 7 7" />
        </svg>
    </button>
</div>