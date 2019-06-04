<?php 
    require_once('./validate_session.php');
    require_once('./models/memory_card.php');


    class MemoryCardController {
        public function index() {
           $cards = MemoryCard::loadAllMemoryCardsFromDB();
           require_once('views/timeline_view.php');
        }

        public function createMemoryCardFromPOST($postData) {
            global $USER;

            $card = new MemoryCard();
            //get data from form
            $card->title = $postData['title'];
            $card->note = $postData['note'];
            $card->event_date = strtotime($postData['event_date']);
            $card->user_id = $USER->id;
            $card->event_id = $postData['events'];
            var_dump($card);
            return $card->saveToDB();
        }

        public function deleteMemoryCard($id){
            MemoryCard::deleteMemoryCardFromDB($id);
        }




        
    }
?>     