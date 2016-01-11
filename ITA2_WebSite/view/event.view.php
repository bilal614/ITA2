
<!DOCTYPE html>
<html>
    <?php displayHeadTag()?>
    <link rel="stylesheet" 
      href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
    <script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js"></script>      
    <body>  
        <div id="mainContainer">
            <?php
                displayHeader();
            ?>
            <div id="container">
            <?php
                displayEvent();
            ?>
            </div><!--End #container-->
            <?php
            displayFooter();
            ?>
        </div>
    </body>
</html>         
