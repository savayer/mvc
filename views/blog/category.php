<!DOCTYPE html>
<html lang="ru">

<head>
	<meta charset="utf-8" />
	<title>Blog</title>
	<meta http-equiv="X-UA-Compatible" content="IE=edge" />
	<meta name="viewport" content="width=device-width, initial-scale=1.0" />
	<link rel="shortcut icon" href="../template/img/favicon.png" />
	<link rel="stylesheet" href="../template/font-awesome-4.2.0/css/font-awesome.min.css">
	<link rel="stylesheet" href="../template/bootstrap/bootstrap-grid-3.3.1.min.css" />
	<link rel="stylesheet" href="../template/styles.css">
	<link rel="stylesheet" href="../template/pushy/pushy.css">
	<link rel="stylesheet" href="../views/auth/check.css">
</head>

<body>
	<header>
		<div class="head_cont">
			<div class="logo">
				<img src="../template/img/logo.jpg" width="50px" height="50px">
			</div>
			<button class="menu-btn">
				<i class="fa fa-bars"></i>
			</button>
		</div>
	</header>
	<nav class="menu pushy pushy-left">
		<ul>
			<li class="pushy-link"><a href="../home"><i class="fa fa-home"></i>&nbsp;&nbsp;HOME</a></li>
			<li class="pushy-link"><a href="#"><i class="fa fa-picture-o" ></i>&nbsp;&nbsp;GALLERY</a></li>
			<li class="pushy-link"><a href="../blog"><i class="fa fa-newspaper-o"></i>&nbsp;&nbsp;BLOG</a></li>
			<li class="pushy-link"><a href="../about"><i class="fa fa-info"></i>&nbsp;&nbsp;ABOUT</a></li>
			<li class="pushy-link"><a href="#"><i class="fa fa-users"></i>&nbsp;&nbsp;CONTACTS</a></li>
			<li class="pushy-link"><a href="../checkUser">&nbsp;&nbsp;SIGN IN</a></li>
		</ul>
	</nav>
	<div class="container">
		<div class="col-md-3">
		
				<a href="../blog" class="link"><h3>Последние</h3></a>
				<br>
				<h3>Категории</h3>
				<a href="sport" class="link">Спорт</a>
				<br>
				<a href="music" class="link">Музыка</a>
				<br>
				<a href="films" class="link">Фильмы</a>
				<br>
				<a href="science" class="link">Наука</a>
				<br>
				<a href="entertainments" class="link">Развлечения</a>
				<br>
				<a href="programming" class="link">Программирование</a>
				<br>
				<a href="other" class="link">Прочее</a>
				<br>
		</div>
		<div class="col-md-9">
			<?php foreach ($list as $item): ?>
				<div class="post">
					<h2 class="title"><?php echo $item['title'] ?></h2>
					<?php echo $item['date'] ?>
					<p><?php echo $item['short_text'] ?></p>
					<a href="<?php echo $item['category']; echo "/"; echo $item['id_article'] ?>" class="read_more">Read more</a>
				</div>
				<!--такс, если здесь я выведу по определенной категории то снова нужно выводить не полный текст
			и фигачить ссылки на полный -->
				<?php
	endforeach;
						//$result = $obj->Query("SELECT *,DATE_FORMAT(`date`, '%d %M %Y %H:%i'),SUBSTRING(text, 1, 300) from articles");

				?>

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

	<script src="../template/jquery/jquery-1.11.1.min.js"></script>
	<script src="../template/jquery/jquery.cookie.js"></script>
	<script src="../template/pushy/pushy.js"></script>

	<!--<script>
$('.unset').on('click', function () {
if (confirm("Вы действительно хотите завершить текущую сессию?")) {
$.get('reg/unset.php').done(function () {
if (data === "ok") {
//alert("Сессия завершена"); 
}
});
$(location).attr('href', 'blog.php');
}
});
</script>-->
</body>

</html>