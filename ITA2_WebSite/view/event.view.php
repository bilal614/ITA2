
<!DOCTYPE html>
<html>
    <?php displayHeadTag()?>  
    <body>  
        <div id="mainContainer">
            <?php
                displayHeader();
            ?>
            <div id="container">
                <div id="content_popup" style="visibility: hidden;"><?php global $message; echo $message;?>  </div>
                <?php
                    displayEvent();
                ?>
            </div><!--End #container-->
            <?php
            displayFooter();
            ?>
        </div>
    </body>
    <script>
        //Display the popup for respone message
        $(document).ready(function() {
            var options = { content : $('#content_popup') };
            $('a.popup').popup(options);
        });
    </script>
</html>         
