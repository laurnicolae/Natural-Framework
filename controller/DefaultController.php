<?php
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
    public $app;

    public function __construct($app)
    {
        $this->app = $app;
    }
}
?>
