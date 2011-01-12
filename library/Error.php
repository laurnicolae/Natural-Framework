<?php

/**
 * Dealing with errors
 */
class Error {
     /**
     * @the errors array
     * @access private
     */
     private $errors = array();

     /**
     *
     * @set undefined variables
     * @param string $index
     * @param mixed $value
     *
     */
     public function __set($index, $value)
     {
            $this->app[$index] = $value;
     }

     /**
     * @get variables
     * @param mixed $index
     * @return mixed
     */
     public function __get($index)
     {
            return $this->app[$index];
     }
}
?>
