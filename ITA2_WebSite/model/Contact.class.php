<?php

require_once 'DataObject.class.php';

class Event extends DataObject {
            protected $data=array(
                "messageID"=>"",
                "email"=>"",
                "name"=>"",
                "message"=>"",
                "subject"=>"",
                "sentDate"=>""
            );
            
            public function sentFeedback(){
                $conn=  parent::connect();
                $sql="INSERT INTO ".TBL_CON. " (messageID,email,name,message,subject,sentDate)
                VALUES(:messageID,:email,:name,:message,:subject,:sentDate)";
                try{
                    $st=$conn->prepare($sql);
                    $st->bindValue(":messageID",$this->data["messageID"],PDO::PARAM_STR);
                    $st->bindValue(":email",$this->data["email"],PDO::PARAM_STR);
                    $st->bindValue(":name", $this->data["name"],PDO::PARAM_STR);
                    $st->bindValue(":message", $this->data["message"], PDO:: PARAM_STR);
                    $st->bindValue(":subject", $this->data["subject"], PDO:: PARAM_STR);
                    $st->bindValue(":sentDate", $this->data["sentDate"], PDO:: PARAM_STR);
                    $st->execute();
                    parent::disconnect($conn);
                }catch(PDOException $e){
                    parent::disconnect($conn);
                    die("Query failed: ".$e->getMessage());
                }
            }
            
            //this method will return top 5 recent feedback
            public static function getRecentFeedback(){
                //it will return a null
            $conn=parent::connect();
            $sql ="SELECT * FROM".TBL_CON."ORDER BY SentDate LIMIT 5";
    
            try{
                $st=$conn->prepare($sql);
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

