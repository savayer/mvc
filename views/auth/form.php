<!DOCTYPE html>
<html lang="ru">

<head>
	<meta charset="utf-8" />
	<title>Enjoy | Blog</title>
	<meta http-equiv="X-UA-Compatible" content="IE=edge" />
	<meta name="viewport" content="width=device-width, initial-scale=1.0" />
	<link rel="shortcut icon" href="template/img/favicon.png" />
	<link rel="stylesheet" href="template/font-awesome-4.2.0/css/font-awesome.min.css">
	<link rel="stylesheet" href="template/bootstrap/bootstrap-grid-3.3.1.min.css" />
	<link rel="stylesheet" href="template/styles.css">
	<link rel="stylesheet" href="template/pushy/pushy.css">
	<link rel="stylesheet" href="views/auth/check.css">
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
		</ul>
	</nav>
	<div class="container" >
<!--		<div class="col-md-2"></div>-->
		<div class="col-md-2 col-sm-1"></div>
		<div class="col-md-8 col-sm-10">
			<?php if (isset($_SESSION['login']) && !empty($_SESSION['login'])) { ?>
				<div class="block">
					Добро пожаловать,
					<?php echo $_SESSION['login']."  "; ?><i class="fa fa-times" id="unset" title="Выход"></i>
						<br>Теперь вы можете общаться с другими людьми, с авторами статей, оставляя свои комментарии
				</div>
				<?php } else { ?>
					<div class="block">
						<input type="radio" name="odin" checked="checked" id="vkl1">
						<label for="vkl1">Войти</label>
						<input type="radio" name="odin" id="vkl2">
						<label for="vkl2">Зарегистрироваться</label>
						<div>
							<?php include('auth.html'); ?>
						</div>
						<div>
							<?php include('reg.html'); ?>
						</div>
					</div>
					<?php } ?>
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
	<script src="template/jquery/jquery.cookie.js"></script>
	<script src="template/pushy/pushy.js"></script>

	<script>
		$('#unset').on('click', function () {
			if (confirm("Вы действительно хотите завершить текущую сессию?")) {
				$.get('checkUser/unset');
				
			}
			document.location.reload();
		});

	</script>
</body>

</html>