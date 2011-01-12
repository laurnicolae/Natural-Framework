<?php

/**
 * Validate or Sanitize inputs data
 *
 */
class Validate {

    /**
     * Sanitize variables received from user
     * @param char $var
     * @return mixed
     */
    public static function sanitize($var)
    {
	if(is_array($var)){
            foreach($var as $key => $row){
		if(is_array($row)){
                    foreach($row as $key1 => $row1){
                        $var[$key][$key1]=htmlentities($row1, ENT_QUOTES);
                    }
                }else{
                    $var[$key]=htmlentities($row, ENT_QUOTES);
                }
            }
	}else{
            $var=htmlentities($var, ENT_QUOTES);
	}
	return $var;
    }

    /**
     * Check if data from $data is valid, according to rules from $conditions
     * @param array $data the array with data
     * @param array $conditions validation rules
     * @return array
     */
    public static function validateData($data, $conditions)
    {
       # print_r($data); print_r($conditions);
    }

    /**
     * Validates if data is boolean
     * @param bool $data
     */
    private function boolean($data)
    {
        #if($data)
    }
}
?>
