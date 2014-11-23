<?php include "common.php";
nerdluv_header(); ?>
<div>
    <p><strong>Matches for <?=$_GET["name"]?></strong></p>
    <div>
    <?php 
        $user = NULL;
        foreach(file("singles.txt") as $item) {
            list($name, $gender, $age, $personality, $os, $min, $max) = explode(",", $item);
            if($name == $_GET["name"]) {
                $user = array("name" => $name, "age" => $age, "gender" => $gender, "personality" => $personality, "os" => $os, "min" => $min, "max" => $max);
            }
        } 
        foreach(file("singles.txt") as $item) {
            list($name, $gender, $age, $personality, $os, $min, $max) = explode(",", $item);
            if($gender != $user["gender"] && $os == $user["os"] && ($age >= $user["min"] && $age <= $user["max"]) && ($user["age"] >= $min && $user["age"] <= $max) && $user["personality"] != opposite_personality($personality) &&$name != $user["name"]) {
                ?>
                <div class="match">
                    <img src="https://webster.cs.washington.edu/images/nerdluv/user.jpg" alt="user" />
                    <div>
                    <p><?=$name?></p>
                    <ul>
                        <li><strong>gender:</strong><?=$gender?></li>
                        <li><strong>age:</strong><?=$age?></li>
                        <li><strong>type:</strong><?=$personality?></li>
                        <li><strong>OS:</strong><?=$os?></li>
                    </ul>
                </div>
                </div>
                <?php
            }
        }

        function opposite_personality($p) {
            $o = "INFP";
            if($p[0] == 'I') $o[0] = E;
            if($p[1] == 'N') $o[1] = S;
            if($p[2] == 'F') $o[2] = T;
            if($p[3] == 'P') $o[3] = J;
            return $o;
        }
    ?>
    </div>
</div>
<?php nerdluv_footer(); ?>
