<?php
require_once(FILES_PATH.'/controller/DefaultController.php');
// require the model class
require_once(FILES_PATH.'/model/MainModel.php');


class Main extends DefaultController{

    /**
     * the model object
     * @access private
     */
    private $m;

    public function __construct($app)
    {
        $m = new MainModel();
        parent::__construct($app);
    }

    public function index($parameters = array()){

        $this->app->view->assign('x', 'aaa');
        $this->app->view->display('test.tpl');
    }

}
?>
