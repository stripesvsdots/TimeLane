<?php
//define page title
$title = 'form';

//include header template
require_once('layout/header.php'); 
?>

<body>
<br>
<div class="row">
        <div class="col s6"><img src="assets/images/Logo.png"></div>
        <div class="col s6 right-align">
            <div class="chip">
                <img src="assets/images/chiuaua.png">
                Anna Nomaly
            </div>
        </div>

    </div>
    <section class="section container" id="memory card form">
        <form class="col s8" method="POST" action="get_response.php">
            <div class="row">
                <h6 class="blue-grey-text text-darken-2"> Add a new memory </h6>
            </div>
            <div class="row">
                <div class="input-field col s6">
                    <i class="material-icons prefix ">calendar_today</i>
                    <input type="text" name="event_date" class="datepicker" id="event_date">

                    <label for="event_date">Choose a date</label>
                </div>
            </div>
            <div class="row">

                <div class="input-field col s6">
                    <i class="material-icons prefix ">title</i>
                    <input id="title" name="title" type="text" class="validate">
                    <label for="title">Title</label>
                </div>
            </div>
            <div class="row">
                <div class="input-field col s6">
                    <i class="material-icons prefix ">more_horiz</i>
                    <select name="events" id="events">
                        <option value="" disabled selected>Choose your option</option>
                        <?php
                        require_once('./models/event.php');
                        //print_r($all_events);    
                        foreach($all_events as $key => $value) {                   
                        echo '<option value = "'.$key.'">'.$value->name.'</option>';
                        }
                        ?>
                    </select>
                    <label>Event type</label>
                </div>
            </div>


            <div class="row">
                <div class="input-field col s6">
                    <i class="material-icons prefix ">note</i>
                    <textarea id="note" name="note" class="materialize-textarea"> </textarea>
                    <label for="note">Notes</label>
                </div>
            </div>
            <div class="row">
                <div class="input-field">
                    <button class="btn waves-effect waves-light pink darken-2" type="submit" name="action">Submit
                        <i class="material-icons right">send</i>
                    </button>
                </div>
            </div>
        </form>
        </div>
    </section>

    <script src="https://code.jquery.com/jquery-3.2.1.min.js"></script>
    <!-- Compiled and minified JavaScript -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/js/materialize.min.js"></script>
    <script>
        $(document).ready(function () {
            $('.datepicker').datepicker({
                autoclose: true
            });
            $('select').formSelect();

        });
    </script>
</body>

</html>