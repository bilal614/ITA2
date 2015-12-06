<?php
    session_start();
    //constants for example values, will be removed after set up a real databases
    define('EMAIL','thanhhnk@gmail.com');
    define('PASSWORD','1234');
    define('USERNAME','thanhhnk');;
    if ( $_SERVER['REQUEST_METHOD'] == 'POST'){
        //Get their values
       $email = $_POST['email'];
       $password = $_POST['password'];
      
       //Validate that against the recodes
       if ($email === EMAIL && $password === PASSWORD){
           //credentials are correct
           
           
           //login +  set session
           $_SESSION['email'] = $email;// stored user name into the section, this value can be passed page to page
           $_SESSION['username'] = USERNAME;
           //redirecting to Profile.php
           header("Location: Profile.php");
       }
    }
?>

<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <title>ISDN website</title>
            <meta name="homepage" content="An interactive guide for events in NL for students.">
            <link href="../../templates/css/style.css" type="text/css" rel="stylesheet"/>
            <script src = "../../js/jquery/jquery-2.1.4.min.js" type="text/javascript"/></script>
            <script src="../../js/jquery/jquery-2.1.4.js" type="text/javascript"></script>
            <script type="text/javascript" src="../../js/script/loginScript.js">
            </script> 
            <link rel="stylesheet" 
                href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css">
            <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
            <script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js"></script>
    </head>
    <body>
        <div id="mainContainer">
            <?php
            include '../../config/config.php';
            include 'header.php';
            ?>
        <div id="container">
            <div class="loginMain">
                <div class="login-form">
                    <h1>Login</h1>
                    <div class="head">
                        <img alt="" src="../../templates/images/index/user.png">
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
        include 'footer.php';
        ?>
    </div><!--end div#mainContainer!-->
    </body>
</html>