<?php 
    require ('./models/memory_card.php');

    class MemoryController {
        public function index() {
            $card = new MemoryCard();
            $cards = $card->loadMemoryCardsFromDB();
           // $card->saveMemoryCardsToDB();

            require ('views/memory_card_view.php');
        }

        
    }
?>     