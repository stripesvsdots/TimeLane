<?php
        var_dump($_POST);
        require_once('./controller/user_controller.php');
        $userController = new UserController;
        $userController->registerUserfromPOST($_POST);
?>