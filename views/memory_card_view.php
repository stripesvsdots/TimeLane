<ul>
    <?php 
        //require('./controller/memory_card_controller.php');
        //$memoryController = new MemoryController;
        //$cards = $memoryController->index();

        foreach($cards as $card) {
            echo '<li>'.$card['Title'].'</li>';
        } 
        
    ?>
</ul>