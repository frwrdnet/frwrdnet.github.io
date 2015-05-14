<?php
if (isset($_POST['password'])) {
	if ($_POST['password']=='tasman') {
		setcookie('stella-login', true, time() + (86400 * 365), "/"); // 86400 = 1 day
		header("Location: ./index.php");
		//header("Location: ".$_SERVER['HTTP_REFERER']); 
	} else {
		setcookie('stella-login', false, time() + (86400 * 365), "/"); // 86400 = 1 day
		header("Location: ./index.php");
	}
}
?>