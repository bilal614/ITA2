<?php require './config/config.php';?>
<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <title>ISDN website</title>
            <meta name="homepage" content="An interactive guide for events in NL for students.">
            <link href="templates/css/style.css" type="text/css" rel="stylesheet"/>
            <script src = "js/jquery/jquery-2.1.4.min.js" type="text/javascript"/></script>
            <script src="js/jquery/jquery-2.1.4.js" type="text/javascript"></script>
            <script type="text/javascript" src="js/script/IndexScript.js">
            </script> 
            <link rel="stylesheet" 
                href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css">
            <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
            <script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js"></script>
            <script type='text/javascript' src='http://ajax.googleapis.com/ajax/libs/jquery/1.4/jquery.min.js'></script>
            <script src="library/modernizr.js" type="text/javascript"></script>
        </head>
    <body>
        <div id="mainContainer">
           <header>
                <div id="leftLogo">
                    <a href="<?php echo $config ["paths"]["home"]["FromIndex"]?>"><img id="logo" 
                        src="<?php
                            echo $config["paths"]["images"]["FromIndex"]."/logo.png";
                        ?>" alt="ISNL">
                    </a>
                </div>
                <?php
                        include './includes/View/mainMenu.php';
                ?>
                <div id="Login">
                    <div>
                        <a id="btnLogin" href="includes/View/signIn.view.php">Login
                        </a>
                         <a id="btnSignUp">Sign up</a>
                    </div>
                </div>
            </header>
            <div id=outContainer">
                <div id="container">
                
                </div>
            </div>
            
            <?php
            include 'includes/View/footer.php';
            ?>
    </div><!--end div#mainContainer!-->
        
    </body>
</html>