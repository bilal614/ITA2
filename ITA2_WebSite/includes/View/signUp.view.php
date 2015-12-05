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
            <script src="http://code.jquery.com/jquery-2.1.1.min.js"></script>
            <script src="../../js/jquery/jquery.validate.js"></script>
        </head>
    <body>
        <div id="mainContainer">
            <?php
                include '../../config/config.php';
                include 'header.php';
                $requiredFileds=array("firstname","lastname","email","password","confirmpassword")
                //function validateForm(){
                    
                //}
            ?>
            <div id="container">
                <div class="login-form">
                    <h1>Sign Up</h1>
                    <form id="signupform" onsubmit="return validateForm()" action="example" method="post" >
                        <fieldset name="SignUpForm">
                            <label for="firstName" value="First Name">First Name: </label>
                            <input type="text" name="firsname" onfocus="this.value='';" value="First Name" required
                                   <?php ?>><br>
                            
                            <label for="lastName">Last Name: </label>
                            <input type="text" name="lastname" onfocus="this.value=''" value="Last Name" required><br>
                            
                            <label for="email" onfocus="this.value='';" value="Email">E-Mail: </label> 
                            <input type="text" name="email" onfocus="this.value=''" value="Email" required><br>
                            
                            <label for="password">Password: </label><br>
                            <input type="password" name="password" required><br>
                            
                            <label for="confirmpassword">Confirm Password: </label>
                            <input type="password" name="confirmpassword" required><br>
                            
                            <input type="submit" value="Submit">
                            <input type="reset" value="Reset">                  
                        </fieldset>
                    </form>
                    <script>$("#signupform").validate();</script>
                </div>
            </div>
        </div>
    </body>
</html>