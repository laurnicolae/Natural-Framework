<?php
require_once(FILES_PATH.'/controller/DefaultController.php');
// require the model class
require_once(FILES_PATH.'/model/MainModel.php');

$auth = new Authentication();

class Main extends DefaultController{

    /**
     * the model object
     * @access private
     */
    private $m;

    public function __construct($app)
    {
        $this->m = new MainModel();
        parent::__construct($app);
    }

    public function index($parameters = array()){
        
        $data = $this->m->data();
        
        include(FILES_PATH.'/view/main/index.php');
    }

}
?>
