<?php
session_start();
	require 'db.php';

	unset($_SESSION['logged_user']);

	header('Location: MainNotAuthorization.html');
?>
