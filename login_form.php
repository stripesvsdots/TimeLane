
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
	<div class = "container center-align">
        <div class="row">
            <h5 class="blue-grey-text text-darken-2"> Welcome back! </h5>

        </div>

        <form class="col s6" method="POST" action="validate_login.php"  onsubmit="checkForm(this);" autocomplete = "off">
            
            <div class="row">
					<div class="input-field inline">
                    	<i class="material-icons prefix">email</i>
                   		<input id="email" type="email" class="validate" name = 'email'>
                    <label for="email">Email</label>
                </div>
            </div>
            <div class="row">
                <div class="input-field inline">
                    <i class="material-icons prefix">vpn_key</i>
                    <input id="password" type="password" name="password" class="validate">
                    <label for="password">Password</label>
                </div>
            </div>
            <button class="btn waves-effect waves-light pink darken-2" type="submit" name="login"> Login
        </form>
	</div>
    </div>

<script>
function checkLogin(form)
  {
    // validation fails if the input is blank
    if(form.inputfield.value == "") {
      alert("Error: Input is empty!");
      form.inputfield.focus();
      return false;
    }

    // regular expression to match only alphanumeric characters and spaces
    var re = /^[\w ]+$/;

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


</body>