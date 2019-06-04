<?php
	require_once('./controller/user_controller.php');
	$userController = new UserController;
	if ($userController->validateUserLogin($_POST) == false)
	{
		die("error logging in");
		//show the error to the user
		header('Location: login.php?error=true');
	}
	
	header('Location: timelane.php');
?>