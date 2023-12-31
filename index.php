<?php
session_start();
require_once 'config/parameters.php';
require_once 'config/database.php';
require_once 'utils/utils.php';
require_once 'autoload.php';
require_once 'views/layout/header.php';
require_once 'views/layout/content.php';

if (!isset($_GET['controller']) || !isset($_GET['action'])) {
    $nombreControlador = DEFAULT_CONTROLLER;
    $action = DEFAULT_ACTION;
    $controlador = new $nombreControlador();
    $controlador->$action();
} else {
    $nombreControlador = $_GET['controller'].'Controller';
    $action = $_GET['action'];
    if (class_exists($nombreControlador) && method_exists($nombreControlador, $action)) {
        $controlador = new $nombreControlador();
        $controlador->$action();
    } else {
        $error = new ErrorController();
        $error->index();
    }
}

    require_once 'views/layout/footer.php';
?>

