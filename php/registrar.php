<?php
session_start();

function agregarLibro($titulo, $autor, $precio, $cantidad) {
    if (!empty($titulo) && !empty($autor) && $precio > 0 && $cantidad > 0) {
        $_SESSION['libros'][] = [
            'titulo' => htmlspecialchars($titulo),
            'autor' => htmlspecialchars($autor),
            'precio' => (float)$precio,
            'cantidad' => (int)$cantidad
        ];
        return true;
    }
    return false;
}

$mensaje = '';
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    if (agregarLibro($_POST['titulo'], $_POST['autor'], $_POST['precio'], $_POST['cantidad'])) {
        $mensaje = 'Libro registrado correctamente.';
    } else {
        $mensaje = 'Error en el registro. Verifica los datos.';
    }
}
?>

<?php include "menu.php"; ?>

<div class="container mt-4">
    <h2>Registrar Nuevo Libro</h2>
    <p><?= $mensaje ?></p>
    <form method="POST">
        <label for="titulo">Título:</label>
        <input type="text" name="titulo" required class="form-control">
        
        <label for="autor">Autor:</label>
        <input type="text" name="autor" required class="form-control">
        
        <label for="precio">Precio:</label>
        <input type="number" name="precio" min="1" required class="form-control">
        
        <label for="cantidad">Cantidad:</label>
        <input type="number" name="cantidad" min="1" required class="form-control">
        
        <button type="submit" class="btn btn-primary mt-2">Registrar</button>
    </form>
</div>
