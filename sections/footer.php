<!-- Footer -->
<?php
$uploads = wp_upload_dir();
?>
<footer>
    <!-- Section coordonnées -->
    <div class="text-ac-darkblue py-8 px-4 font-plusJakarta lg:mt-24">
        <div class="flex justify-center">
            <img src="<?php echo $uploads['baseurl']; ?>/2024/12/logo-mobile.png" alt="Logo" class="h-20" loading="lazy">
        </div>
        <div class="mt-16 grid grid-cols-1 lg:grid-cols-3 gap-8 items-start lg:items-center lg:justify-center lg:max-w-6xl lg:mx-auto">
            <div class="text-left">
                <div class="ml-8 lg:ml-0 flex items-center gap-4 justify-start lg:justify-end">
                    <div class="w-8 h-8 bg-ac-yellow rounded-lg flex items-center justify-center">
                        <img src="<?php echo $uploads['baseurl']; ?>/2024/12/icon-localisation.png" alt="Adresse" class="w-auto h-4" loading="lazy">
                    </div>
                    <p class="text-sm leading-relaxed text-ac-darkblue">
                        16 Rue du Général Renault<br>
                        37000 Tours
                    </p>
                </div>
                <div class="ml-8 lg:ml-0 flex items-center gap-4 mt-4 justify-start lg:justify-end">
                    <div class="w-8 h-8 bg-ac-green rounded-lg flex items-center justify-center">
                        <img src="<?php echo $uploads['baseurl']; ?>/2024/12/icon-tel.png" alt="Téléphone" class="w-4 h-auto" loading="lazy">
                    </div>
                    <p class="text-sm leading-relaxed text-ac-darkblue">02 47 66 63 70</p>
                </div>
            </div>
            <div class="text-left lg:text-center">
                <div class="ml-8 lg:ml-0 flex items-center gap-4 justify-start lg:justify-center">
                    <div class="w-8 h-20 bg-ac-purple rounded-lg flex items-center justify-center">
                        <img src="<?php echo $uploads['baseurl']; ?>/2024/12/icon-timer.png" alt="Horaires" class="w-auto h-4" loading="lazy">
                    </div>
                    <p class="text-left text-sm leading-relaxed text-ac-darkblue">
                        Du Lundi au Jeudi<br>
                        8h00 – 12h30 | 13h30 – 17h00<br>
                        Vendredi<br>8h00 à 12h00
                    </p>
                </div>
            </div>
            <div class="text-center lg:text-left lg:pl-8">
                <p class="text-sm mb-2 text-ac-darkblue text-center lg:text-left">Une question ? Un conseil…</p>
                <a href="#" class="bg-ac-blue text-white text-base font-bauhaus py-2 px-12 rounded inline-flex items-center hover:bg-ac-darkblue transition justify-center lg:justify-start" aria-label="Contactez-nous">
                    <img src="<?php echo $uploads['baseurl']; ?>/2024/12/icon-mail.png" alt="Contactez-nous" class="w-5 h-auto mr-2" loading="lazy">
                    Contactez-nous
                </a>
            </div>
        </div>
    </div>

    <!-- Section images -->
    <div class="bg-ac-darkblue py-4 px-4">
        <div class="grid grid-cols-2 lg:grid-cols-9 gap-2">
            <div class="rounded-xl overflow-hidden lg:col-span-1">
                <img src="<?php echo $uploads['baseurl']; ?>/2024/12/footer1.png" alt="Image 1" class="w-full h-36 lg:h-48 object-cover" loading="lazy">
            </div>
            <div class="rounded-xl overflow-hidden lg:col-span-1">
                <img src="<?php echo $uploads['baseurl']; ?>/2024/12/footer2.png" alt="Image 2" class="w-full h-36 lg:h-48 object-cover" loading="lazy">
            </div>
            <div class="rounded-xl overflow-hidden lg:col-span-1">
                <img src="<?php echo $uploads['baseurl']; ?>/2024/12/footer3.png" alt="Image 3" class="w-full h-36 lg:h-48 object-cover" loading="lazy">
            </div>
            <div class="rounded-xl overflow-hidden lg:col-span-1">
                <img src="<?php echo $uploads['baseurl']; ?>/2024/12/footer4.png" alt="Image 4" class="w-full h-36 lg:h-48 object-cover" loading="lazy">
            </div>
            <div class="rounded-xl overflow-hidden lg:col-span-1">
                <img src="<?php echo $uploads['baseurl']; ?>/2024/12/footer5.png" alt="Image 5" class="w-full h-36 lg:h-48 object-cover" loading="lazy">
            </div>
            <div class="rounded-xl overflow-hidden lg:col-span-1">
                <img src="<?php echo $uploads['baseurl']; ?>/2024/12/footer6.png" alt="Image 6" class="w-full h-36 lg:h-48 object-cover" loading="lazy">
            </div>
            <div class="rounded-xl overflow-hidden hidden lg:block lg:col-span-1">
                <img src="<?php echo $uploads['baseurl']; ?>/2025/01/footer7.jpg" alt="Image 7" class="w-full h-36 lg:h-48 object-cover" loading="lazy">
            </div>
            <div class="rounded-xl overflow-hidden hidden lg:block lg:col-span-1">
                <img src="<?php echo $uploads['baseurl']; ?>/2025/01/footer8.jpg" alt="Image 8" class="w-full h-36 lg:h-48 object-cover" loading="lazy">
            </div>
            <div class="rounded-xl overflow-hidden hidden lg:block lg:col-span-1">
                <img src="<?php echo $uploads['baseurl']; ?>/2025/01/footer9.jpg" alt="Image 9" class="w-full h-36 lg:h-48 object-cover" loading="lazy">
            </div>
        </div>

        <!-- Mentions légales et signature -->
        <div class="text-center text-xs font-plusJakarta text-white mt-8 uppercase lg:flex lg:items-center lg:justify-between lg:px-16 lg:py-4">
            <div class="order-1 lg:mt-0 lg:order-2 lg:flex lg:flex-col lg:items-center lg:justify-center">
                <p>Mentions légales<br class="lg:hidden"><span class="hidden lg:inline mx-2">|</span>Politiques de confidentialité</p>
            </div>
            <div class="mt-4 order-2 lg:order-1 lg:flex lg:items-center lg:justify-center">
                <p class="lg:mr-8">&copy; 2024 – Tous droits réservés</p>
            </div>
            <div class="mt-4 lg:mt-0 lg:order-3 lg:flex lg:items-center lg:justify-center">
                <img src="<?php echo $uploads['baseurl']; ?>/2024/12/SiGNATURE.png" alt="Logo Creatisweb" class="mx-auto h-12 lg:mx-0" loading="lazy">
            </div>
        </div>
    </div>
</footer>