<?php 
    require ('./models/event.php');

    class EventController {
        public function index() {
            $event = new Event();
            $events = $event->loadEventFromDB();

            require ('views/event_view.php');
        }


    }
?>     