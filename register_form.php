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
    <link rel="stylesheet" href="./style/style.css">


    <!--Let browser know website is optimized for mobile-->
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
</head>

<body>
    <div class="container col s12">
        <div class="row">
            <div class="col s6"><img src="assets/images/Logo.png"></div>
            <div class="col s6 right-align">
            </div>
        </div>
        <br>
        <br>

        <div class="row">
        <div class = "card col s6 m4">
      
            <h5 class="blue-grey-text text-darken-2"> Create account </h5>
        </div>
        </div>

        <form class="col s6" method="POST" action="validate_register.php"  onsubmit="checkForm(this);" autocomplete = "off">
            <div class="row">
                <div class="input-field hoverable col s6">
                    <i class="material-icons prefix">contacts</i>
                    <input id="first_name" type="text" name="first_name" class="validate">
                    <label for="first_name">First Name</label>
                </div>
                <div class="input-field hoverable col s6">
                    <i class="material-icons prefix">contacts</i>
                    <input id="last_name" type="text" name="last_name" class="validate">
                    <label for="last_name">Last Name</label>
                </div>
            </div>
            <div class="row">
                <div class="input-field hooverable col s6">
                    <i class="material-icons prefix ">calendar_today</i>
                    <input type="text" name="birthday" class="datepicker" id="birthday">

                    <label for="birthday">Birthday</label>
                </div>

                <div class="input-field hoverable col s6">
                    <i class="material-icons prefix">email</i>
                    <input id="email" type="email" class="validate" name = 'email'>
                    <label for="email">Email</label>
                </div>
            </div>
            <div class="row">
                <div class="input-field hoverable col s6">
                    <i class="material-icons prefix">vpn_key</i>
                    <input id="password" type="password" name="password" class="validate">
                    <label for="password">Password</label>
                </div>
                <div class="input-field hoverable col s6">
                    <i class="material-icons prefix">replay</i>
                    <input id="password2" type="password" name="password2" class="validate" >
                    <label for="password2">Retype Password</label>
                </div>
            </div>
            <button class="btn waves-effect waves-light pink darken-2" type="submit" name="action"> Register
        </form>

    </div>

<script>
//check matching passwords
var password = document.getElementById("password")
var password2= document.getElementById("password2");

function validatePassword(){
  if(password.value != password2.value) {
    password2.setCustomValidity("Passwords Don't Match");
  } else {
    password2.setCustomValidity('');
  }
}

password.onchange = validatePassword;
password2.onkeyup = validatePassword;

function checkForm(form)
  {
      console.log("miau");
    // validation fails if the input is blank
    if(form.inputfield.value == "") {
      alert("Error: Input is empty!");
      form.inputfield.focus();
      return false;
    }

    // regular expression to match only alphanumeric characters and spaces
    let re = /^[\w ]+$/;

    // validation fails if the input doesn't match our regular expression
    if(!re.test(form.inputfield.value)) {
      alert("Error: Input contains invalid characters!");
      form.inputfield.focus();
      return false;
    }

    // validation was successful
    return true;
  }

</script>


    <script src="https://code.jquery.com/jquery-3.2.1.min.js"></script>
    <!-- Compiled and minified JavaScript -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/js/materialize.min.js"></script>
    <script>
        $(document).ready(function () {
            $('.datepicker').datepicker({
                autoclose: true


            });
        });
    </script>

</body>