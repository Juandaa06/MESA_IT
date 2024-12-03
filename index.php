<!DOCTYPE html>
<html lang="es">
    <?php include './inc/head.php';  ?>
<body>
<?php

// Verificar si $_GET['vista'] está definida y no es igual a '404'
if (isset($_GET['vista']) && $_GET['vista'] != '404') {
    // Comprobar si el archivo correspondiente existe en ./vistas/
    $file = './vistas/' . $_GET['vista'] . '.php';
    if (is_file($file)) {
        include './inc/navbar.php';
        include $file;
        include './inc/script.php';
        include './inc/footer.php';
        include './inc/spinner.php';
    }
    // Si el archivo no existe, enviar a error 404
    else {
        include './vistas/404.php';
    }
}
// Si no se define 'vista' o su valor es '404', también mostrar el error 404
else {
    include './vistas/404.php';
}

?>

</body>
</html>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script> 