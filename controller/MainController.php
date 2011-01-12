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
        $data = $this->m->getAll('main');
        
        //sending data to the view
        $this->app->view->title = "Page title";

        $this->app->view->data = $data;
        $this->app->view->show('main/index');
    }
    
    public function add()
    {
        
        //sending data to the view
        $this->app->view->title = "Page title";
        $this->app->view->show('main/create');
    }
    
    public function show()
    {
        //receiving data from model
        $data = $this->m->getOne('main', Validate::sanitize($_GET['id']));
        
        //sending data to the view
        $this->app->view->data = $data;
        $this->app->view->title = "Page title";
        $this->app->view->show('main/show');
    
    }
    
    public function edit()
    {
        if(count($_SESSION['error'])>0){
            $this->app->view->error = $_SESSION['error'];
            unset($_SESSION['error']);
        }else{
            //receiving data from model
            $data = $this->m->getOne('main',  Validate::sanitize($_GET['id']));
        }
        
        //sending data to the view
        $this->app->view->data = $data;
        $this->app->view->title = "Page title";
        $this->app->view->show('main/edit');
    }
    
    public function delete()
    {
    
    }
    
    public function update()
    {
        $params =  Validate::sanitize($_POST);
        if($params['camp1']==''){$_SESSION['error']['camp1']='Campul 1 nu poate fi gol';}
        if($params['camp2']==''){$_SESSION['error']['camp2']='Campul 1 nu poate fi gol';}
        
        if(isset($_SESSION['error'])){
            header('Location: '.BASE_URL.'/main/edit?id='.$params['id'].'');
        }else{
            $_SESSION['notification']='Datele au fost modificate';
            header('Location: '.BASE_URL.'/main/');
        }
    }
    
    public function create()
    {
    
    }

}
?>
