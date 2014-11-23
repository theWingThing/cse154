<?php
	session_start();
	if($_POST["action"] == "delete"){
		$array = file("todo_{$_SESSION["username"]}.txt");
		array_splice($array, $_POST["index"], 1);
		file_put_contents("todo_{$_SESSION["username"]}.txt", $array);
		header("Location: todolist.php");
	} else if($_POST["action"] == "add"){
		file_put_contents("todo_{$_SESSION["username"]}.txt", $_POST["item"] . "\n", FILE_APPEND);
		header("Location: todolist.php");
	}
?>