<!DOCTYPE HTML>
<html>

<head>
    <title>Timeline</title>
   <link href="https://fonts.googleapis.com/css?family=Open+Sans" rel="stylesheet">
</head>

<body>

    <?php 
    //require_once('../validate_session.php');
    require_once('./models/memory_card.php');
    require_once('./models/event.php');


    $card_id = $_GET["card_id"];
    
    $card = new MemoryCard;
    $card->associateWithDb($card_id);
    $id_event = $card->event_id;

    $event = $all_events[$id_event];      
    echo '<div>'.$card->title.'</div>';
    echo '<div><p>'.$card->note.'</p></div>';
   
    echo '<img src="'.$event->img_url.'" style="width:64px; height:64px;">'

        
        ?>

</body>
</html>