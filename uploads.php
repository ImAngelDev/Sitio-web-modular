<?php include 'inc/header.php'; ?>
<?php include 'inc/nav.php'; ?>

<?php

$mensaje = "";

$carpetaDestino = 'uploads/';

if ($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_FILES['imagen'])) {
    $ext_permitidas = ['jpg', 'jpeg', 'png', 'gif'];
    $nombreArchivo = $_FILES['imagen']['name']; 
    $tmpArchivo = $_FILES['imagen']['tmp_name']; 
    $extension = strtolower(pathinfo($nombreArchivo, PATHINFO_EXTENSION));

    if (in_array($extension, $ext_permitidas)) {
        if (move_uploaded_file($tmpArchivo, $carpetaDestino . $nombreArchivo)) {
            echo "<p style='color: green;'>Imagen subida correctamente.</p>";
        } else {
            echo "<p style='color: red;'>Error al mover la imagen.</p>";
        }
    } else {
        echo "<p style='color: red;'>Extensión no permitida.</p>";
    }
}

?>

<form action="" method="POST" enctype="multipart/form-data">
    <input type="file" name="imagen" required>
    <button type="submit">Subir Imagen</button>
</form>

<h2>Descargar Imágenes</h2>
<div class="imagenes">
<?php
$archivos = glob($carpetaDestino . "*.{jpg,jpeg,png,gif}", GLOB_BRACE);

foreach ($archivos as $archivo) {
    $nombre = basename($archivo);
    echo "<div class='imagen'>
            <img src='$carpetaDestino$nombre' alt='$nombre' style='max-width:150px;'><br>
            <a href='$carpetaDestino$nombre' download>Descargar</a>
          </div>";
}
?>
</div>

<?php include 'inc/footer.php'; ?>
