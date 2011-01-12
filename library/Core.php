<?php

/**
 * The main class of the framework
 *
 */
class Core
{   
    /**
     * The collection of objects (used by Registry - includeController)
     * @var object
     */
    protected $app;


    public function __construct($app){
        $this->app = $app;
    }
    
    // Do not allow the clone operation
    final protected function __clone(){ }

    /**
     * @include the right controller file, instantialize the class and call the 
     * right method
     */
    final public function includeController()
    {
        /* define the module, if exists */
        if (!empty($_GET['module']))
        {
            $module = $_GET['module'];
        }

        if (empty($_GET['r'])){
            $route = DEFAULT_CONTROLLER;
        }
        else
        {
            $route = str_replace('.htm', '', $_GET['r']);
        }

        $parts = explode('/', $route);

        /* define the controller */
        $controller = ucfirst($parts[0]);

        /* remove the controller from the parts array, if exists */
        #unset($parts[0]);
        $removed = array_shift($parts);

        /* define the action */
        if (empty($parts[0])){
            $action = DEFAULT_ACTION;
        }
        else
        {
            $action = $parts[0];
            /* remove the action from the parts array, if exists */
            $removed = array_shift($parts);
        }

        //include and instantialize the right class
        $controllerPath = FILES_PATH.'/';
        if(!empty($module))
        {
            #$controllerPath.= $module.'/';
            $controllerPath.= 'controller/'.$module.'/'.$controller.'Controller.php';
        }else{
            $controllerPath.= 'controller/'.$controller.'Controller.php';
        }
        if(is_readable($controllerPath) == false){
            $controllerPath = 'controller/Error404Controller.php';
            $controller = 'Error404';
        }
        
        //include the controller file
        include($controllerPath);

        //send controller name to the view
        $this->app->view->controller = $controller;
        //send action name to the view
        $this->app->view->action = $action;
        
        //instantialize the controller class
        $controller = new $controller($this->app);

         //call the right method
         $controller->$action($parts);
        
    }
    
    
}
?>
