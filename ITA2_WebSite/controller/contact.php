<?php 
    session_start();
    include '../includes/common.inc.php';
    include '../model/Contact.class.php';

    $_SESSION['loadContact'] = FALSE;
    $errors = array();
    if(!empty($_POST)){
         //Validate the form in server side
        $required_fields = array('email', 'name', 'message', 'subject');
        foreach ($_POST as $key=>$value){
            if(empty($value) && in_array($key, $required_fields) === true)
            {
                $errors[] = 'Please enter all fields';
                break 1; // break out of the loop
            }
        }
    }
    function HandleErrors(){
        global $errors;
        if(empty($errors) === false) {
                //oput errors
                    echo output_error($errors); 
               }
    }

    function SentMessage(){
        global $errors;
        if(!empty($_POST) && empty($errors) && isset($_POST['submit'])){    
            $date = date('y-m-d');
            $message=array(
                'messageID' => Contact::generateUniqueId(),
                'email' => $_POST['email'],
                'name'=> $_POST['name'],
                'message'=> $_POST['message'],
                'subject'=> $_POST['subject'],
                'sentDate' => $date
            );
            $contact=new Contact($message);

            if($contact->sentFeedback())
            {
                //display popup message is sent successful
                    echo '<div class="alert alert-success">
                            <strong>Success!</strong> Message is sent successfully!
                          </div> '; 
                $_SESSION['loadContact'] = true;
            }
        }
        else {
            HandleErrors();
        }
    }

     //display the list of top recent five feedback
    function displayMessages()
    {
        if($_SESSION['loadContact'])
        {
//            $dataFeedback = Contact::getRecentFeedback();
//            foreach ($dataFeedback as $item)
//            {
//                echo $item['name'];
//            }
            echo "need to load item here";
        }
    }
    include '../view/contact.view.php';
