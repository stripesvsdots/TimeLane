<?php
       var_dump($_POST);
        require('./controller/user_controller.php');
        $userController = new UserController;
        $userController->registerUserfromPOST($_POST);
?>