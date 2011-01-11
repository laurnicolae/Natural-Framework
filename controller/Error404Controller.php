<?php
require_once(FILES_PATH.'/controller/DefaultController.php');

class Error404 extends DefaultController
{ 
    public function __construct($app)
    {
        #$this->m = new MainModel();
        parent::__construct($app);
    }

    public function index($parameters = array()){
        
        include(FILES_PATH.'/view/error404/index.php');
    }
}
?>