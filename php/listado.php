<?php
session_start();

if (!isset($_SESSION['libros'])) {
    $_SESSION['libros'] = [];
}

function obtenerLibros() {
    return $_SESSION['libros'];
}

$libros = obtenerLibros();
?>

<?php include "menu.php"; ?>

<div class="container mt-4">
    <h1>Listado de Libros</h1>
    <table class="table table-striped table-dark">
        <thead>
            <tr>
                <th>ID</th>
                <th>Título</th>
                <th>Autor</th>
                <th>Precio</th>
                <th>Cantidad</th>
                <th>Acciones</th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($libros as $index => $libro): ?>
                <tr>
                    <td><?= $index + 1 ?></td>
                    <td><?= $libro['titulo'] ?></td>
                    <td><?= $libro['autor'] ?></td>
                    <td><?= $libro['precio'] ?></td>
                    <td><?= $libro['cantidad'] ?></td>
                    <td>
                        <a href="editar.php?id=<?= $index ?>" class="btn btn-warning btn-sm">Editar</a>
                        <a href="eliminar.php?id=<?= $index ?>" class="btn btn-danger btn-sm">Eliminar</a>
                    </td>
                </tr>
            <?php endforeach; ?>
        </tbody>
    </table>
</div>