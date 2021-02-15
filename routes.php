<?php
function call($controller, $action, $params = null)
{

    require_once('controllers/' . $controller . '_controller.php');

    switch ($controller) {

        case 'mains':
            $controller = new MainsController();
            break;
    }

    if ($params  != NULL) {

        $controller->{$action}($params);
    } else {

        $controller->{$action}();
    }
}

$controllers = array(
    'mains' => ['index']
);

if (array_key_exists($controller, $controllers)) {

    if (in_array($action, $controllers[$controller])) {

        call($controller, $action, $params);
    } else {

        call('mains', 'error');
    }
} else {

    call('mains', 'error');
}
