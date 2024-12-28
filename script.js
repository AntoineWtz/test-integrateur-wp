document.addEventListener('DOMContentLoaded', () => {
    console.log('Le script.js est chargé !');
    const burgerMenu = document.getElementById('burger-menu');
    const menuBurgerButton = document.getElementById('menu-burger');
    const closeMenuButton = document.getElementById('close-menu');

    // Ouvrir le menu
    menuBurgerButton.addEventListener('click', () => {
        burgerMenu.classList.remove('translate-x-full');
    });

    // Fermer le menu
    closeMenuButton.addEventListener('click', () => {
        burgerMenu.classList.add('translate-x-full');
    });
});
