<?php
//include_once(ROOT.'/models/Home.php');

class HomeController {

	public function actionHomePage() {
		//echo '<br>Последние статьи всех категорий';
		//$list = Home::getPage();

		require_once(ROOT . '/views/home.php');

		return true;
	}
}
?>