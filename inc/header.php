<?php
$pagina = basename($_SERVER['PHP_SELF']);

switch($pagina){
    case 'index.php':
        $titulo = 'Inicio'; 
        break; 
    case 'contacto.php':
        $titulo = 'Contacto'; 
        break;
    case 'blog.php':
        $titulo = 'Blog'; 
        break; 
    case 'uploads.php':
        $titulo = 'Uploads';
        break;
    default:
        $titulo = 'Mi Web Modular'; 
}
?>
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <title><?php echo $titulo; ?> | Mi Web Modular</title>
    <link rel="stylesheet" href="styles.css" />
</head>
<body>
    <header>
        <h1><?php echo $titulo; ?></h1>
    </header>
