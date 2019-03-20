<?php
var_dump($_GET);
    require('./controller/memory_card_controller.php');

    $card_id = $_GET['card_id'];
    $memoryController = new MemoryController;
    $memoryController->deleteMemoryCard($card_id);
    

?>