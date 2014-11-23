<?php include "common.php";
nerdluv_header(); ?>

    <div>
    <form action="matches-submit.php">
        <fieldset>
            <legend>Returning User:</legend>
        <div>
        <label>
            <strong>Name:</strong>
            <input name="name" />
        </label>
        </div>
        <div>
            <input type="submit" value="View My Matches" />
        </div>
        </fieldset>
    </form>
    </div>

<?php nerdluv_footer(); ?>
