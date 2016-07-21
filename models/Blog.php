<?php
	class Blog {
		public static function getLastPosts() {
//			вывести на гланой странице блога последние 10 статей с неполным текстом
			/*===========считывание данных из базы======================*/
			$db = DB::getConnection();
			$list = array();	
			$result = $db->query("SELECT id_article,title,DATE_FORMAT(`date`, '%d %M %Y %H:%i'),
							SUBSTRING(text, 1, 250),articles.id_category,
							categoryName FROM articles, category 
							WHERE articles.id_category = category.id_category 
							ORDER BY id_article DESC LIMIT 10");
			$i = 0;
			while ($row = $result->fetch()) {
				$list[$i]['id_article'] = $row['id_article'];
					$res1 = $db->query("SELECT COUNT(*) FROM comments WHERE id_article = ".$row['id_article']);
					$count = $res1->fetchColumn();	$list[$i]['count'] = $count;
				$list[$i]['date'] = $row["DATE_FORMAT(`date`, '%d %M %Y %H:%i')"];
				$list[$i]['title'] = $row['title'];
				$list[$i]['short_text'] = $row['SUBSTRING(text, 1, 250)']."...";
				$list[$i]['category'] = $row['categoryName'];
				$i++;
			}
			
			return $list;
		}
		
		public static function getPostById($id, $category) {
//	вывести одну выбранную статью с полным текстом 
			$db = DB::getConnection();
			
			$res1 = $db->query("SELECT COUNT(*) FROM comments WHERE id_article = $id");
			$count = $res1->fetchColumn();
			if ($count > 0) {
				$list[0]['count'] = $count;				
				
				$result = $db->query("SELECT comments.id_comment,articles.text, articles.title,DATE_FORMAT(articles.date, '%d %M %Y %H:%i'), comments.comment_text, DATE_FORMAT(comments.date, '%d %M в %H:%i'), users.login
								FROM articles,category, comments, users WHERE 
								(articles.id_article = ".$id.") AND 
								(category.categoryName = '".$category."') AND 
								(articles.id_article = comments.id_article) AND
								(comments.id_user = users.id_user) ORDER BY comments.id_comment");
				$i = 0;
				while ($row = $result->fetch()) {
					//$list[$i]['num'] = $i;
					$list[$i]['num'] = $row['id_comment'];
					$list[$i]['title'] = $row['title'];
					$list[$i]['text'] = $row['text'];
					$list[$i]['date'] = $row["DATE_FORMAT(articles.date, '%d %M %Y %H:%i')"];
					$list[$i]['login'] = $row['login'];
					$list[$i]['comment_text'] = $row['comment_text'];
					$list[$i]['comment_date'] = $row["DATE_FORMAT(comments.date, '%d %M в %H:%i')"];
					$i++;
				}
			} else {
				$result = $db->query("SELECT *,DATE_FORMAT(articles.date, '%d %M %Y %H:%i')
								FROM articles, category WHERE 
								(articles.id_article = ".$id.") AND 
								(category.categoryName = '".$category."')");
				$result->setFetchMode(PDO::FETCH_ASSOC);
				$list[0]['count'] = '0';
				$row = $result->fetch();
				$list[0]['text'] = $row['text'];
				$list[0]['date'] = $row["DATE_FORMAT(articles.date, '%d %M %Y %H:%i')"];
				$list[0]['title'] = $row['title'];
			}			
			return $list;
		}
		
		public static function getPostsByCategory($category) {
//вывести все статьи по выбранной категории с неоплным текстом 
			$db = DB::getConnection();	
			$list = array();
			$result = $db->query("SELECT *,DATE_FORMAT(articles.date, '%d %M %Y %H:%i'),
						SUBSTRING(text, 1, 250), category.categoryName
						FROM articles, category WHERE (articles.id_category = category.id_category)
						AND (category.categoryName = '".$category."') ORDER BY id_article DESC");
			$i = 0;
			while ($row = $result->fetch()) {
				$list[$i]['id_article'] = $row['id_article'];
				$list[$i]['id_category'] = $row['id_category'];
				$list[$i]['date'] = $row["DATE_FORMAT(articles.date, '%d %M %Y %H:%i')"];
				$list[$i]['title'] = $row['title'];
				$list[$i]['short_text'] = $row['SUBSTRING(text, 1, 250)']."...";
				$list[$i]['category'] = $row['categoryName'];
				$list[$i]['text'] = $row['text'];
				$i++;
			}
				return $list;
		}
		
		
	}
?>