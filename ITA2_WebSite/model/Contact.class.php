<?php

require_once 'DataObject.class.php';

class Contact extends DataObject {
            protected $data=array(
                "messageID"=>"",
                "email"=>"",
                "name"=>"",
                "message"=>"",
                "subject"=>"",
                "sentDate"=>""
            );
            protected $messageInfors=array();
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
                    return false;
                }
                return true;
            }
            
            //this method will return top 5 recent feedback
            public static function getRecentFeedback(){
                //it will return a null
            $conn=parent::connect();
            $sql ="SELECT * FROM ".TBL_CON." ORDER BY SentDate LIMIT 5";
    
            try{
                    $st=$conn->prepare($sql);
                    $st->execute();
                    $row=$st->fetchAll();
                    parent::disconnect($conn);
                    if(!empty($row)) {
                        return $rows;

                    }
                }  
                catch (PDOException $e){
                    parent::disconnect($conn);
                    die("Query failed: ".$e->getMessage());
                }
                return null;
            }
            
            public static function generateUniqueId()
            {
                $x=  rand(11111, 99999);
                $conn=  parent::connect();
                $sql="SELECT MessageID FROM ".TBL_CON." WHERE MessageID=:x";
                $row;
                do{
                try{
                    $st=$conn->prepare($sql);
                    $st->bindValue(":x", $x,PDO::PARAM_INT);
                    $st->execute();
                    $row=$st->fetch();
                    if($row) 
                    {
                        $x=rand(11111,99999);
                        $sql="SELECT MessageID FROM ".TBL_CON." WHERE MessageID=:x";
                    }
                    else{$row=null;}
                    }  catch (PDOException $e){
                    parent::disconnect($conn);
                    die("Query failed: ".$e->getMessage());
                    }
                    }while(isset($row) && !empty($row));//$row!=null
                    parent::disconnect($conn);
                    return $x;
            }
            
}

