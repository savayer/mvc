<?php 
	
	class UserClass {
		
		public static function doAuth() {
			$db = DB::getConnection();
			if (!empty($_POST['login']) && !empty($_POST['pass'])) {
				$login = $_POST['login'];
				$pass = $_POST['pass'];
				$result = $db->query("SELECT * FROM users 
								WHERE (login = '".$login."') OR (email = '".$login."')");
				$row = $result->fetch();
				$pass = md5(md5($pass));
				$pass = substr($pass,0,20);
				if (($row["login"] == $login || $row["email"] == $login) && $row["pass"] == $pass) {
					$_SESSION["login"] = $row["login"];
					$_SESSION["id_user"] = $row["id_user"];
					//die($row["id_user"]);
					die("okay");
				} else {
					die("dont");
				}
			} else {
				die("empt");
			}
			
		}
		
		public static function doReg() {
			$db = DB::getConnection();
			$subject = "Завершение регистрации на Savayer.Ikaar.ru";
			if (!empty($_POST)) {
				$email = $_POST['email'];
				$login = $_POST['login'];
				$pass = $_POST['pass'];
				$result = $db->query("SELECT login, email FROM users WHERE (login = '".$login."')
									OR (email = '".$email."')");
				$row = $result->fetch();
				if ($row['login'] == $login) die("name");
				$message = " 
					<html> 
						<head> 
							<title>Birthday Reminders for August</title> 
						</head> 
						<body> 
							<p>Поздравляем с успешной регистрацией $login!</p> 
						</body> 
					</html>"; 

				$headers  = "Content-type: text/html; charset=utf-8 \r\n"; 
				$headers .= "From: Birthday Reminder <suka@example.com>\r\n"; 	

				if (mail($email, $subject, $message, $headers)) {
					$db->query("INSERT INTO users(`email`, `login`, `pass`) 
							VALUES('".$email."','".$login."','".md5(md5($pass))."')");
					die("okay");
				} else die("dont");
			};
		}
		
		public static function addComment() {
			$db = DB::getConnection();
			if ($_POST) {
				if (!$db->query("INSERT INTO comments(`comment_text`,`id_article`,`id_user`) 
				VALUES('".$_POST['comment']."', 
				'".$_POST["art"]."', 
				'".$_POST['id_u']."')")) die("dont"); 
				die("okay");	
			} else die('dont');
		}
		
		public static function delComment() {
			$db = DB::getConnection();
			if ($_POST) {
				if (!$db->query("DELETE FROM comments 
				WHERE id_comment = ".$_POST["id"])) die("dont"); 
				die("okay");	
			} else die('dont');
		}
		
		public static function updComment() {
			$db = DB::getConnection();
			if ($_POST) {
				if (!$db->query("UPDATE comments SET comment_text = '".$_POST['text']."'
				WHERE id_comment = ".$_POST["id"])) die("dont"); 
				die("okay");	
			} else die('dont');
		}
		
	}
?>