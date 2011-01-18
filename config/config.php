<?php
define('BASE_URL',  '/framework');

//the default controller, if not specified
define('DEFAULT_CONTROLLER', 'Main');

//the default action, if not specified
define('DEFAULT_ACTION', 'index');

define('DBCONNECTION', "mysql:host=localhost;dbname=framework");
define('DBUSER', "root");
define('DBPASSWORD', "");

define('DBCONNECTION1', "mysql:host=localhost;dbname=manfin");
define('DBUSER1', "root");
define('DBPASSWORD1', "");

//smarty template directory
define('TEMPLATEDIR', FILES_PATH.'/view');

?>