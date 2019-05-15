<?php
	require_once('./controller/user_controller.php');
	$userController = new UserController;
	$loggedInUser = $userController->validateUserSession();
	if ($loggedInUser == null)
	{
		die("not logged in");
		//add redirect to login
	}
?>