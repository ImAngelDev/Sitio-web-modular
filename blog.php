<?php include 'inc/header.php'; ?>
<?php include 'inc/nav.php'; ?>

<div class="contenedor-principal">
    <aside>
        <?php include 'inc/sidebar.php'; ?>
    </aside>

    <main>
        <h2>Blog</h2>
        <ul>
            <?php
            $lineas = file('datos/blog.txt');
            foreach ($lineas as $linea) {
                echo "<li>" . htmlspecialchars($linea) . "</li>";
            }
            ?>
        </ul>
    </main>
</div>

<?php include 'inc/footer.php'; ?>
