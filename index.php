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
    <main>
        <!-- Contenido de la página -->
    </main>

    <!-- Pie de página -->
    <?php include('components/footer.php') ?>

    <!-- Mis scripts -->
    <script src="js/menu-hamburguesa.js"></script>

    <!-- Script para marcar el menú activo -->
    <script>
        document.querySelector('a[href="index.php"]').setAttribute('id', 'activo');
    </script>
</body>

</html>