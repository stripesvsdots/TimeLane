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
    public function saveToDB() {
    }
}

?>