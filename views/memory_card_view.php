<!DOCTYPE HTML>
<html>

<head>
    <title>Timeline | Basic demo</title>



    <script src="https://cdnjs.cloudflare.com/ajax/libs/vis/4.21.0/vis.min.js"></script>
    <link href="https://cdnjs.cloudflare.com/ajax/libs/vis/4.21.0/vis.min.css" rel="stylesheet" type="text/css" />
</head>

<body>
    <div id="visualization">
        <div class="vis-timeline vis-bottom">
            <div class="vis-panel vis-bottom" style="width: 962px; left: -1px; top: 343px;">
                <div class="vis-time-axis vis-foreground" style="height: 82px;">
                    <div class="vis-text vis-minor vis-measure" style="position: absolute;">0</div>
                </div>
            </div>
        </div>
    </div>
    
    <script type="text/javascript">
        // DOM element where the Timeline will be attached
        var container = document.getElementById('visualization');

        // Create a DataSet (allows two way data-binding)
        var items = new vis.DataSet([
            <?php 

            $path = 'assets/images/solution.png';
            //displaying the data from DB
            foreach($cards as $card) {
                $event = $all_events[$card->event_id];
                echo '{';
                echo 'id: '.$card->id.', ';
                echo 'start: "'.date('Y-m-d', $card->event_date).'", ';
                echo 'content:\'<div>'.$card->title.'</div><img src="'.$event->img_url.'" style="width:32px; height:32px;">\'';
                
                //echo 'image: "' ' ;
                echo '},';
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

            $offset = ($endDate - $startDate)/10;
            $startDate -= $offset;
            $endDate += $offset;
        ?>
        // Configuration for the Timeline
        var options = {
            start: '<?php echo date('Y-m-d', $startDate) ?>',
            end: '<?php echo date('Y-m-d', $endDate) ?>'
        };

        // Create a Timeline
        var timeline = new vis.Timeline(container, items, options);
    </script>
</body>

</html>