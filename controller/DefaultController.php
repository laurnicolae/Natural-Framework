<?php
require_once FILES_PATH.'/library/Smarty/Smarty.class.php';

/**
 * The default controller, parent of all controllers. The default actions of
 * the application (like menu).
 *
 */
class DefaultController {

    /**
     * The collection of objects
     * @var object
     */
    protected $app;

    /**
     * The view object (Smarty) - available only in controllers
     * @var object
     */
    protected $view;

    public function __construct($app)
    {
        $this->app = $app;
        $this->view = new Smarty();
        $this->view->setTemplateDir(TEMPLATEDIR);
        $this->view->setCaching(false);
        $this->view->debugging = false;
        $this->view->assign('base_url', BASE_URL);
    }
    
}
?>
