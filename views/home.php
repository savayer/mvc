<!DOCTYPE html>
<html lang="ru">

<head>
	<meta charset="utf-8" />
	<title>Enjoy | Home</title>
	<meta http-equiv="X-UA-Compatible" content="IE=edge" />
	<meta name="viewport" content="width=device-width, initial-scale=1.0" />
	<link rel="shortcut icon" href="template/img/favicon.png" />
	<link rel="stylesheet" href="template/font-awesome-4.2.0/css/font-awesome.min.css">
	<link rel="stylesheet" href="template/bootstrap/bootstrap-grid-3.3.1.min.css" />
	<link rel="stylesheet" href="template/styles.css">
	<link rel="stylesheet" href="template/pushy/pushy.css">

</head>

<body>
	<header>
		<div class="head_cont">
			<div class="logo">
				<img src="template/img/logo.jpg" width="50px" height="50px">
			</div>
			<button class="menu-btn">
				<i class="fa fa-bars"></i>
			</button>
		</div>
	</header>
	<nav class="menu pushy pushy-left">
		<ul>
			<li class="pushy-link"><a href="home"><i class="fa fa-home"></i>&nbsp;&nbsp;HOME</a></li>
			<li class="pushy-link"><a href="#"><i class="fa fa-picture-o" ></i>&nbsp;&nbsp;GALLERY</a></li>
			<li class="pushy-link"><a href="blog"><i class="fa fa-newspaper-o"></i>&nbsp;&nbsp;BLOG</a></li>
			<li class="pushy-link"><a href="about"><i class="fa fa-info"></i>&nbsp;&nbsp;ABOUT</a></li>
			<li class="pushy-link"><a href="#"><i class="fa fa-users"></i>&nbsp;&nbsp;CONTACTS</a></li>
			<li class="pushy-link"><a href="checkUser">&nbsp;&nbsp;SIGN IN</a></li>
		</ul>
	</nav>
	<div class="content">
		<div class="text_cont">
			<hr class="thin">
			<hr class="fat">
			<h1>Enjoy The Moment</h1>
			<h4>Enjoy your life, be happy, be strong and love silence</h4>
			<hr class="fat">
			<hr class="thin">
		</div>
	</div>

	<footer>
		<div class="foot_cont">
			<div class="copyright">
				<h4>&copy;Savayer 2016</h4>
			</div>
			<div class="soc_buttons">
				<a href="http://facebook.com"><i class="fa fa-facebook"></i></a>&nbsp;
				<a href="http://vk.com/savayer"><i class="fa fa-vk" aria-hidden="true"></i></a>&nbsp;
				<a href="http://www.instagram.com"><i class="fa fa-instagram" aria-hidden="true"></i></a>
			</div>
		</div>
	</footer>


	<script src="template/jquery/jquery-1.11.1.min.js"></script>
	<script src="template/pushy/pushy.js"></script>
	<script>
		$(document).ready(function () {
			$(".content").css("display", "none");
			$(".content").fadeIn(500);
		});
	</script>
</body>

</html>