<?php
/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of Event
 *
 * @author bilalbutt.614
 */
require_once 'DataObject.class.php';

class Event extends DataObject {
            protected $data=array(
                "eventId"=>"",
                "name"=>"",
                "date"=>"",
                "location"=>"",
                "description"=>"",
                "pictureLink"=>""
            );
            
            public function getThisEvent(){//returns all the information in an associative array, about the Event object
                $eventData=parent::GetData();
                
                if(!empty($eventData))
                    return $eventData;
                else 
                    return null;
            }
            
            public static function getEvent($eventID){//this method will return an Event object if it exists otherwise
                //it will return a null
            $conn=parent::connect();
            $sql ="SELECT * FROM ".TBL_EVENT. " WHERE eventId= :eventID";
    
            try{
                $st=$conn->prepare($sql);
                $st->bindValue(":eventID", $eventID,PDO::PARAM_STR);
                $st->execute();
                $row=$st->fetch();
                parent::disconnect($conn);
                if(!empty($row)) 
                {return new Event($row);}
                }  catch (PDOException $e){
                    parent::disconnect($conn);
                    die("Query failed: ".$e->getMessage());
                }
                return null;
            }
            
            public static function addToFavorites($email,$eventID){
            
                $conn=parent::connect();
                $sql ="INSERT INTO ".TBL_FAV. " (email,eventId) VALUES (:email, :eventId)";
                try{
                    $st=$conn->prepare($sql);
                    $st->bindValue(":email",$email,PDO::PARAM_STR);
                    $st->bindValue(":eventId", $eventID,PDO::PARAM_INT);
                    $st->execute();
                    parent::disconnect($conn);
                   } 
                catch (PDOException $e){
                       parent::disconnect($conn);
                       die("Query failed: ".$e->getMessage()); }                
            }
            
            public static function getFavorites($email){//this function returns an array of eventId's that are listed in 
                //Favorite table belonging to a certain email which is provided as argument parameter
                $conn=parent::connect();
                $sql ="SELECT eventId FROM ".TBL_FAV. " WHERE email= :Email";
    
                try{
                    $st=$conn->prepare($sql);
                    $st->bindValue(":Email", $email,PDO::PARAM_STR);
                    $st->execute();
                    $row=$st->fetchAll();
                    parent::disconnect($conn);
                
                    if(!empty($row)) 
                    {return new Event($row);}
                    }  catch (PDOException $e){
                    parent::disconnect($conn);
                    die("Query failed: ".$e->getMessage());
                    }
                return null;
            }
}
