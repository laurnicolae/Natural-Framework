<?php

/**
 * Class that deals with databases, especially with PDO
 *
 */
class Db {

    private $connection;

    public function __construct($dbconnection, $user, $password)
    {
        //PDO database connector
        try {
              $this->connection = new PDO($dbconnection, $user, $password);
              $this->connection->setAttribute( PDO::ATTR_ERRMODE, PDO::ERRMODE_WARNING ); //change this with $DBH->setAttribute( PDO::ATTR_ERRMODE, PDO::ERRMODE_SILENT ); or  $DBH->setAttribute( PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION ); in production environment
            }
        catch(PDOException $e)
            {
              echo $e->getMessage();
            }
    }

    /**
     * Method for requesting data from database
     *
     * @param string $sql
     * @return mixed
     */
    public function query($sql)
    {
        $data = array();
        foreach ($this->connection->query($sql) as $row)
        {
            $data[] = $row;
        }
        return $data;
    }

    /**
     * Method for pushing data to database
     *
     * @param string $sql
     * @return integer - number of affected rows
     */
    public function exec($sql)
    {
        $this->connection->exec($sql);
    }

    /**
     * Method for saving an array with data. Generates the INSERT or UPDATE query from $data array. If $id=0 is
     * insert, else is update.
     *
     * @param string $table
     * @param array $data
     * @param integer $id
     * @return integer - number of affected rows
     */
    public function saveData($table, $data, $id=0)
    {   
        if($id == 0){//INSERT
            $keys = implode(", ", array_keys($data));
            $values="";
            $countData = count($data);            
            for($i=0; $i < $countData; $i++){
                $values.="?, ";
            }
            $values = substr($values,0,-2);

            $sql = "INSERT INTO $table (".$keys.") VALUES ($values)";
            $prepared = $this->connection->prepare($sql);
            $affectedrows = $prepared->execute(array_values($data));
        }else{
            $keys = implode(" = ?, ", array_keys($data));
            $keys.= " = ?";
            $sql = "UPDATE $table SET ".$keys." WHERE id = ".$id."";
            
            $prepared = $this->connection->prepare($sql);
            $affectedrows = $prepared->execute(array_values($data));
        }
        return $affectedrows;
    }

    /**
     * Returns all records from a table
     * @param string $table
     * @return array
     */
    public function getAll($table)
    {
        $data = $this->query("SELECT * FROM main ORDER BY id DESC");
        return $data;
    }

    /**
     * Returns a specific record from a database by id
     * @param string $table
     * @param integer $id
     * @return array
     */
    public function getOne($table, $id)
    {
        $data = $this->query("SELECT * FROM main WHERE id=".$id." ORDER BY id DESC");
        return $data;
    }
}
?>
