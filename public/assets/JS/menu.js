const openMenuButton = document.querySelector('.btnOpenMenu');
const closeMenuButton = document.querySelector('.btnCloseMenu');
const navbar = document.querySelector('.navbar');

document.addEventListener('DOMContentLoaded', function() {
    openMenuButton.addEventListener('click', function() {
        navbar.classList.add('navbarBtnOpenMenu');
    });

    closeMenuButton.addEventListener('click', function() {
        navbar.classList.remove('navbarBtnOpenMenu');
    });
});