<?php
	session_start();
	if(($_POST['login'] == 'lgrd48') and ($_POST['pas'] == 'lgrd4848')) {
		$_SESSION['auth'] = 1;
		header('Location: ../../main.php');
	}
	else
	{
		$_SESSION['auth'] = 0;
		header('Location: ../../index.php');
	}
	if($_SESSION['auth'] == 1) {
		header('Location: ../../main.php');
	}
?>
