<!DOCTYPE html>
<html>
	<!--
	Web Programming Step by Step
	Lab #3, PHP
	-->

	<head>
		<title>Music Viewer</title>
		<meta charset="utf-8" />
		<link href="https://www.cs.washington.edu/education/courses/cse190m/12sp/labs/3/viewer.css" type="text/css" rel="stylesheet" />
	</head>

	<body>
		
		<h1>My Music Page</h1>
		
        <?php $num_songs = 5678 ?>
		<p>
			I love music.
			I have <?=$num_songs ?> total songs,
			which is over <?= $num_songs/10 ?> hours of music!
		</p>

		<!-- Music Results Pages (Loops) -->
		<div class="section">
			<h2>Google's Music Results</h2>

			<ol>
            <?php
            for($i=1; $i<=5; $i++) { ?>
              <li><a href="https://www.google.com/search?tbm=nws&amp;q=Music&amp;start=<?=$i*10-10?>">Page <?=$i ?></a></li>
            <?php } ?>
			</ol>
		</div>

		<!-- Favorite Artists (Arrays) -->
        <!--?php $fav_artists = array("Britney Spears", "Christina Aguilera", "Justin Bieber", "Lady Gaga"); ?-->
		<?php $fav_artists = file("favorite.txt"); ?>
		<!-- Favorite Artists from a File (Files) -->
		<div class="section">
			<h2>My Favorite Artists</h2>
		
			<ol>
                <?php
                foreach($fav_artists as $artist) { ?>
                <li><a href="https://www.vevo.com/artist/<?= implode("-", explode(" ", $artist)); ?>"><?=$artist?></a></li>
                <?php } ?>
			</ol>
		</div>
		
		<!-- Music (Multiple Files) -->
		<!-- MP3 Formatting -->
		<div class="section">
			<h2>My Music and Playlists</h2>

			<?php $music = array("Be More.mp3", "Just Because.mp3", "Drift Away.mp3"); ?>
			<ul id="musiclist">
				<?php foreach($music as $song) { ?>
					<li class="mp3item">
						<a href="http://webster.cs.washington.edu/cse154/songs/<?= $song ?>"><?= $song ?></a> (<?= filesize("http://webster.cs.washington.edu/cse154/songs/<?= $song ?>") ?>)
					</li>
				<?php } ?>

				<!-- Exercise 8: Playlists (Files) -->
				<li class="playlistitem">154-mix.m3u:
					<ul>
						<li>Hello.mp3</li>
						<li>Be More.mp3</li>
						<li>Drift Away.mp3</li>
						<li>Panda Sneeze.mp3</li>
					</ul>
				</li>
			</ul>
		</div>

		<div>
			<a href="https://webster.cs.washington.edu/validate-html.php">
				<img src="http://webster.cs.washington.edu/w3c-html.png" alt="Valid HTML5" />
			</a>
			<a href="https://webster.cs.washington.edu/validate-css.php">
				<img src="http://webster.cs.washington.edu/w3c-css.png" alt="Valid CSS" />
			</a>
		</div>
	</body>
</html>
