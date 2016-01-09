<!DOCTYPE html>
<html>
    <?php displayHeadTag();?>
    <body>  
        <div id="mainContainer">
            <?php
               displayHeader();
            ?>
            <div id="container">
               <div class="loginMain">
                    <div class="login-form">
                        <h1>Login</h1>
                        <?php HandleErrors(); ?>
                        <div class="head">
                            <img alt="" src="../templates/images/index/user.png">
                        </div>
                        <form action = "signIn.php" method="post">
                            <input name = 'email' type="text" onblur="if (this.value == '') {this.value = 'Email';}" onfocus="this.value = '';" value="Email" class="text">
                            <input name = 'password' type="password" onblur="if (this.value == '') {this.value = 'Password';}" onfocus="this.value = '';" value="Password">
                            <div class="submit">
                            <input type="submit" value="LOGIN" name="loginForm">
                        </div>	
                            <p><a href="#">Forgot Password ?</a></p>
                        </form>
                    </div>
                </div>
            </div><!--end div#Container!-->
            
            <?php
                displayFooter();
            ?>
        </div>
    </body>
</html>   