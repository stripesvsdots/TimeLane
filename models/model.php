<?php

class Model {

    public $conn = null;

    
    public function connectDB() {
        //connect to database
        if ($this->conn == null) {
            $this->conn = mysqli_connect('localhost', 'testname', 'test12name', 'Timelane_DB');

            //check connection
            if (!$this->conn) {
                echo 'Connection error: ' . mysqli_connection_error();
            }
        }
        
    }

    public static function loadAllFromTable($table, $order_by = null) {
        $model = new Model();
        $model->connectDB();
        //write querry for all memory cards
        $sql = 'SELECT * FROM '. $table;
        if ($order_by == null) {
            $sql .= ';';
        } else {
            $sql .= ' ORDER BY '.$order_by.';';
        }

        //make query & get result;
        $result = mysqli_query($model->conn, $sql);
        while($row = $result->fetch_array()) {
            $rows[] = $row;
        }
        return $rows;
    }
    public static function loadAllIdsFromTable($table) {
        $model = new Model();
        $model->connectDB();
        //write querry for all memory cards
        $sql = 'SELECT Id FROM '. $table . ';';

        //make query & get result;
        $result = mysqli_query($model->conn, $sql);
        if ($result == false) {
            echo "ERROR: Could not able to execute $query. " . mysqli_error($model->conn);
        }
        while ($row = $result->fetch_array()) {
            $rows[] = $row;
        }
        return $rows;
    }

    public function loadFromTable($table, $id, $columns) {
        assert($id != null);

        $this->connectDB();
        //write query to save data
        $query = 'SELECT ';

        if ($columns == null) {
            $query .= ' * ';
        } else {
            foreach($columns as $column => $value){
                $query .= $column . ',';
            } 
            $query = rtrim($query, ",");
        }

        $query .= ' FROM ' . $table . ' WHERE Id = ' . $id . ';';

        $result = mysqli_query($this->conn, $query);
        if ($result){
            
        } else{
            echo "ERROR: Could not able to execute $query. " . mysqli_error($this->conn);
        }

        if ($result->num_rows === 0) {
            // Oh, no rows! Sometimes that's expected and okay, sometimes
            // it is not. You decide. In this case, maybe actor_id was too
            // large? 
            echo "We could not find a match for Id $id, sorry about that. Please try again.";
            return;
        }

        return $result->fetch_assoc();
    }

    public function insertIntoTable($table, $columns) {
        $this->connectDB();
        //write querry to save data
        $query = 'INSERT INTO '. $table. '(';

        foreach($columns as $column => $value){
            $query.= $column .',';
        } 
        $query = rtrim($query, ",");

        $query.= ') VALUES (';
        foreach ($columns as $column => $value){
            $query .= '"'.$value.'",';
        }
        $query = rtrim($query, ",");
        $query.= ');';

        if (mysqli_query($this->conn, $query)){
            echo "Records inserted successfully.";
        } else{
            echo "ERROR: Could not able to execute $query. " . mysqli_error($this->conn);
        }
        return mysqli_insert_id($this->conn);
    }

    public function updateToTable($table, $id, $columns) {
        assert($id != null);

        $this->connectDB();
        //write querry to save data
        $query = 'UPDATE '. $table. ' SET ';

        foreach($columns as $column => $value){
            $query .= $table . '.' . $column . ' = ' . $value . ', ';
        } 
        $query = rtrim($query, ",");
        $query .= ';';

        if (mysqli_query($this->conn, $query)){
    
        } else{
            echo "ERROR: Could not able to execute $query. " . mysqli_error($this->conn);
        }
    }

    public function deleteFromTable($table, $id){
       // assert($id != null);
        $this->connectDB();
        //query to delete rows into a table by id
        $sql = 'DELETE FROM '. $table. ' WHERE Id = '.$id;
        mysqli_query($this->conn, $sql);
    }

}   

?>