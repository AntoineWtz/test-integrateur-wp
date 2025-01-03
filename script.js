document.addEventListener('DOMContentLoaded', () => {
    const burgerMenu = document.getElementById('burger-menu');
    const menuBurgerButtonMobile = document.getElementById('menu-burger');
    const menuBurgerButtonDesktop = document.getElementById('menu-burger-desktop');
    const closeMenuButton = document.getElementById('close-menu');
    const scrollToTopButton = document.getElementById('scroll-to-top');
    const menuLinks = burgerMenu.querySelectorAll('a'); // Tous les liens dans le menu burger

    // Ouvrir le menu depuis le bouton mobile
    menuBurgerButtonMobile.addEventListener('click', () => {
        burgerMenu.classList.remove('translate-x-full');
    });

    // Ouvrir le menu depuis le bouton desktop
    menuBurgerButtonDesktop.addEventListener('click', () => {
        burgerMenu.classList.remove('translate-x-full');
    });

    // Fermer le menu avec le bouton de fermeture
    closeMenuButton.addEventListener('click', () => {
        burgerMenu.classList.add('translate-x-full');
    });

    // Fermer le menu et scroller à la section cible
    menuLinks.forEach(link => {
        link.addEventListener('click', (event) => {
            const targetId = link.getAttribute('href').replace('#', '');
            const targetElement = document.getElementById(targetId);

            if (targetElement) {
                event.preventDefault();
                targetElement.scrollIntoView({ behavior: 'smooth' });
                burgerMenu.classList.add('translate-x-full');
            }
        });
    });

    // Scroll top bouton desktop
    scrollToTopButton.addEventListener('click', () => {
        window.scrollTo({ top: 0, behavior: 'smooth' });
    });

});

function toggleAccordion(id) {
    const content = document.getElementById(`content-${id}`);
    const arrow = document.getElementById(`arrow-${id}`);
    const isOpen = !content.classList.contains('hidden');

    // Ouvrir ou fermer l'élément cliqué
    if (!isOpen) {
        content.classList.remove('hidden');
        content.classList.add('translate-y-0');
        arrow.classList.add('rotate-180');
    } else {
        content.classList.add('hidden');
        content.classList.remove('translate-y-0');
        arrow.classList.remove('rotate-180');
    }
}


