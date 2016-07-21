<!DOCTYPE html>
<html lang="ru">

<head>
	<meta charset="utf-8" />
	<title>Enjoy | Blog</title>
	<meta http-equiv="X-UA-Compatible" content="IE=edge" />
	<meta name="viewport" content="width=device-width, initial-scale=1.0" />
	<link rel="shortcut icon" href="../../template/img/favicon.png" />
	<link rel="stylesheet" href="../../template/font-awesome-4.2.0/css/font-awesome.min.css">
	<link rel="stylesheet" href="../../template/bootstrap/bootstrap-grid-3.3.1.min.css" />
	<link rel="stylesheet" href="../../template/remodal/jquery.remodal.css">
	<link rel="stylesheet" href="../../template/styles.css">
	<link rel="stylesheet" href="../../template/pushy/pushy.css">
	<link rel="stylesheet" href="../../views/auth/check.css">
</head>

<body>
	<header>
		<div class="head_cont">
			<div class="logo">
				<img src="../../template/img/logo.jpg" width="50px" height="50px">
			</div>
			<button class="menu-btn">
				<i class="fa fa-bars"></i>
			</button>
		</div>
	</header>
	<nav class="menu pushy pushy-left">
		<ul>
			<li class="pushy-link"><a href="../../home"><i class="fa fa-home"></i>&nbsp;&nbsp;HOME</a></li>
			<li class="pushy-link"><a href="#"><i class="fa fa-picture-o" ></i>&nbsp;&nbsp;GALLERY</a></li>
			<li class="pushy-link"><a href="../../blog"><i class="fa fa-newspaper-o"></i>&nbsp;&nbsp;BLOG</a></li>
			<li class="pushy-link"><a href="../../about"><i class="fa fa-info"></i>&nbsp;&nbsp;ABOUT</a></li>
			<li class="pushy-link"><a href="#"><i class="fa fa-users"></i>&nbsp;&nbsp;CONTACTS</a></li>
			<li class="pushy-link"><a href="../../checkUser">&nbsp;&nbsp;SIGN IN</a></li>
		</ul>
	</nav>
	<div class="container">
		<div class="col-md-3">

			<a href="../../blog" class="link"><h3>Последние</h3></a>
			<br>
			<h3>Категории</h3>
			<a href="../sport" class="link">Спорт</a>
			<br>
			<a href="../music" class="link">Музыка</a>
			<br>
			<a href="../films" class="link">Фильмы</a>
			<br>
			<a href="../science" class="link">Наука</a>
			<br>
			<a href="../entertainments" class="link">Развлечения</a>
			<br>
			<a href="../programming" class="link">Программирование</a>
			<br>
			<a href="../other" class="link">Прочее</a>
			<br>
		</div>
		<div class="col-md-9">
			<div class="post">
				<h2 class="title"><?php echo $list[0]['title'] ?></h2>
				<?php echo $list[0]["date"] ?>
				<p><?php echo $list[0]['text'] ?></p>
				<a onclick="showDiv();" class="link_bright">Комментировать</a>
				<?php if (!isset($_SESSION['login'])) {?>
					<div class="comment_form" id="comment" hidden>
						<i>Чтобы оставлять комментарии необходимо <a href="../../checkUser" >войти в систему</a></i>
					</div>
				<?php } else  { ?>
					<div class="comment_form" id="comment" hidden>
<!--						<img src="../../template/img/user.png" alt="" width="50px" height="50px ">-->
						<textarea class="comment_text" i_u="<?php echo $_SESSION['id_user'] ?>" placeholder="Ваш комментарий, <?php echo ($_SESSION['login']) ?>"></textarea>
						<button type="button" id="send_comment" class="read_more" >Отправить</button>
					</div>
				<?php } ?>
			</div>		
			<a onclick="showCom();" class="link_bright" style="float:right">Комментарии (<?php  echo $list[0]['count']; ?>)</a>	<br>
			<div class="block_comments" hidden>
				<?php if ($list[0]['count'] > 0) { foreach ($list as $item): ?>
					<div class="list_comments">
						<div><b> <?php echo $item['login']."</b>"; 
							if (isset($_SESSION['login']))
							if ($item['login'] == $_SESSION['login']) {?>
							<a onclick="editCom('<?=$item['num']?>');"
								   class="link_bright" id="comment_manipulation">
									<i class="fa fa-pencil" title="Редактировать"></i>
								</a>
							<a onclick="del_com('<?=$item['num']?>');" 
								   class="link_bright deleteThisCom" id="comment_manipulation">
										<i class="fa fa-times" title="Удалить"></i>
								</a>
							<a class="answer" inum="<?=$item['num']?>"></a>
							<?php } ?>						  
						</div>
						<div class="text_com"> 
							<span id="hideComment" ic="<?=$item['num']?>"><?php echo $item['comment_text'];?></span>
							<div class="edit_comment_form" hidden ic="<?=$item['num']?>">
								<textarea class="comment_text change_text" individual="<?=$item['num']?>"><?php echo $item['comment_text'];?></textarea>
								<button type="button" ic="<?=$item['num']?>" class="read_more saveChange">Сохранить</button>
							</div>
						</div>						
						<div class="date"><?php echo $item['comment_date'] ?></div>
					</div>
				<?php endforeach; } ?>
			</div>
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

	<script src="../../template/jquery/jquery-1.11.1.min.js"></script>
	<script src="../../template/jquery/jquery.cookie.js"></script>
	<script src="../../template/jquery/autoresize.jquery.js"></script>
	<script src="../../template/pushy/pushy.js"></script>
	<script src="../../template/remodal/jquery.remodal.js"></script>
	<script src="../../template/common.js"></script>
</body>

</html>