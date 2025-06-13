<?php include 'inc/header.php'; ?>
<?php include 'inc/nav.php'; ?>

<div class="contenedor-principal">
    <aside>
        <?php include 'inc/sidebar.php'; ?>
    </aside>

    <main>
        <h2>Contacto</h2>
        <?php
        $archivo = fopen('datos/contacto.txt', 'r');
        while (!feof($archivo)) {
            echo "<p>" . fgets($archivo) . "</p>";
        }
        fclose($archivo);
        ?>

              
    </main>
</div>

<?php include 'inc/footer.php'; ?>
