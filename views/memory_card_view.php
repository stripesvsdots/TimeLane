<ul>
    <?php 
        //displaying the data from DB
        foreach($cards as $card) {
            echo '<li>'.$card->title.'</li>';
            echo '<li>'.$card->id.'</li>';
            echo '<li>'.$card->event_date.'</li>';
            echo '<li>'.$card->input_date.'</li>';
            echo '<li>'.$card->note.'</li>';
            echo '<a class="waves-effect waves-light btn"><i class="material-icons left">delete</i>Delete</a>';
            
            
        } 
        
    ?>
</ul>

