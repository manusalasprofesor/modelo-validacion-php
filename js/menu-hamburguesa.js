const boton = document.querySelector('#icono i');
const enlaces = document.querySelector('#enlaces');

boton.addEventListener('click', function() {
    enlaces.classList.toggle('open');
    setTimeout(function() {
        boton.classList.toggle('fa-xmark');
    }, 600);
});