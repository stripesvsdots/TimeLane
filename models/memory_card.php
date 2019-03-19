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

    //constructor for id
    public function __construct($id) {
        $this->id = $id;
        if ($id != null) {
            $this->loadFromDB();
        }
    }

    //get the Ids from Table and then construct a MemoryCard instance for each id with the constructor. The MemoryCard will retrieve the information from database, based on its ID. 
    public static function loadAllMemoryCardsFromDB() {
        $sqlResults = Model::loadAllIdsFromTable('MemoryCards');
        $result = array();
        foreach($sqlResults as $sqlResult) {
            array_push($result, new MemoryCard($sqlResult['Id']));
        }
        return $result;
    }

    public function loadFromDB() {
        $columns = $this->loadFromTable('MemoryCards', $this->id, null);
        $this->eventDate = $columns['EventDate'];
        $this->title = $columns['Title'];
        $this->note = $columns['Note'];
        $this->user_id = $columns['IdUser'];
        $this->event_id = $columns['IdEvent'];
    }

    public function saveToDB() {
        $columns = [
            'EventDate' => $this->eventDate,
            'Title' => $this->title,
            'Note' => $this->note,
            'IdUser' => $this->user_id,
            'IdEvent' => $this->event_id
        ];
        if ($this->id == null) {
            $this->id = $this->insertIntoTable('MemoryCards', $columns);
        } else {
            $this->updateToTable('MemoryCards', $this->id, $columns);
        }
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
}

?>