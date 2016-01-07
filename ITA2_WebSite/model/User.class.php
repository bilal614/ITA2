        <?php
        
        require_once 'DataObject.class.php';
        
        //this function takes in an email as an argument and returns 
        class User extends DataObject{
            protected $data=array(
                "email"=>"",
                "password"=>"",
                "signupDate"=>"",
            );
            
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
                $pword=  md5($this->data["password"]);
                $conn=  parent::connect();
                $sql="INSERT INTO ".TBL_USER. " (email,password,signupDate)
                VALUES(:userName,:password,:signupDate)";
                try{
                    $st=$conn->prepare($sql);
                    $st->bindValue(":userName",$this->data["email"],PDO::PARAM_STR);
                    $st->bindValue(":password",$pword,PDO::PARAM_STR);
                    $st->bindValue(":signupDate", $this->data["signupDate"],PDO::PARAM_STR);
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
    }
