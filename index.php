<?php
session_start();

/* error reporting on */
error_reporting(E_ALL);

/* define the site path */
$files_path = realpath(dirname(__FILE__));
define ('FILES_PATH', $files_path);

/* include the config.php file */
include FILES_PATH.'/config/config.php';

/* include the init.php file */
include FILES_PATH.'/init.php';
?>
