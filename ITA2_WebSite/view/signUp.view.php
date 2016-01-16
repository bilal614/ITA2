<!DOCTYPE html>
<html>
    <?php displayHeadTag();?>
    <body>  
        <div id="mainContainer">
            <?php
                displayHeader();
               
            ?>
            <div id="container">
                <div class="login-form">
                    <h1>Sign Up</h1>
                    <div id="response" style="margin: 10px;"><?php  Register();?></div>
                    <form id="signupform" action="../controller/signUp.php" method="post" >
                        <!--onsubmit="return validateForm()" //this is for adding jquery validation!-->
                        <fieldset name="SignUpForm">                                                        
                            <label for="email" >E-Mail: </label>
                            <input type="email" name="email" required><br>
                            
                            <label for="username" >User name: </label>
                            <input type="username" name="username" required><br>
                            
                            <label for="password">Password: </label><br>
                            <input type="password" name="password" required><br>
                            
                            <label for="confirmpassword">Confirm Password: </label>
                            <input type="password" name="confirmpassword" required><br>
                            
                            <input name="submitButton" type="submit" value="Submit" class="popup">
                            <!--<input type="reset" value="Reset">-->                 
                        </fieldset>
                    </form>
                    <!--<script>$("#signupform").validate();</script>!-->
                </div>
            </div>            
            <?php
               displayFooter();
            ?>
        </div>
<!--        <script>
         $(document).ready(function( ) {
             $( "#SignUpForm" ).submit(function(event) {
                  $('div#response').addClass("success");
                  event.preventDefault();
            });
         });
        </script>-->
    </body>
</html>