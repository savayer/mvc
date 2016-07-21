<?php 
	return array(
		'blog/([a-z]+)/([0-9]+)' => 'blog/view/$1/$2', //actionPost если в строке указан номер то показываем статью под этим номером
		//адресная строка  ссылка/категория/номер => имя класса-контроллера/имя метода/параметры
		'blog/([a-z]+)' => 'blog/category/$1',
		'blog' => 'blog/LastPosts', // actionAllPosts in blogController если в строке введен блог, то показываем все посты
		'home' => 'home/HomePage',
		'checkUser' => 'User/signin',
		'checkUser/auth' => 'User/auth',
		'checkUser/reg' => 'User/reg',
		'checkUser/unset' => 'User/unset',
		'i_want_to_add_comment' => 'User/addComment',
		'i_want_to_del_comment' => 'User/delComment',
		'i_want_to_upd_comment' => 'User/updComment',
		'about' => 'Info/about',

	);
?>