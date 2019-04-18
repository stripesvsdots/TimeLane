<!DOCTYPE HTML>
<html>

<head>
    <title>Timeline</title>
    <link href="https://fonts.googleapis.com/css?family=Open+Sans" rel="stylesheet">

        <!-- Compiled and minified CSS -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/css/materialize.min.css">
    <script src="https://code.jquery.com/jquery-3.3.1.min.js"integrity="sha256-FgpCb/KJQlLNfOu91ta32o/NMZxltwRo8QtmkMRdAu8="
    crossorigin="anonymous"></script>    
    <script src="https://cdnjs.cloudflare.com/ajax/libs/vis/4.21.0/vis.min.js"></script>
    <link href="https://cdnjs.cloudflare.com/ajax/libs/vis/4.21.0/vis.min.css" rel="stylesheet" type="text/css" />
    <link rel="stylesheet" href="./style/style.css">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/sweetalert/2.1.2/sweetalert.min.js"></script>
</head>

<body>
    <div id="visualization">
        <div class="vis-timeline vis-bottom">
            <div class="vis-panel vis-bottom" style="width: 962px; left: -1px; top: 343px;">
                <div class="vis-time-axis vis-foreground" style="height: 82px;">
                    <div class="vis-text vis-minor vis-measure">0</div>
                </div>
            </div>
        </div>
    </div>
    <script type="text/javascript">
        function prettyConfirm(title, text, callback) {
            swal({
                title: title,
                text: text,
                type: 'warning',
                showCancelButton: true,
                confirmButtonColor: "#DD6B55"
            }, callback);
        }

        // DOM element where the Timeline will be attached
        var container = document.getElementById('visualization');

        // Create a DataSet (allows two way data-binding)
        var items = new vis.DataSet([
            <?php 
            require_once('./models/event.php');
            
            //displaying the data from DB
            foreach($cards as $card) {
                $event = $all_events[$card->event_id];           
                echo '{ id: '.$card->id.', ';
                echo 'start: "'.date('Y-m-d', $card->event_date).'", ';
                echo 'content:\'<div>'.$card->title.'</div><img src="'.$event->img_url.'" style="width:32px; height:32px;">\'';
                echo '}, ';
                    
                }
            ?>
        ]);
        <?php
            $startDate = time();
            $endDate = $startDate;

           
            
            if (count($cards) > 0) {
                $startDate = reset($cards)->event_date;
                $endDate = end($cards)->event_date;
                
            }

            $offset = ($endDate - $startDate)/20;
            $startDate -= $offset;
            $endDate += $offset;
            
        ?>
        // Configuration for the Timeline
        var options = {
            editable: true,
            start: '<?php echo date('Y-m-d', $startDate) ?>',
            end: '<?php echo date('Y-m-d', $endDate) ?>',
            onRemove: function (item, callback) {
                //prettyConfirm('Remove item', 'Do you really want to remove item ' + item.content + '?', function () {
                    if (true) {
                        //$.ajax
                        $.ajax({
                            url: "delete.php?id=" + item.id
                        }).done(function( msg ) {
                            if (msg.search("done") != -1) {
                                callback(item); // confirm deletion
                            } else {
                                alert("Failed to delete");
                                callback(null); // cancel deletion
                            }
                        });
                    } else {
                        callback(null); // cancel deletion
                    }
                //});
            }
        };
        // Create a Timeline
        var timeline = new vis.Timeline(container, items, options);
    </script>
</body>

</html>