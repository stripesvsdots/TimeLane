<?php
require_once ('./models/model.php');


class Event extends Model {
    public $id = '';
    private $event_date = '';
    private $input_date = '';
    
    public function loadEventfromDB(){
        $result = $this->loadFromDB('Events');
        return $result;

    }

    public function setID($new_id) {
        $id = $new_id;
    }
}