<?php include "common.php";
nerdluv_header(); 
file_put_contents("singles.txt", "{$_POST["name"]},{$_POST["gender"]},{$_POST["age"]},{$_POST["personality"]},{$_POST["os"]},{$_POST["min_age"]},{$_POST["max_age"]}\n", FILE_APPEND);
?>

    <div>
        <p><strong>Thank you!</strong></p>
        <p>Welcome to NerdLuv, <?=$_POST["name"]?>!</p>
        <p>Now <a href="matches.php">log in to see your matches!</a></p>
    </div>

<?php nerdluv_footer(); ?>
