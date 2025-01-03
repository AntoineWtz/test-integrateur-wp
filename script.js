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

    // Fermer le menu et scroller à la section cible lorsque l'utilisateur clique sur un lien
    menuLinks.forEach(link => {
        link.addEventListener('click', (event) => {
            const targetId = link.getAttribute('href').replace('#', ''); // Récupère l'ID de la section cible
            const targetElement = document.getElementById(targetId);

            if (targetElement) {
                event.preventDefault(); // Empêche le comportement par défaut du lien
                targetElement.scrollIntoView({ behavior: 'smooth' }); // Scrolle vers la section
                burgerMenu.classList.add('translate-x-full'); // Ferme le menu
            }
        });
    });

    // Scroll top bouton desktop
    scrollToTopButton.addEventListener('click', () => {
        window.scrollTo({ top: 0, behavior: 'smooth' });
    });
});
