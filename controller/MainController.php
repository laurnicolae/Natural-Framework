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
        $this->m = new MainModel($app);
        parent::__construct($app);
    }

    public function index($parameters = array()){

        //receiving data from model
        $data = $this->m->getAll();
        
        //sending data to the view
        $this->app->view->title = "Page title";

        $this->app->view->data = $data;
        $this->app->view->show('main/index');
    }
    
    public function add()
    {

        
        //sending data to the view
        $this->app->view->data = $data;
        $this->app->view->title = "Page title";
        $this->app->view->show('main/create');
    }
    
    public function show()
    {
        //receiving data from model
        $data = $this->m->getOne($_GET['id']);
        
        //sending data to the view
        $this->app->view->data = $data;
        $this->app->view->title = "Page title";
        $this->app->view->show('main/show');
    
    }
    
    public function edit()
    {
    
    }
    
    public function delete()
    {
    
    }
    
    public function update()
    {
    
    }
    
    public function create()
    {
    
    }

}
?>
