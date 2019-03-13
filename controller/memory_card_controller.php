<?php 
    require ('./models/memory_card.php');

    class MemoryController {
        public function index() {
            $card = new MemoryCard();
            $cards = $card->loadMemoryCardsFromDB();

            require ('views/memory_card_view.php');
        }

        
        public function getAllCardsWithInterval($from, $to, $max_entries) {

        }
        public function getAllCardsWithTypeAndInterval($type, $from, $to, $max_entries) {

        }
    }
?>    