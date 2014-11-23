<?php include 'common.php';
nerdluv_header(); ?>

    <div>
        <form action="signup-submit.php" method="post">
        	<fieldset>
        		<legend>New User Signup:</legend>
        <div>
            <label>
                <strong>Name:</strong>
                <input name="name" size="16"/>
            </label>
        </div>
        <div>
            <strong>Gender:</strong>
            <label>
                <input type="radio" name="gender" value="M" /> Male</label>
                <label><input type="radio" name="gender" value="F"  checked="checked"/> Female</label>
        </div>
        <div>
            <label>
                <strong>Age:</strong>
                <input name="age" size="6" maxlength="2"/>
            </label>
        </div>
        <div>
            <label>
                <strong>Personality type:</strong>
                <input name="personality" size="6" maxlength="4"/>
                (<a href="http://www.humanmetrics.com/cgi-win/JTypes2.asp">Don't know your type?</a>)
            </label>
        </div>
        <div>
            <label>
                <strong>Favorite OS:</strong>
                <select name="os">
                    <option>Windows</option>
                    <option>Mac Os X</option>
                    <option>Linux</option>
                </select>
            </label>
        </div>
        <div>
            <label>
                <strong>Seeking age:</strong>
                <input name="min_age" size="6" maxlength="2" placeholder="min"/>
                to
                <input name="max_age" size="6" maxlength="2" placeholder="max"/>
            <label>
        </div>
        <div>
            <input type="submit" value="Sign Up" />
        </div>
        </fieldset>
        </form>
    </div>

<?php nerdluv_footer(); ?>
