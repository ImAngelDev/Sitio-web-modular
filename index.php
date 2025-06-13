<?php include 'inc/header.php'; ?>
<?php include 'inc/nav.php'; ?>

<div class="contenedor-principal">
    <aside>
        <?php include 'inc/sidebar.php'; ?>
    </aside>

    <main>
        <h2>Bienvenido a mi sitio web</h2>
        <?php
        $archivo = fopen('datos/home.txt', 'r');
        while (!feof($archivo)) {
            echo "<p>" . fgets($archivo) . "</p>";
        }
        fclose($archivo);
        ?>
    </main>
</div>

<?php include 'inc/footer.php'; ?>
