<?php
	include_once(ROOT.'/models/Blog.php');

	class BlogController {

		public function actionLastPosts() {
			//echo '<br>Последние статьи всех категорий';
			$list = Blog::getLastPosts();
			require_once(ROOT . '/views/blog/index.php');
			
			return true;
		}
		public function actionCategory($category) {
//			echo "<br>actionCategory выводит все статьи по категории: ".$category;
			$list = Blog::getPostsByCategory($category);
			require_once(ROOT . '/views/blog/category.php');
			
			return true;
		}
		public function actionView($category, $id) {
//			echo "<br> actionView выводит статью с номером $id категории $category";
			$list = Blog::getPostById($id, $category);
			session_start();
			require_once(ROOT . '/views/blog/view.php');
			
			return true;
		}
	}
?>