<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Modelo Básico para Maquetación Web</title>

    <!-- Font Awesome -->
    <script src="#" crossorigin="anonymous"></script> <!-- Colocar el script de Font Awesome -->


    <!-- Google Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Merriweather:ital,wght@0,400;0,700;1,400&family=Red+Hat+Mono:ital,wght@0,400;0,700;1,400&display=swap" rel="stylesheet">

    <!-- Mis estilos -->
    <link rel="stylesheet" href="css/mystyle.css">

</head>

<body>
    <!-- Cabecera de la página con menú de navegación -->
    <?php include('components/header.php') ?>

    <!-- Contenido Principal -->
    <main id="formulario">
        <!-- Contenido de la página -->
        <div id="container-form">
            <form action="proceso.php" method="POST" name="formulario1" id="formulario1">

                <!-- Campo para el nombre -->
                <fieldset id="campo_nombre">
                    <label for="nombre" class="etiqueta_entrada">Nombre</label>
                    <div class="entrada_campo">
                        <input type="text" class="dato_entrada" name="nombre" id="nombre" autocomplete="off">
                        <i class="estado_validacion fa-solid fa-circle-xmark fa-lg"></i>
                    </div>
                    <p class="dato_entrada_error">Introduzca un nombre válido</p>
                </fieldset>

                <!-- Campo para los apellidos -->
                <fieldset id="campo_apellidos">
                    <label for="apellidos" class="etiqueta_entrada">Apellidos</label>
                    <div class="entrada_campo">
                        <input type="text" class="dato_entrada" name="apellidos" id="apellidos" autocomplete="off">
                        <i class="estado_validacion fa-solid fa-circle-xmark fa-lg"></i>
                    </div>
                    <p class="dato_entrada_error">Introduzca unos apellidos válidos</p>
                </fieldset>

                <!-- Campo para el correo electrónico -->
                <fieldset id="campo_correo">
                    <label for="correo" class="etiqueta_entrada">Correo Electrónico</label>
                    <div class="entrada_campo">
                        <input type="email" class="dato_entrada" name="correo" id="correo" autocomplete="off">
                        <i class="estado_validacion fa-solid fa-circle-xmark fa-lg"></i>
                    </div>
                    <p class="dato_entrada_error">Introduzca un correo electrónico válido</p>
                </fieldset>

                <!-- Campo para el teléfono -->
                <fieldset id="campo_telefono">
                    <label for="telefono" class="etiqueta_entrada">Teléfono</label>
                    <div class="entrada_campo">
                        <input type="tel" class="dato_entrada" name="telefono" id="telefono" autocomplete="off">
                        <i class="estado_validacion fa-solid fa-circle-xmark fa-lg"></i>
                    </div>
                    <p class="dato_entrada_error">Introduzca un número de teléfono válido</p>
                </fieldset>

                <!-- Campo Términos y Política de Privacidad -->
                <fieldset id="campo_terminos">
                    <label for="terminos" class="etiqueta_entrada">
                        <input type="checkbox" name="terminos" id="terminos" class="terminos_checkbox">
                        Acepto las condiciones y términos de la política de privacidad
                    </label>
                </fieldset>

                <!-- Mensaje de error -->
                <div class="mensaje_error" id="mensaje_error">
                    <p><i class="fa-solid fa-triangle-exclamation"></i>&nbsp;<b>Revise los datos introducidos</b></p>
                </div>

                <!-- Botón de enviar y mensaje de éxito -->
                <div class="campo_btn_enviar">
                    <input type="submit" class="btn_envio" value="Enviar Formulario">
                    <p class="mensaje_exito" id="mensaje_exito">Mensaje enviado con éxito</p>
                </div>
            </form>
        </div>
    </main>

    <!-- Pie de página -->
    <?php include('components/footer.php') ?>

    <!-- Mis scripts -->
    <script src="js/menu-hamburguesa.js"></script>
    <script src="js/form-script.js"></script>

    <!-- Script para marcar el menú activo -->
    <script>
        document.querySelector('a[href="contacto.php"]').setAttribute('id', 'activo');
    </script>
</body>

</html>