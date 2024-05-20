<div id="signup">
<link rel="stylesheet" type="text/css" href="style1.css">

    <h2 class="signin">New User? Sign Up</h3>
    <form action="includes/signup.php" method="post">
        <div class="form-field">
            <input class="field" type="text" name="email" placeholder="Email">
        </div>
        <div class="form-field">
            <input class="field" type="text" name="Username" placeholder="Username">
        </div>
        <div class="form-field">
            <select class="field" name="ExpertiseLevel">
                <option value="" disabled selected>Expertise Level</option>
                <option value="Beginner">Beginner</option>
                <option value="Intermediate">Intermediate</option>
                <option value="Advanced">Advanced</option>
            </select>
        </div>
        <div class="form-field">
            <input class="field" type="password" name="pwd" placeholder="Password">
        </div>
        <div class="form-field">
            <input class="field" type="password" name="pwd-confirm" placeholder="Confirm Password">
        </div>
        <div class="form-field">
            <button class="button" type="submit" name="signup-sumbit">Sign Up</button>
        </div>
    </form>
    <div class="form-field">
         <?php
            if (isset($_GET["error"])) 
            {
                if ($_GET["error"] == "emptyfields") 
                {
                    echo '<p class="errorMsg">Error: You must fill in all fields</p>';
                }
                else if($_GET["error"] == "invalidemail")
                {
                    echo '<p class="errorMsg">Error: Email address is not valid</p>';
                }
                else if($_GET["error"] == "uselectedfields")
                {
                    echo '<p class="errorMsg">Error: You must select an option from all drop-down menus</p>';
                }
                else if($_GET["error"] == "passwordcheck")
                {
                    echo '<p class="errorMsg">Error: Passwords do not match</p>';
                }
                else if($_GET["error"] == "usernametaken")
                {
                    echo '<p class="errorMsg">Error: That Username is already taken</p>';
                }
            }
            else if (isset($_GET["signup"])) {
                if ($_GET["signup"] == "success") 
                {
                  echo '<p class="errorMsg">Signup Successful!</p>';
                }
            }
         ?>   
    </div>
</div>
