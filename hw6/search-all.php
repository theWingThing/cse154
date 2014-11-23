<ul>
<?php
	$db = new PDO("mysql:dbname=imdb_small;host=webster.cs.washington.edu;charset=utf8", "siskel", "2thumbsup");

	$rows = $db->query("
select movies.name, movies.year from roles 
join actors on actor_id = actors.id
join movies on movies.id = roles.movie_id
where actors.first_name like "Kevin%" and actors.last_name = "Bacon"
order by movies.year desc
");
	foreach($rows as $row){ ?>
		<li><?=$row["name"] ?> <?=$row["year"]?></li>
<?php	}
?>

