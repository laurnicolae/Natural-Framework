<?php

class DefaultModel {

   /**
     * The collection of objects required everywhere
     */
    protected $app;

    /*
     * @Database object array
     * @access private
     */
    public $db;

    public function __construct($app)
    {
        $this->app = $app;
        $this->db = new Db(DBCONNECTION, DBUSER, DBPASSWORD);
    }
    
}
?>