<?php 
include 'DBConnection.php';

function getUser($username,$password){
    //connect to database
    $username=  preg_replace("[^A-Za-z0-9]", "", $username);
    $password=  preg_replace("[^A-Za-z0-9]", "", $password);
    $sql="SELECT * FROM itausers WHERE email='$username' AND password='$password'";
    try{
    $sqlstmnt=$conn->prepare($sql);}
    catch(PDOException $e){
        //disconnect the database when an exception occurs
    }        
}


/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of signIn
 *
 * @author Thanh Huynh
 */
class signIn {
    //put your code here
}
