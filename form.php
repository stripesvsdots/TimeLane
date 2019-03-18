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

 
    <!--Let browser know website is optimized for mobile-->
    <meta name="viewport" content="width=device-width, initial-scale=1.0"/>

    <title>Form</title>
</head>
<body>
   <section class = "section container" id = "memory card form">
        <form class = "col s8" method = "POST"  action = "get_response.php">
            <div class = "row">
                <h4 class = "blue-grey-text text-darken-2"> Add a new memory </h4>
            </div>
            <div class="row">
                <div class="input-field col s6">
                <i class="material-icons prefix ">calendar_today</i>
                <input type = "text" name = "event_date" class = "datepicker" id = "event_date">
                
                <label for="event_date">Choose a date</label>
                </div>
            </div>
            <div class="row">
                
                <div class="input-field col s6">
                <i class="material-icons prefix ">title</i>
                <input id="title" name ="title" type="text" class="validate">
                <label for="title">Title</label>
                </div>
            </div>
            <div class="row">
                <div class="input-field col s6">
                <i class="material-icons prefix ">more_horiz</i>
                <select>
                <option value="" disabled selected>Choose your option</option>
                <option value="1">lovelife</option>
                <option value="2">friendship</option>
                <option value="3">education</option>
                <option value="4">jobs</option>
                <option value="5">birthday party</option>
                <option value="6">party</option>
                <option value="7">concerts</option>
                <option value="8">movies</option>
                <option value="9">books</option>
            </select>
                <label>Event type</label>
                </div>
            </div>
            
            
            <div class="row">
                <div class="input-field col s6">
                <i class="material-icons prefix ">note</i>
                <textarea id = "note" name = "note" class = "materialize-textarea"> </textarea>
                <label for="note">Notes</label>
                </div>
            </div>
            <div class="row">
                <div class = "input-field">
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
      $(document).ready(function(){
          $('.datepicker').datepicker({
                autoclose: true
          });
          $('select').formSelect();
      
      });
    </script>
</body>
</html>