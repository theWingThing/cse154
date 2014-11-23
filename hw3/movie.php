<!DOCTYPE html>
<?php 
$movie = $_GET["film"]; 
list($name, $year, $rating) = file("$movie/info.txt");
?>
<html>
	<head>
		<title>Rancid Tomatoes</title>

		<meta charset="utf-8" />
		<link href="movie.css" type="text/css" rel="stylesheet" />
	</head>

	<body>
		<div id="imgbanner">
			<img src="https://webster.cs.washington.edu/images/rancidbanner.png" alt="Rancid Tomatoes" />
		</div>

		<h1><?=$name?> (<?=$year?>)</h1>
		
        <div id="overall_content">

        <div id="right">
			<div>
				<img src="<?=$movie ?>/overview.png" alt="general overview" />
			</div>

			<dl>
                <?php foreach (file("$movie/overview.txt") as $item) { 
                list($dt, $dd) = explode(":", $item); ?>
                <dt><?=$dt?></dt>
                <dd><?=$dd?></dd>
                <?php } ?>
			</dl>

        </div>

        <div id="left">

<!--$rating < 60 ? rotten : fresh; -->
			<div id="rottenlarge">
				<img src="https://webster.cs.washington.edu/images/<?php (($rating < 60) ? print("rottenlarge.png\" alt=\"Rotten\"") : print("freshlarge.png\" alt=\"Fresh\"") ) ?> id="icon"/>
				<?=$rating?>%
			</div>
			
			<div class="reviews">
            <?php $all_reviews = glob("$movie/review*.txt");
            for($i = 0; $i < ($num = count($all_reviews)); $i++) {
              list($quote, $vote, $author, $from) = file($all_reviews[$i]);
                if($i == (int) ($num/2 + $num%2)) { ?>
                  </div>
                  <div class="reviews">
                <?php } ?>
				<p class="review">
				<img src="https://webster.cs.washington.edu/images/<?php (($vote == "ROTTEN\n") ? print("rotten.gif\" alt=\"Rotten\"") : print("fresh.gif\" alt=\"Fresh\"") ) ?> id="icon"/>
					<q class="quote"><?=$quote?></q>
				</p>
				<p class="reviewer">
					<img src="https://webster.cs.washington.edu/images/critic.gif" alt="Critic" class="review_ico" />
					<?=$author?> <br />
					<em><?=$from?></em>
				</p>
                <?php
                } ?>

			</div>

		</div>
		
		<p id="page">(1-<?=$num?>) of <?=$num?></p>
	        <div id="rottenlarge">
				<img src="https://webster.cs.washington.edu/images/<?php (($rating < 60) ? print("rottenlarge.png\" alt=\"Rotten\"") : print("freshlarge.png\" alt=\"Fresh\"") ) ?> id="icon"/>
				<?=$rating?>%
			</div>
        </div>

		<div>
			<a href="https://webster.cs.washington.edu/validate-html.php"><img src="https://webster.cs.washington.edu/images/w3c-html.png" alt="Valid HTML5" /></a><br />
			<a href="https://webster.cs.washington.edu/validate-css.php"><img src="https://webster.cs.washington.edu/images/w3c-css.png" alt="Valid CSS" /></a>
		</div>
	</body>
</html>
