<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>
        <?php 
        $titles = [
            'inicio' => 'Limpieza Láser Industrial | Precisión sin contacto',
            'nosotros' => 'Nosotros | Limpieza Láser Industrial',
            'contacto' => 'Contacto | Solicita tu cotización',
            'servicios' => 'Servicios | Limpieza Láser Industrial',
        ];
        echo $titles[$page] ?? 'Limpieza Láser Industrial';
        ?>
    </title>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;600;700&family=Montserrat:wght@400;500;600&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css">
    <!-- AOS Animation Library -->
<link href="https://unpkg.com/aos@2.3.4/dist/aos.css" rel="stylesheet">
<!-- AOS Animation CSS -->
<link href="https://unpkg.com/aos@2.3.4/dist/aos.css" rel="stylesheet">
<script src="https://unpkg.com/aos@2.3.4/dist/aos.js"></script>
    
    
    <!-- ✅ RUTAS ABSOLUTAS: incluye /PROYECT/ -->
    <link rel="stylesheet" href="/PROYECT/assets/css/global.css">
    
    <?php if ($page === 'inicio'): ?>
        <link rel="stylesheet" href="/PROYECT/assets/css/inicio.css">
    <?php endif; ?>

        <?php if ($page === 'nosotros'): ?>
        <link rel="stylesheet" href="/PROYECT/assets/css/nosotros.css">
    <?php endif; ?>

        <?php if ($page === 'servicios'): ?>
        <link rel="stylesheet" href="/PROYECT/assets/css/servicios.css">
    <?php endif; ?>


        <?php if ($page === 'contacto'): ?>
        <link rel="stylesheet" href="/PROYECT/assets/css/contacto.css">
    <?php endif; ?>
</head>