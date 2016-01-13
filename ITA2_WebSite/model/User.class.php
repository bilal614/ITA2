        <?php
        
        require_once 'DataObject.class.php';
        
        //this function takes in an email as an argument and returns 
        class User extends DataObject{
            protected $data=array(
                "email"=>"",
                "password"=>"",
                "signupDate"=>"",
                "username"=>"",
            );
            
            protected $favoriteEvents=array();
            
            public function getAllFavoriteEvents()
            {
                return $this->favoriteEvents;
            }
            
            public static function getUserAccount($userEmail){
            $conn=parent::connect();
            $sql ="SELECT * FROM ".TBL_USER. " WHERE email= :userEmail";
    
            try{
                $st=$conn->prepare($sql);
                $st->bindValue(":userEmail", $userEmail,PDO::PARAM_STR);
                $st->execute();
                $row=$st->fetch();
                parent::disconnect($conn);
                if($row) 
                {return new User ($row);}
                }  catch (PDOException $e){
                    parent::disconnect($conn);
                    die("Query failed: ".$e->getMessage());
                }
            }
            

            public static function authenticate($email,$password){
                //$password = md5($password);
                $conn=  parent::connect();
                $sql="SELECT * FROM ".TBL_USER." WHERE email= :userEmail AND password= :password";
                try{
                    $st=$conn->prepare($sql);
                    $st->bindValue(":userEmail", $email,PDO::PARAM_STR);
                    $st->bindValue(":password", $password,PDO::PARAM_STR);
                    $st->execute();
                    $row=$st->rowCount();
                    parent::disconnect($conn);
                    if($row != 0)
                    {
                        return $email;
                    }
                    else 
                    {
                        return false;
                    } 
                }
                catch(PDOException $e){
                    parent::disconnect($conn);
                    die("Query failed: ".$e->getMessage());
                }
            }
            
            //first you pass all the information of the user such as UserName, password etc. to the data array 
            //of a User object, then you call the register function to create an instance of the user in the
            //database
            public function register(){
                $conn=  parent::connect();
                $sql="INSERT INTO ".TBL_USER. " (email,password,signupDate,username)
                VALUES(:userName,:password,:signupDate,:username)";
                try{
                    $st=$conn->prepare($sql);
                    $st->bindValue(":userName",$this->data["email"],PDO::PARAM_STR);
                    $st->bindValue(":password",$this->data["password"],PDO::PARAM_STR);
                    $st->bindValue(":signupDate", $this->data["signupDate"],PDO::PARAM_STR);
                    $st->bindValue(":username", $this->data["username"], PDO:: PARAM_STR);
                    $st->execute();
                    parent::disconnect($conn);
                }catch(PDOException $e){
                    parent::disconnect($conn);
                    die("Query failed: ".$e->getMessage());
                }
            }
            
            //this method will return true if the given user's email exists in the database
            //used for registration 
            public static function user_exists($userEmail){
                $conn=parent::connect();
                $sql ="SELECT email FROM ".TBL_USER. " WHERE email= :userEmail";
                try{
                    $st=$conn->prepare($sql);
                    $st->bindValue(":userEmail", $userEmail,PDO::PARAM_STR);
                    $st->execute();
                    $row=$st->rowCount();
                    parent::disconnect($conn);
                    if($row != 0)
                    {
                        return true;
                    }
                    else 
                    {
                        return false;
                    } 
                }
                catch(PDOException $e){
                    parent::disconnect($conn);
                    die("Query failed: ".$e->getMessage());
                }
            }
            
            public function addToFavorites($eventID){
                if(User::favoriteExists($eventID)==false)
                    {
                        $conn=parent::connect();
                        $sql ="INSERT INTO ".TBL_FAV. " (email,eventId) VALUES (:email, :eventId)";
                        try{
                            $st=$conn->prepare($sql);
                            $st->bindValue(":email",$this->data['email'],PDO::PARAM_STR);
                            $st->bindValue(":eventId", $eventID,PDO::PARAM_INT);
                    
                            $st->execute();
                            parent::disconnect($conn);
                            return true;                 
                        } 
                        catch (PDOException $e){
                            parent::disconnect($conn);
                            die("Query failed: ".$e->getMessage()); }                      
                    }else{
                        return false;
                    }            
            }
            
            public function getFavorites(){//this function returns an array of eventId's that are listed in 
                //Favorite table belonging to a certain email which is provided as argument parameter
                $conn=parent::connect();
                $sql ="SELECT eventId FROM ".TBL_FAV. " WHERE email= :Email";
                $favEvnts=array();
                try{
                    $st=$conn->prepare($sql);
                    $st->bindValue(":Email", $this->data['email'],PDO::PARAM_STR);
                    $st->execute();
                    
                    $rows=$st->fetchAll(PDO::FETCH_COLUMN,'eventId');
                    
                    foreach($rows as $val){
                        $this->favoriteEvents[]=(integer)$val;
                    }
                    
                    parent::disconnect($conn);
                    }  catch (PDOException $e){
                    parent::disconnect($conn);
                    die("Query failed: ".$e->getMessage());
                    }
            }
            
            public static function favoriteExists($id)
            {
                $conn=parent::connect();
                $sql ="SELECT eventId FROM ".TBL_FAV. " WHERE eventId= :eventId;";
                try{
                    $st=$conn->prepare($sql);
                    $st->bindValue(":eventId", $id,PDO::PARAM_INT);
                    $st->execute();
                    $row=$st->fetch();
                    if(!empty($row)){
                        return true;
                    }else{return false;}
                    parent::disconnect($conn);
                   } 
                catch (PDOException $e){
                       parent::disconnect($conn);
                       die("Query failed: ".$e->getMessage()); }
                
            }
    }
