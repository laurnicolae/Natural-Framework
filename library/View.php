<?php

/**
 * The view engine from MVC
 *
 */
class View {

    /*
     * @Variables array
     * @access private
     */
    private $vars = array();

    /**
     *
     * @set variables to be displayed
     * @param string $index
     * @param mixed $value
     * @return void
     */
    public function __set($index, $value)
    {
        $this->vars[$index] = $value;
    }

    /**
     *
     * @display a template
     * @param string $file
     */
    public function show($file)
    {
        $path = FILES_PATH . '/view/' . $file . '.php';
        if (!file_exists($path)){
            throw new Exception('File not found in '. $path);
            return false;
        }

        //Making variables available in views
        foreach ($this->vars as $key => $value){
            $$key = $value;
        }

        include ($path);
    }
}
?>
