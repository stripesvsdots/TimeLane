<?php
    session_start();
	require_once('./controller/user_controller.php');
	$userController = new UserController;

	global $USER;
	$USER = $userController->validateUserSession();
	if ($USER == null)
	{
		header("Location: login_form.php?error='Invalid session'");
		die();
	}
?>