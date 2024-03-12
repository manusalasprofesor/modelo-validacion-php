// Enviar el formulario
const formulario = document.querySelector('#formulario1');



// Creamos las expresiones regulares y las almacenamos en un objeto
const expresiones = {
    nombre: /^[a-zA-ZÀ-ÿ\s]{1,40}$/,
    correo: /^[a-zA-Z0-9_.+-]+@[a-zA-Z0-9-]+\.[a-zA-Z0-9-,]+$/,
    // telefono2: /^[0-9]{7,14}$/
    telefono: /^([0-9]{3}[\s-]?){3}$/
}

// Estado inicial campos validación
const campos = {
    nombre: false,
    apellidos: false,
    correo: false,
    telefono: false
}

// Almacenamos en un array todos los campos de entrada
const inputs = document.querySelectorAll('#formulario1 input');

// Evaluamos la entrada de datos
inputs.forEach(function(input) {
    input.addEventListener('keyup', validarFormulario);
    input.addEventListener('blur', validarFormulario);
});

// Función para validar los campos del formulario
function validarFormulario(e) {
    switch (e.target.name) {
        case 'nombre':
            validarCampo(expresiones.nombre, e.target, 'nombre');
            break;
        case 'apellidos':
            validarCampo(expresiones.nombre, e.target, 'apellidos');
            break;
        case 'correo':
            validarCampo(expresiones.correo, e.target, 'correo');
            break;
        case 'telefono':
            validarCampo(expresiones.telefono, e.target, 'telefono');
            break;
    }
}

/*
expresion = expresiones.nombre, expresiones.correo, expresiones.telefono
input = e.target
campo = nombre, apellidos, correo, telefono
*/

function validarCampo(expresion, input, campo) {
    if (expresion.test(input.value)) {
        document.querySelector(`#campo_${campo}`).classList.remove('campo_incorrecto');
        document.querySelector(`#campo_${campo} i`).classList.remove('fa-circle-xmark');
        document.querySelector(`#campo_${campo}`).classList.add('campo_correcto');
        document.querySelector(`#campo_${campo} i`).classList.add('fa-circle-check');
        document.querySelector(`#campo_${campo} .dato_entrada_error`).classList.remove('dato_entrada_error_activo');
        campos[campo] = true;
    } else {
        document.querySelector(`#campo_${campo}`).classList.add('campo_incorrecto');
        document.querySelector(`#campo_${campo} i`).classList.add('fa-circle-xmark');
        document.querySelector(`#campo_${campo}`).classList.remove('campo_correcto');
        document.querySelector(`#campo_${campo} i`).classList.remove('fa-circle-check');
        document.querySelector(`#campo_${campo} .dato_entrada_error`).classList.add('dato_entrada_error_activo');
        campos[campo] = false;
    }
}


formulario.addEventListener('submit', function(e) {
    e.preventDefault();
    const terminos = document.querySelector('#terminos');
    if (campos.nombre && campos.apellidos && campos.correo && campos.telefono && terminos.checked) {
        // Enviamos el formulario
        setInterval(formulario.submit(), 10000);
        // formulario.reset();
        // eliminamos el mensaje de error
        document.querySelector('#mensaje_error').classList.remove('mensaje_error_activo');
        // eliminamos los iconos de chequeo
        document.querySelectorAll('.campo_correcto').forEach(function(icono) {
            icono.classList.remove('campo_correcto');
        });
        // activamos el mensaje de éxito
        document.querySelector('#mensaje_exito').classList.add('mensaje_exito_activo');
        setTimeout(function() {
            document.querySelector('#mensaje_exito').classList.remove('mensaje_exito_activo');
        }, 10000);
    } else {
        document.querySelector('#mensaje_error').classList.add('mensaje_error_activo');

    }
});