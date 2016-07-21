<?php 

	class InfoController {
		
		public function actionAbout() {
			require_once(ROOT . '/views/info/about.html');
			return true;
		}
	}
?>