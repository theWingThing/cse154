<?php
	$name = $_POST["name"];
	$section = $_POST["section"];
	$cc = $_POST["cc"];
	$number = $_POST["number"];

	file_put_contents("suckers.txt", "$name;$section;$cc;$number\n", FILE_APPEND);
?>

<!DOCTYPE html>
<html>
	<head>
		<title>Buy Your Way to a Better Education!</title>
		<link href="https://www.cs.washington.edu/education/courses/cse154/14sp/labs/4/buyagrade.css" type="text/css" rel="stylesheet" />
	</head>

	
	<body>
		<h1>Thanks, sucker!</h1>

		<p>Your information has been recorded.</p>

		<div>
			<strong>Name</strong>
			<?= $name ?>
		</div>

		<div>
			<strong>Section</strong>
			<?= $section ?>
		</div>

		<div>
			<strong>Credit Card Type</strong>
			<?= $cc ?>
		</div>

		<div>
			<strong>Credit Card Number</strong>
			<?= $number ?>
		</div>

		<pre><?= file_get_contents("suckers.txt") ?></pre>
	</body>
</html>  
