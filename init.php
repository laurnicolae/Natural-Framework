<?php
function __autoload($class_name)
{
    $filename = ucwords ($class_name) . '.php';
    $file = FILES_PATH . '/library/' . $filename;
    if (file_exists($file) == false)
    {
        return false;
    }
    include ($file);
}

if (function_exists('__autoload')) {
    spl_autoload_register('__autoload');
}

/*** a new app object ***/
$app = new App;



$app->router = new Core($app);

$app->view = new View($app);

$app->router->includeController();

#$app->authentication = new Authentication($app);

?>