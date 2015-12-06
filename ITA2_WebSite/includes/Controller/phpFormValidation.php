<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
        <?php
        $requireFields=  array("firstname","lastname","password","confirmpassword");
        $missingFields=array();
            
        //if(isset($_POST["submitButton"])){
          //  foreach($requireFields as $requiredField){
            //    if(!isset($_POST[$requiredField]) or !$_POST[$requiredField]){
              //      $missingFields[]=$requiredField;
                //}
            //}
        //}
                
        
        function validateField($fieldName,$missingFields){
            if(in_array($fieldName, $missingFields)){
                echo 'class="error"';
            }
        }
        
        ?>
