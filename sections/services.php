<?php
$uploads = wp_upload_dir();
?>
<!-- Vitrerie -->
<section class="relative">
    <!-- Rectangle bleu -->
    <div class="absolute inset-x-0 top-36 mx-auto w-full h-32 bg-ac-lightblue -z-10 lg:top-0 lg:right-0 lg:left-auto lg:w-[645px] lg:h-[234px] lg:translate-y-0 lg:rounded-tl-full lg:rounded-bl-full"></div>

    <div class="relative z-10 py-8 mx-4 my-8 lg:py-16 lg:mx-32">
        <!-- Mobile layout -->
        <div class="block lg:hidden">
            <div class="flex items-center justify-center gap-2">
                <div class="w-40 h-60 rounded-xl rounded-bl-[250px] overflow-hidden translate-y-12">
                    <img src="<?php echo $uploads['baseurl']; ?>/2024/12/vitrerie.jpg" alt="Vitrerie 1" class="w-full h-full object-cover" loading="lazy">
                </div>
                <div class="w-40 h-60 rounded-xl rounded-tr-[250px] overflow-hidden">
                    <img src="<?php echo $uploads['baseurl']; ?>/2024/12/vitrerie2.png" alt="Vitrerie 2" class="w-full h-full object-cover" loading="lazy">
                </div>
            </div>
            <div class="mt-16 font-plusJakarta">
                <h3 class="text-[40px] text-center font-bauhaus text-ac-darkblue">La Vitrerie</h3>
                <p class="text-ac-blue text-[16px] mt-4 uppercase text-left">Remplacement<br>& Rénovation de vitres</p>
                <p class="text-black text-[16px] mt-4 leading-6 text-left">
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
        <div id="realisations" class="hidden lg:grid lg:grid-cols-3 lg:gap-8 lg:items-center">
            <div class="text-left lg:col-span-1 lg:translate-x-60">
                <h3 class="text-4xl font-bauhaus text-ac-darkblue">La Vitrerie</h3>
                <p class="text-ac-blue text-base mt-4 uppercase pl-12">Remplacement<br>& Rénovation de vitres</p>
                <p class="text-black text-base mt-4 leading-6 pl-12">
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
                <div class="w-64 h-96 rounded-[10px] rounded-bl-[200px] overflow-hidden lg:translate-y-32 lg:-translate-x-[220px]">
                    <img src="<?php echo $uploads['baseurl']; ?>/2024/12/vitrerie.jpg" alt="Vitrerie 1" class="w-[338px] h-[487px] object-cover" loading="lazy">
                </div>
                <div class="w-64 h-96 rounded-[10px] rounded-tr-[200px] overflow-hidden lg:translate-y-8 lg:-translate-x-[220px]">
                    <img src="<?php echo $uploads['baseurl']; ?>/2024/12/vitrerie2.png" alt="Vitrerie 2" class="w-[338px] h-[487px] object-cover" loading="lazy">
                </div>
            </div>
        </div>
    </div>
</section>