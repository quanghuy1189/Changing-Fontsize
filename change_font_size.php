<?php
	if($_SERVER['REQUEST_METHOD'] == 'POST') {
		setcookie('FontSize', (int)$_POST['font-size'], time() + 60*60);
		header('Location: index.php');
	}

	$font = (isset ($_COOKIE['FontSize'])) ? $_COOKIE['FontSize'] .'px' : "16px";
?>
