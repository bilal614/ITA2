<?php 
require '../controller/phpFormValidation.php';
include '../config/config.php';
?>
<!DOCTYPE html>
<html>
    <?php include 'headTag.inc.php'?>
    <script src="../js/jquery/jquery.validate.js"></script>
    <body>  
        <div id="mainContainer">
            <?php
                include 'header.inc.php';
                $requiredFileds=array("firstname","lastname","email","password","confirmpassword")
            ?>
            <div id="container">
               <div class="login-form">
                    <h1>Sign Up</h1>
                    <form id="signupform" onsubmit="return validateForm()" action="phpFormValidation.php" method="post" >
                        <fieldset name="SignUpForm">
                            
                            <label for="firstName" value="First Name" <?php validateField("firstname", $missingFields)?>>First Name: </label>
                            <input type="text" name="firsname" onfocus="this.value='';" value="First Name" required><br>
                            
                            <label for="lastName">Last Name: </label>
                            <input type="text" name="lastname" onfocus="this.value=''" value="Last Name" required><br>
                            
                            <label for="email" onfocus="this.value='';" value="Email">E-Mail: </label> 
                            <input type="email" name="email" onfocus="this.value=''" value="Email" required><br>
                            
                            <label for="password">Password: </label><br>
                            <input type="password" name="password" required><br>
                            
                            <label for="confirmpassword">Confirm Password: </label>
                            <input type="password" name="confirmpassword" required><br>
                            
                            <input name="submitBtn" type="submit" value="Submit">
                            <input type="reset" value="Reset">                  
                        </fieldset>
                    </form>
                    <script>$("#signupform").validate();</script>
            </div><!--end div#Container!-->
            
            <?php
            include 'footer.inc.php';
            ?>
        </div>
    </body>
</html>  