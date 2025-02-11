<?php
session_start();

if (isset($_GET['id']) && isset($_SESSION['libros'][$_GET['id']])) {
    unset($_SESSION['libros'][$_GET['id']]);
    $_SESSION['libros'] = array_values($_SESSION['libros']); // Reindexar el array
}

header("Location: listado.php");
exit();
