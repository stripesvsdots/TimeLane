<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">

    <!-- Compiled and minified CSS -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/css/materialize.min.css">
    <!--Import Google Icon Font-->
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">

    <title>TimeLane</title>

</head>

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
    <div class = "row center-align">  
      <h5 class="grey-text text-darken-2">Your timelane</h5>
    </div>
    <?php

    require('./controller/memory_card_controller.php');
    $memoryController = new MemoryController;
    $memoryController->index();
    
    
?>
    <div class=" row center-align" style = "margin-top: 20px;">
        <a class="btn-floating btn-large waves-effect waves-light pink darken-2 " href="form.php"><i
                class="material-icons">add</i></a>
        <span class="text-grey darken-1">Add a new memory</span>
    </div>

    <script src="https://code.jquery.com/jquery-3.2.1.min.js"></script>
    <!-- Compiled and minified JavaScript -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/js/materialize.min.js"></script>
</body>

</html>