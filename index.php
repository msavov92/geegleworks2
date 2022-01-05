<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="UTF-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no">
		<title>GeegleWorks</title>
		<link rel="shortcut icon" type="image/png" href="assets/img/favicon.png"/>
		<link rel="stylesheet" href="assets/css/style.css">
	</head>
	<body>

	<header>
		<div class="container">
			<div class="row">
				<div class="hamburger" id="hamburger">
					<span class="line"></span>
					<span class="line"></span>
					<span class="line"></span>
				</div>
				<div class="col-md-12">
					<div class="wrapper">
						<div class="logo">
							<a href="?p=home" title="GeegleWorks">
								<img src="assets/img/logo.svg" alt="GeegleWorks Brand">
							</a>
						</div>
						<div class="main-nav">
							<ul>
								<li>
									<a href="?p=home">home</a>
								</li>
								<li>
									<a href="?p=about">about</a>
								</li>
								<li>
									<a href="?p=home#services">services</a>
								</li>
								<li>
									<a href="?p=home#our_project">projects</a>
								</li>
								<li>
									<a href="?p=home#contacts">contacts</a>
								</li>
							</ul>
						</div>
					</div>
				</div>
			</div>
		</div>
		<div class="scroll-top">
            <i class="fa fa-arrow-up" aria-hidden="true"></i>
        </div>
	</header>

	<?php
		$page = isset($_GET['p']) ? trim($_GET['p']) : '';
		$content = '';
		$extension = '.php';

		if ($page === 'about') {
			include_once('about' . $extension);
		} else if ($page === 'iot-platform') {
			include_once('iot-platform' . $extension);
		} else if ($page === 'manage-platform') {
			include_once('manage-platform' . $extension);
		} else if($page === 'burial-tech-software') {
			include_once('burial-tech-software' . $extension);
		} else if($page === 'pay-per-load') {
			include_once('pay-per-load' . $extension);
		} else if($page === 'management-software') {
			include_once('management-software' . $extension);
		} else if($page === 'games-directory') {
			include_once('games-directory' . $extension);
		} else if ($page === 'about') {
			include_once('about' . $extension);
		}
		else {
			include_once('home' . $extension);
		}
	?>
	<footer>
		<div class="container">
			<div class="row">
				<div class="col-md-12">
					<div class="footer_logo">
						<a href="?p=templates/home" title="GeegleWorks">
							<img src="assets/img/footer-logo.svg" alt="GeegleWorks Brand">
						</a>
					</div>
					<div class="footer_nav">
						<ul>
							<li>
								<a href="?p=home">home</a>
							</li>
							<li>
								<a href="?p=about">about</a>
							</li>
							<li>
								<a href="?p=home#services">services</a>
							</li>
							<li>
								<a href="?p=home#our_project">projects</a>
							</li>
							<li>
								<a href="?p=home#contacts">contacts</a>
							</li>
						</ul>
					</div>
				</div>
				<p class="text-center copyright">2019 All Rights Reserved</p>
			</div>
		</div>
	</footer>

		<script src="https://code.jquery.com/jquery-3.4.1.js" integrity="sha256-WpOohJOqMqqyKL9FccASB9O0KwACQJpFTUBLTYOVvVU=" crossorigin="anonymous"></script>
		<script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js" integrity="sha256-T0Vest3yCU7pafRw9r+settMBX6JkKN06dqBnpQ8d30=" crossorigin="anonymous"></script>
		<script type="text/javascript" src="assets/js/bootstrap.min.js"></script>
		<script type="text/javascript" src="assets/js/lightbox.min.js"></script>
		<script type="text/javascript" src="assets/js/main.js"></script>
	</body>
</html>