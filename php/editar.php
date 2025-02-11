<?php
session_start();

if (!isset($_GET['id']) || !isset($_SESSION['libros'][$_GET['id']])) {
    die('Libro no encontrado.');
}

$id = $_GET['id'];
$libro = $_SESSION['libros'][$id];

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $_SESSION['libros'][$id] = [
        'titulo' => htmlspecialchars($_POST['titulo']),
        'autor' => htmlspecialchars($_POST['autor']),
        'precio' => (float)$_POST['precio'],
        'cantidad' => (int)$_POST['cantidad']
    ];
    header("Location: listado.php");
    exit();
}
?>

<?php include "menu.php"; ?>

<div class="container mt-4">
    <h2>Editar Libro</h2>
    <form method="POST">
        <label for="titulo">Título:</label>
        <input type="text" name="titulo" value="<?= $libro['titulo'] ?>" required class="form-control">
        
        <label for="autor">Autor:</label>
        <input type="text" name="autor" value="<?= $libro['autor'] ?>" required class="form-control">
        
        <label for="precio">Precio:</label>
        <input type="number" name="precio" value="<?= $libro['precio'] ?>" min="1" required class="form-control">
        
        <label for="cantidad">Cantidad:</label>
        <input type="number" name="cantidad" value="<?= $libro['cantidad'] ?>" min="1" required class="form-control">
        
        <button type="submit" class="btn btn-success mt-2">Actualizar</button>
    </form>
</div>
