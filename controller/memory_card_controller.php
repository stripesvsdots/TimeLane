<?php 
    require ('./validate_session.php');
    require ('./models/memory_card.php');

    class MemoryController {
        public function index() {
           $cards = MemoryCard::loadAllMemoryCardsFromDB();
           require ('views/memory_card_view.php');
        }

        public function createMemoryCardFromPOST($postData){
            $card = new MemoryCard();
            //get data from form
            $card->title = $postData['title'];
            $card->note = $postData['note'];
            $card->event_date = strtotime($postData['event_date']);
            $card->user_id = $loggedInUser->id;
            $card->event_id = $postData['events'];
    
            $card->saveToDB();

            $cards = MemoryCard::loadAllMemoryCardsFromDB();
            require ('views/memory_card_view.php');
        }
        

        public function deleteMemoryCard($id){
            MemoryCard::deleteMemoryCardFromDB($id);
        }




        
    }
?>     