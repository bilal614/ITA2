<header>
    <div id="leftLogo">
        <a href="<?php echo $config["paths"]["home"]["FromView"]?>"><img id="logo" 
            src="<?php echo $config["paths"]["images"]["FromView"]."/logo.png";?>" alt="ISNL">
        </a>
    </div>
    <?php
            include 'mainMenu.php';
    ?>
    <div id="Login">
        <div>
            <a id="btnLogin" href="signIn.view.php">Login
            </a>
            <a id="btnSignUp" href="signUp.view.php">Sign up</a>
        </div>
    </div>
</header>  

