<?php 
	require_once(ROOT . '/models/User.php');
	class UserController {
		
		public function actionSignin() {
			session_start();
			require_once(ROOT . '/views/auth/form.php');
	
		}
		
		public function actionAuth() {
			UserClass::doAuth();
			return true;
		}
		
		public function actionReg() {
			UserClass::doReg();
			return true;
		}
		
		public function actionUnset() {
			//session_start();
			unset($_SESSION['login']);
			return true;
		}
		
		public function actionAddComment() {
			UserClass::addComment();
			return true;
		}
		
		public function actionDelComment() {
			UserClass::delComment();
			return true;
		}
		
		public function actionUpdComment() {
			UserClass::updComment();
			return true;
		}
		
	}
?>