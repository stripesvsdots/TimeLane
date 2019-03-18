<?php


class Model {

    public function connectDB(){
        //connect to database
        $conn = mysqli_connect('localhost', 'testname', 'test12name', 'Timelane_DB');

        //check connection
        if(!$conn){
            echo 'Connection error: ' . mysqli_connection_error();
        }

        return $conn;
    }

    public function loadFromDB($table) {
        $conn = $this->connectDB();
        //write querry for all memory cards
        $sql = 'SELECT * FROM '. $table;

        //make query & get result;
        $result = mysqli_query($conn, $sql);
        return $result;      
    }

    public function saveToDB($table, $column1, $column2, $column3, $value1, $value2, $value3) {
        $conn = $this->connectDB();
        //write querry to save data
        $query = 'INSERT INTO '. $table.'(';

        foreach($columns as $column){
            $query.$column .', ';
            
        }
        $query.') VALUES (';
        foreach ($columns as $column => $value){
            $query .$value. ', ';
        }
        $query.');';

        mysqli_query($conn, $$query);
        
        if(mysqli_query($conn, $query)){
            echo "Records inserted successfully.";
        } else{
            echo "ERROR: Could not able to execute $querry. " . mysqli_error($conn);
        }
    
    }
    
}

?>