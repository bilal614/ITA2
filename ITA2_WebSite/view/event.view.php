
<!DOCTYPE html>
<html>
    <?php displayHeadTag()?>  
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
        <script>
                //Display the popup for respone message
                $(document).ready(function() {
                    var options = { content : $('#content_popup') };
                    $('a.popup').popup(options);
                });
        </script>
        <div id="content_popup" style="visibility: hidden;"></div>
    </body>
</html>         
