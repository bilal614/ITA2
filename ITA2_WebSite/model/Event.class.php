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
            
}
