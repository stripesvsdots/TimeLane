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

    public function setID($new_id) {
        $id = $new_id;
    }
    public function loadMemoryCardsFromDB() {

        $result = $this->loadFromDB('MemoryCards');
        return $result;

        
    }
    public function saveMemoryCardToDB() {
        $time = strtotime($_POST['event_date']);
        $eventDate = date("Y-m-d", $time);

        $columns = [
            'EventDate' => $eventDate,
            'Title' => $_POST['title'],
            'Note' => $_POST['note'],
            'IdUser' => "1",
            'IdEvent' => "2"
        ];
        $this->saveToDB('MemoryCards', $columns);

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