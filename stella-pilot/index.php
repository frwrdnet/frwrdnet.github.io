<?php

if ($_COOKIE['stella-login']) {
	
	/* ERROR REPORTING */
	//error_reporting(E_ALL);
	
	/* SETTINGS */
	$settings['show_jobs'] = false;
	$settings['show_updates'] = false;
	$settings['show_notifications'] = false;
	
	/* DATABASE */
	require_once('lib/data/db.php');
	
	/* FUNCTIONS */
	require_once('lib/php/functions.php');
	
	/* Logged in? */
	$logged = 'out';
	if (isset($_COOKIE['stella-login'])) {
		// cookied
		$logged = $_COOKIE['stella-login'];
	}
	
	/* GET LOAD PAGE */
	$id = (isset($_GET['id'])) ? $_GET['id'] : 'home';
	$content = (file_exists('sections/'.$id.'.php')) ? $id : 'home';
	
	if ($_GET['out']==true) {
		setcookie('stella-login', false, time() + (86400 * 365), "/"); // 86400 = 1 day
		header("Location: ./index.php");
	}

?>

<html>
<head>
	<title>Welcome to [Stella]<?php if ($id) { echo(' | '.ucfirst($id)); } ?></title>
	<!-- jQuery 2.1.3 -->
	<script src="lib/js/jquery-2.1.3.min.js"></script>
	<!-- Bootstrap 3.3.4 -->
	<link rel="stylesheet" href="lib/css/bootstrap.min.css">
	<!-- <link rel="stylesheet" href="lib/css/bootstrap-theme.min.css"> -->
	<script src="lib/js/bootstrap.min.js"></script>
	<!-- Repo.js -->
	<script src="lib/js/repo.js"></script>
	<!-- Stella Functions -->
	<script src="lib/js/functions.js"></script>
	<!-- Stella Styles -->
	<link rel="stylesheet" href="lib/css/styles.css">
	<link rel="stylesheet" href="lib/css/media-queries.css">
	<!-- togetherJS -->
	<!--<script src="https://togetherjs.com/togetherjs-min.js"></script>-->
	<script>
		var logged = '<?php global $logged; echo($logged); ?>';
	</script>
</head>
<body>
	<div class="container-fluid">
		
		<!-- HEADER -->
		<header id="header">
			<div class="container">
				<div class="row">
					<img class="header-logo image-responsive pull-left" src="lib/img/cisco.png" alt="Cisco Logo">
					<h1 class="header-title pull-left"><a class="logo-title" href="./?id=home">[Stella]</a></h1>
					<ul class="menu-list row list-unstyled list-inline pull-left">
						<li class="menu-item"><a class="menu-link <?php if (strtolower($id)=='experiences') echo('selected'); ?>" href="./?id=experiences">Experiences</a></li>
						<li class="menu-item"><a class="menu-link <?php if (strtolower($id)=='spaces') echo('selected'); ?>" href="./?id=spaces">Spaces</a></li>
						<li class="menu-item"><a class="menu-link <?php if (strtolower($id)=='dashboard') echo('selected'); ?>" href="./?id=dashboard">Dashboard</a></li>
						<!-- <li class="menu-item"><button onclick="TogetherJS(this); return false;">Start TogetherJS</button></li> -->
					</ul>
					<div id="user-account">
						<?php if ($logged=='out') { ?>
						<a id="login-button" class="btn btn-button pull-right" href="./login.php?logged=in">Log in</a>
						<?php } else { ?>
						<div class="account-button pull-right">
							<a id="account-toggle" href="#">[Username]</a> <img class="img-circle" src="lib/img/?36x36" alt="[Username]'s avatar">
							<ul id="account-menu">
								<li><a href="./?id=dashboard">Dashboard</a></li>
								<li><a href="./?id=profile">Profile</a></li>
								<hr/>
								<li><a href="login.php?logged=out">Log Out</a></li>
							</ul>
						</div>
						<?php } ?>
					</div>
				</div><!-- .row -->
			</div><!-- .container -->
		</header>

		<!-- CONTENT -->
		<div id="content">
			
				<?php include('sections/'.$content.'.php'); ?>

			</div><!-- .container -->
		</div><!-- #stage -->
		
		<!-- FOOTER -->
		<footer id="footer">
			<div class="container">
				<div class="row">
					<div class="copyright col-xs-12">Copyright &copy;2015 Cisco Systems. All rights reserved.</div>
				</div><!-- .row -->
			</div><!-- .container -->
		</footer>
	</div>
	
	<!-- SPARK -->
	<div id="spark" class="container">
		<div id="sparkicon" class="icon">Spark</div>
		<div id="sparkbox" class="on">
			<div class="close">&times;</div>
			<iframe src="https://web.ciscospark.com/#/rooms/38bacbf0-6ea6-11e4-ad18-09f4e8f62c78" id="sparkframe"></iframe>
		</div>
	</div>
</body>
</html>

<?php } else {
	?>
<html>
<head>
	<title>Private Area</title>
</head>
<body>
	<h1>Log in</h1>
	<form method="post" action="login.php">
		<input type="text" id="password" name="password" />
		<input type="submit" />
	</form>
</body>
	<?php
}  ?>