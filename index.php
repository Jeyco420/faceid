<?php
// Evitar que el navegador guarde en caché esta redirección (opcional pero recomendado)
header("Cache-Control: no-store, no-cache, must-revalidate, max-age=0");
header("Cache-Control: post-check=0, pre-check=0", false);
header("Pragma: no-cache");

// Redirigir al usuario a access-passed.html
// IMPORTANTE: Si tu archivo es .php, cambia .html por .php abajo
header("Location: access-passed/index.php");

// Detener la ejecución del script para asegurar la redirección
exit();
?>