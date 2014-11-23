<?php include "common.php";
session_start();
if(!isset($_SESSION["username"])){
	header("Location: start.php");
}
$name = $_SESSION["username"];
cow_header(); ?>
<div id="main">
	<h2><?=$name ?>'s To-Do List</h2>

	<ul id="todolist">
		<?php
		$file = file("todo_$name.txt");
		if($file != false) {
			foreach($file as $i=>$item) { ?>
			<li>
			<form action="submit.php" method="post">
				<input type="hidden" name="action" value="delete" />
				<input type="hidden" name="index" value="<?=$i?>" />
				<input type="submit" value="Delete" />
			</form>
			<?=$item?>
		</li>
		<?php } }?>
		<li>
			<form action="submit.php" method="post">
				<input type="hidden" name="action" value="add" />
				<input name="item" type="text" size="25" autofocus="autofocus" />
				<input type="submit" value="Add" />
			</form>
		</li>
	</ul>

	<div>
		<a href="logout.php"><strong>Log Out</strong></a>
		<em>(logged in since <?=$_COOKIE["time"]?>)</em>
	</div>

</div>
<?php cow_footer(); ?>