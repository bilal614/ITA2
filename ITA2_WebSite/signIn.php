<?php
    session_start();
    //constants for example values, will be removed after set up a real databases
    define('EMAIL','thanhhnk@gmail.com');
    define('PASSWORD','1234');
    define ('USERNAME','thanhhnk');
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
           header("Location: webpage/personalPages/Profile.php");
       }
    }
?>
<!DOCTYPE html>
<html>
<body>
    <div class="loginMain">
        <div class="login-form">
            <h1>Login</h1>
            <div class="head">
                <img alt="" src="images/index/user.png">
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
</body>
</html>