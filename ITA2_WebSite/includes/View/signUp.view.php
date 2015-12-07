<?php //require '../Controller/phpFormValidation.php'?>
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
                //include '../../config/config.php';
                include 'header.php';
                //function validateForm(){
                $requireFields=  array("firstname","lastname","password","confirmpassword");
                $missingFields=array();
                if(isset($_POST["submitButton"])){
                    processForm();
                }else{displayForm();} 
                
                function validateField($fieldName,$missingFields){
            if(in_array($fieldName, $missingFields)){
                echo ' class="error" ';
            }
        }
        
        
        function setValue($fieldName){
            if(isset($_POST[$fieldName])){
                echo 'value="'.$_POST[$fieldName].'"';
            }
        }
                
        function processForm(){
            foreach($requireFields as $requiredField){
                if(!isset($_POST[$requiredField]) or !$_POST[$requiredField]){
                    $missingFields[]=$requiredField;}
                }
            if($missingFields or $_POST["password"]!=$_POST["confirmpassword"]){displayForm($missingFields);}
            else{displayThanks();}
        }
                
                function displayForm($missingFields){
                    if($missingFields){?>
            <p class="error">There were some problems with the form you submitted. Please complete
                the fields highlighted below and click Send Details to resend the form.</p>
        <?php }else if($_POST["password"]!=$_POST["confirmpassword"])
                    echo '<p class="error">Password and confirm password do not match</p>';
                ?>
            <div id="container">
                <div class="login-form">
                    <h1>Sign Up</h1>
                    <form id="signupform" action="signUp.view.php" method="post" >
                        <!--onsubmit="return validateForm()" //this is for adding jquery validation!-->
                        <fieldset name="SignUpForm">
                            
                            <label for="firstname"  <?php validateField("firstname", $missingFields)?> >First Name: </label>
                            <input type="text" name="firsname" <?php setValue("firstname")?> required><br>
                            
                            <label for="lastName" <?php validateField("lastname", $missingFields)?> >Last Name: </label>
                            <input type="text" name="lastname" <?php setValue("lastname")?> required><br>
                            
                            <label for="email" <?php validateField("lastname", $missingFields)?> >E-Mail: </label> 
                            <input type="email" name="email" <?php setValue("email") ?> required><br>
                            
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
               <?php } 
               function displayThanks(){
                   echo '<h1> Thank you. Your application has been received.';
               }
               ?>
        </div>
    </body>
</html>