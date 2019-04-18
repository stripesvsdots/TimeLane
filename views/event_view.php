<ul>
    <?php 
        //displaying the data from DB
        foreach($events as $event) {
            echo '<li>'.$event['IdEvent'].'</li>';
            echo '<li>'.$event['EventType'].'</li>';           
        } 
        
    ?>
</ul>