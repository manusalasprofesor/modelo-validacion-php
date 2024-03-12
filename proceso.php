<?php
    // Declaración de variables para la recepción de datos
    $_contador = 0;
    $_nombre = validaDato($_POST['nombre']);
    $_apellidos = validaDato($_POST['apellidos']);
    $_correo = validaDato($_POST['correo']);
    $_telefono = validaDato($_POST['telefono']);
    $_terminos = validaDato($_POST['terminos']);

    function validaDato($_data){
        if (isset($_data) and !empty($_data)){
            return $_data;
        }
        else{
            $_data = null;
            return $_data;
        }
    }
    // Declaración de variables para dar forma al mail
    if ($_nombre == null or $_apellidos == null or $_correo == null or $_telefono == null or $_terminos == null){
        $_resultado = 'Los datos introducidos no son válidos';
    }
    else{
    
        $_resultado = 'Gracias por contactar con nosotros, en breve nos pondremos en contacto con usted';
        $_destinatario = 'mplazasaformacion@gmail.com';
        $_asunto = 'Enviado desde mi sitio web. Formulario de contacto';
        $_contenido = 'Nombre y apellidos: '.$_nombre.' '.$_apellidos."\n".
        'Correo Electrónico: '.$_correo."\n".
        'Teléfono de contacto: '.$_telefono."\n".
        'Acepta los términos y condiciones: '.$_terminos."\n";

        mail($_destinatario, $_asunto, $_contenido);
    }

    // ELEGIR UNA DE LAS DOS OPCIONES DE REDIRECCIONAMIENTO

    // Redirige al usuario de nuevo a la página del formulario

    // header("Location: contacto.php");

    // exit();

    // Redirigimos con JavaScript
    echo "
        <script>
            alert('Su formulario se ha enviado con éxito!!');
            window.location.href = 'contacto.php';
        </script>
    ";
?>

<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Modelo Básico de Maquetación Web</title>

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
    <header>
        <?php
            include('components/header.php');
        ?>
    </header>

    <!-- SOLUCIÓN QUE MUESTRA EL RESULTADO DEL ENVÍO EN UNA PÁGINA APARTE, SIN RETORNO A LA ANTERIOR (PODEMOS COLOCAR UN BOTÓN DE ENLACE O SIMPLEMENTE CON EL MENÚ DE NAVEGACIÓN) -->
    <!-- Contenido principal de la página -->
    <main>
        <h1>Recogida de datos</h1>
        <h2><?php echo $_resultado ?></h2>
    </main>

    <!-- Pie de página -->
    <footer>
        <?php
            include('components/footer.php');
        ?>
    </footer>

    <!-- Mis scripts -->
    <script src="js/menu-hamburguesa.js"></script>
</body>

</html>