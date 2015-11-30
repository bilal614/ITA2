
<header>
    <div id="leftLogo">
        <a href="<?php echo $config["paths"]["home"]["FromPrivatePages"]?>"><img id="logo" 
            src="<?php
                echo $config["paths"]["images"]["FromPrivatePages"]."/logo.png";
            ?>" alt="ISNL">
        </a>
    </div>
    <?php
            include 'mainMenu.php';
    ?>
    <div id="Login">
        <div>
            <a id="btnLogin" href="signIn.php">Login
            </a>
             <a id="btnSignUp">Sign up</a>
        </div>
    </div>
</header>  

