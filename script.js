document.addEventListener('DOMContentLoaded', () => {
    const burgerMenu = document.getElementById('burger-menu');
    const menuBurgerButtonMobile = document.getElementById('menu-burger');
    const menuBurgerButtonDesktop = document.getElementById('menu-burger-desktop');
    const closeMenuButton = document.getElementById('close-menu');

    // Ouvrir le menu depuis le bouton mobile
    menuBurgerButtonMobile.addEventListener('click', () => {
        burgerMenu.classList.remove('translate-x-full');
    });

    // Ouvrir le menu depuis le bouton desktop
    menuBurgerButtonDesktop.addEventListener('click', () => {
        burgerMenu.classList.remove('translate-x-full');
    });

    // Fermer le menu
    closeMenuButton.addEventListener('click', () => {
        burgerMenu.classList.add('translate-x-full');
    });
});
