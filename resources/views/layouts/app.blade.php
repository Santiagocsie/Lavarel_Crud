<!DOCTYPE html>
<html lang="es">
<head>
    <!-- Define el conjunto de caracteres para soportar caracteres especiales y tildes -->
    <meta charset="UTF-8">
    
    <!-- Configura la vista para que el diseño sea responsive en dispositivos móviles -->
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    
    <!-- Define el título de la página dinámicamente con Blade -->
    <title>@yield('title')</title>

    <!-- Enlace a la hoja de estilos de Bootstrap 5 desde un CDN -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">

    <!-- Opcional: Incluye los íconos de Bootstrap -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons/font/bootstrap-icons.css" rel="stylesheet">
</head>
<body>
    <div class="container mt-4">
        <!-- Sección de contenido dinámica que será definida en las vistas que extiendan esta plantilla -->
        @yield('content')
    </div>

    <!-- Scripts de Bootstrap (incluye JavaScript y Popper.js desde un CDN) -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
