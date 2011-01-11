<?php
require_once(FILES_PATH.'/model/DefaultModel.php');

class MainModel extends DefaultModel{
    
    /**
     * The collection of objects required everywhere
     */
    
    public function __construct($app)
    {
        parent::__construct($app);
    }

    public function add()
    {
        #$data = array("camp1" => 'test11', "camp2"=>"camp22", "camp3"=>"555", "camp4"=>"test44");
        #$a = $this->db->saveData("main", $data, 9);
    }

}
?>