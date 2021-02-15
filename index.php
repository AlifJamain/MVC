<?php

require_once('connection.php');

if (isset($_GET['controller']) && isset($_GET['action'])) {

    $controller = $_GET['controller'];
    $action     = $_GET['action'];

    if (isset($_GET['params'])) {

        $params = explode('/', filter_var(rtrim($_GET['params'], '/'), FILTER_SANITIZE_URL));
    } else {

        $params = NULL;
    }
} else {

    $controller = 'mains';
    $action     = 'index';
    $params = 'NULL';
}

require_once('views/layout.php');
