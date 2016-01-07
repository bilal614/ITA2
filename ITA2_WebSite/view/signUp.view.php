<!DOCTYPE html>
<html>
    <?php displayHeadTag();?>
    <body>  
        <div id="mainContainer">
            <?php
                displayHeader();
                Register();
            ?>
            <div id="container">
                <div class="login-form">
                    <h1>Sign Up</h1>
                    <form id="signupform" action="../controller/signUp.php" method="post" >
                        <!--onsubmit="return validateForm()" //this is for adding jquery validation!-->
                        <fieldset name="SignUpForm">                                                        
                          <label for="email" >E-Mail: </label>
                            <input type="email" name="email" required><br>
                            
                            <label for="password">Password: </label><br>
                            <input type="password" name="password" required><br>
                            
                            <label for="confirmpassword">Confirm Password: </label>
                            <input type="password" name="confirmpassword" required><br>
                            
                            <input name="submitButton" type="submit" value="Submit">
                            <input type="reset" value="Reset">                  
                        </fieldset>
                    </form>
                    <!--<script>$("#signupform").validate();</script>!-->
                </div>
            </div>            
            <?php
               displayFooter();
            ?>
        </div>
    </body>
</html>