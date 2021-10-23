<?php
	session_destroy();
	unset($_SESSION['id']);
	header('location: index.php');
?>
