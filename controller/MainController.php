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
        $this->view->assign('controller', 'main');

        if(isset($_SESSION['notification'])){
            $this->view->assign('notification', $_SESSION['notification']);
            unset($_SESSION['notification']);
        }
    }

    public function index($parameters = array()){

        //receiving data from model
        $data = $this->m->getAll('main');
        
        //sending data to the view
        $this->view->assign('title', 'Page title');

        $this->view->assign('data', $data);
        $this->view->display('main/index.tpl');
    }
    
    public function add()
    {
        if(isset($_SESSION['error'])){
            $this->view->assign('error', $_SESSION['error']);
            unset($_SESSION['error']);
        }
        if(isset($_SESSION['data'])){
            $this->view->assign('data', $_SESSION['data']);
        }
        
        //sending data to the view
        $this->view->assign('action', 'add');
        $this->view->assign('title', 'Page title');
        $this->view->display('main/create.tpl');
    }
    
    public function show()
    {
        //receiving data from model
        $data = $this->m->getOne('main', Validate::sanitize($_GET['id']));
        
        //sending data to the view
        $this->view->assign('id', $_GET['id']);
        $this->view->assign('data', $data);
        $this->view->assign('title', 'Page title');
        $this->view->display('main/show.tpl');
    
    }
    
    public function edit()
    {
        if(isset($_SESSION['error'])){
            $this->view->assign('error', $_SESSION['error']);
            unset($_SESSION['error']);
        }
        //receiving data from model
        $data = $this->m->getOne('main',  Validate::sanitize($_GET['id']));
        
        //sending data to the view
        $this->view->assign('data', $data);
        $this->view->assign('action', 'edit');
        $this->view->assign('title', 'Page title');
        $this->view->display('main/edit.tpl');
    }
    
    public function delete()
    {
        if(isset($_POST['delete'])){
            $affectedRows = $this->m->delete('main', Validate::sanitize($_POST['id']));
             $_SESSION['notification']='Datele au fost sterse.';
            header('Location: '.BASE_URL.'/main/');
        }else{
            $this->view->assign('id', $_GET['id']);
            $this->view->display('main/delete.tpl');
        }
    }
    
    public function update()
    {
        $params =  Validate::sanitize($_POST);
        if($params['camp1']==''){$_SESSION['error']['camp1']='Campul 1 nu poate fi gol';}
        if($params['camp2']==''){$_SESSION['error']['camp2']='Campul 2 nu poate fi gol';}
        
        if(isset($_SESSION['error'])){
            header('Location: '.BASE_URL.'/main/edit?id='.$params['id'].'');
        }else{
            $affectedRows = $this->m->saveData('main', $params, $params['id']);

            $_SESSION['notification']='Datele au fost modificate';
            header('Location: '.BASE_URL.'/main/');
        }
    }
    
    public function create()
    {
        $params =  Validate::sanitize($_POST);
        if($params['camp1']==''){$_SESSION['error']['camp1']='Campul 1 nu poate fi gol';}
        if($params['camp2']==''){$_SESSION['error']['camp2']='Campul 2 nu poate fi gol';}

        if(isset($_SESSION['error'])){
            $_SESSION['data'][0] = $params;
            header('Location: '.BASE_URL.'/main/add');
        }else{
            if(isset($_SESSION['data'])){
                unset($_SESSION['data']);
            }
            $affectedRows = $this->m->saveData('main', $params);

            $_SESSION['notification']='Datele au fost adaugate';
            header('Location: '.BASE_URL.'/main/');
        }
    }

}
?>
