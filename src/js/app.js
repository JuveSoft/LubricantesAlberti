document.addEventListener('DOMContentLoaded', function () {
    eventListeners();

    darkMode();
});
function darkMode() {
    const botonDarkMode = document.querySelector('.dark-mode-boton');
    botonDarkMode.addEventListener('click', function () {
        document.body.classList.toggle('darkMode');
    });
}

function eventListeners() {
    const mobileMenu = document.querySelector('.mobile-menu');
    mobileMenu.addEventListener('click', navegacionResponsive);
}

function navegacionResponsive() {
    const navegacion = document.querySelector('.navegacion');

    navegacion.classList.toggle('mostrar'); // Esto reemplaza al if. Si está desaparece y si no estáaparece

    // if (navegacion.classList.contains('mostrar')) {
    //     navegacion.classList.toggle('mostrar');
    // } else {
    //     navegacion.classList.add('mostrar');
    // }
    
}