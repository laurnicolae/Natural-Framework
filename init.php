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

#$app->view = new View($app);

//db1
//last parameter shows if it is the default connection
$connections['framework'] = array(DBCONNECTION, DBUSER, DBPASSWORD, '1');
//db2
#$connections['manfin']    = array(DBCONNECTION1, DBUSER1, DBPASSWORD1);
$app->connections = $connections;

$app->router->includeController();

#$app->authentication = new Authentication($app);

?>