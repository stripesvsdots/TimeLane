<?php
require ('./models/model.php');


class MemoryCard extends Model {
    private $id = '';
    private $event_date = '';
    private $input_date = '';
    private $user_id = '';
    public $title = '';
    private $event_id = '';
    private $image = '';
    private $note = '';

    public function getAllCardsWithTimeSpacing(/*$spacing, $max_entries*/) {
        $memoryCards = array();
        $memoryCards[0] = new MemoryCard();
        $memoryCards[0]->title = "another random title";
        $memoryCards[1] = new MemoryCard();
        $memoryCards[1]->title = "some random title";
        return $memoryCards;
    }

    public function setID($new_id) {
        $id = $new_id;
    }
    public function loadMemoryCardsFromDB() {

        $result = $this->loadFromDB('MemoryCards');
        //return $result;
        return $result;

        
    }
    public function saveToDB() {
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