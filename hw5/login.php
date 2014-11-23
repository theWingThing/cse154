<?php
    function good($u) {
        header("Location: todolist.php");
		session_start();
		$_SESSION["username"] = $u;
		setcookie("time", date("D y M d, g:i:s a"));
		die;

    }
	foreach (file("users.txt", FILE_IGNORE_NEW_LINES) as $user) {
		list($u, $p) = explode(":", $user);
		if($_POST["name"] == $u){
          if($_POST["password"] == $p) {
            good($u);
	      } else {
            header("Location: start.php");
            session_start();
            $_SESSION["wrong_pw"] = true;
            die;
          }
		}
	}
    file_put_contents("users.txt", "{$_POST["name"]}:{$_POST["password"]}\n", FILE_APPEND);
    good($_POST["name"]);
?>
