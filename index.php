<?php
   require ('./validate_session.php');
 ?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1.0" />
  <title>Starter Template - Materialize</title>

  <!-- CSS  -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/css/materialize.min.css">
  <!--Import Google Icon Font-->
  <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
  <link rel="stylesheet" href="./style/landing_style.css">

</head>

<body>
  <nav class="white">
    <div class="nav-wrapper">
      <div class="container">
        <img src="assets/images/Logo.png">

        <ul id="nav-mobile" class="right hide-on-med-and-down">
          <li><a class="grey-text " href="login_form.php">Log in</a></li>
          <li><a class="grey-text" href="register_form.php">Sign up</a></li>
        </ul>
      </div>
    </div>
  </nav>



    <div class="section">
      <div class="container">
        <br><br>
        <div class="card z-depth-2 opacity">
          <h1 class="header center pink-text">Timelane</h1>
          <div class="row center">
            <h5 class="header col s12 grey-text">A fun way to organize your memories</h5>
          </div>
          <div class="row center">
            <a href="register_form.php" id="register-button" class="btn-large pink darken-2">Create an account!</a>
          </div>
        </div>
        <br><br>

      </div>
    </div>
  


  <div class="container ">
    <div class="section example ">

      <!--   Icon Section   -->
      <div class="row">
    <img class  = "responsive" src = "../assets/images/timeline.jpg">    
      </div>

    </div>
    <br><br>
  </div>
  
  <footer class="page-footer white">
    <div class="container">
      <div class="row">

  </footer>


  <!--  Scripts-->
  <script src="https://code.jquery.com/jquery-2.1.1.min.js"></script>
  <script src="js/materialize.js"></script>
  <script src="js/init.js"></script>

</body>

</html>