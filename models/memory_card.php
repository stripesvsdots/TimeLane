<?php
require_once ('./models/model.php');


class MemoryCard extends Model {
    public $id = '';
    public $event_date = '';
    public $input_date = '';
    public $user_id = '';
    public $title = '';
    public $event_id = '';
    public $image = '';
    public $note = '';
    public $max_date = '';

    //get the memory card id
    public function associateWithDB($id) {
        $this->id = $id;
        if ($id != null) {
            $this->loadFromDB();
        }
    }

    //get the Ids from Table and then construct a MemoryCard instance for each id with the constructor. The MemoryCard will retrieve the information from database, based on its ID. 
    public static function loadAllMemoryCardsFromDB() {
        $sqlResults = Model::loadAllIdsFromTable('MemoryCards', 'EventDate');
        $result = array();
        foreach($sqlResults as $sqlResult) {
            $card = new MemoryCard();
            $card->associateWithDB($sqlResult['Id']);
            array_push($result, $card);
        }
        return $result;
    }

    public static function deleteMemoryCardFromDB($id) {
        Model::deleteFromTable('MemoryCards', $id);
    }

    public function loadFromDB() {
        $columns = $this->loadFromTable('MemoryCards', $this->id, null);
        $this->event_date = strtotime($columns['EventDate']);
        $this->title = $columns['Title'];
        $this->note = $columns['Note'];
        $this->user_id = $columns['IdUser'];
        $this->event_id = $columns['IdEvent'];
    }

    public function saveToDB() {
        $columns = [
            'EventDate' => date("Y-m-d H:i:s", $this->event_date),
            'Title' => $this->title,
            'Note' => $this->note,
            'IdUser' => $this->user_id,
            'IdEvent' => $this->event_id
        ];

        if ($this->id == null) {
            $this->id = $this->insertIntoTable('MemoryCards', $columns);
            return $this->id != null ;
        } 
        
        return $this->updateToTable('MemoryCards', $this->id, $columns);
    }

    public function deleteFromDB() {
        deleteFromTable('MemoryCards', $this->id);
    }

    public function isValid() {
        if ($user_id == null) {
            return false;
        }
        if ($title == null) {
            return false;
        }
        return true;
    }
    public static function getMaxDate($table){
        $this->connectDB();
        //query to get the most recent date entry
        $sql = 'SELECT MAX (EventDate) AS "Max Date" 
        FROM '.$table.';';
        return mysqli_query($this->conn, $sql);

     
    }

}

?>