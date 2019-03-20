<?php 
    require ('./models/memory_card.php');

    class MemoryController {
        public function index() {
           $cards = MemoryCard::loadAllMemoryCardsFromDB();
           require ('views/memory_card_view.php');
        }

        public function createMemoryCardFromPOST($postData){
            $card = new MemoryCard(null);
            //get data from form
            $card->title = $postData['title'];
            $card->note = $postData['note'];
            $card->eventDate = date("Y-m-d", strtotime($postData['event_date']));
            $card->user_id = '1'; //the logged in user id
            $card->event_id = '2';
    
            $card->saveToDB();

            $cards = MemoryCard::loadAllMemoryCardsFromDB();
            require ('views/memory_card_view.php');
        }

        public function deleteMemoryCard($id){
            $card = new MemoryCard($id);
            $card->deleteFromDB();
        }


        
    }
?>     