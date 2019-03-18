<ul>
    <?php 
        //displaying the data from DB
        foreach($cards as $card) {
            echo '<li>'.$card['Title'].'</li>';
            echo '<li>'.$card['IdMemoryCard'].'</li>';
            echo '<li>'.$card['EventDate'].'</li>';
            echo '<li>'.$card['InputDate'].'</li>';
            echo '<li>'.$card['Note'].'</li>';
            
        } 
        
    ?>
</ul>