<?php 
    session_start();
    include '../includes/common.inc.php';
?>
<!DOCTYPE html>
<html>
    <?php displayHeadTag(); ?>
    <body>  
        <div id="mainContainer">
            <?php
                displayHeader();
            ?>
            <div id="container">
                <div class="innercontainer">
                    <div class="Cdesc">CONTACT</div>
                    <div id = "contactInfor" style="overflow: auto; min-height: 500px;">
                        <div class="leftcolCont">
                            <div id="address">
                                <div class ="blackLine"></div>
                                <div class="CBdesc">Address</div>
                                <div>
                                    <p>Fontys University Of Applied Science</p>
                                    <p>Rachelsmolen 1</p>
                                    <p>Building R1 Room 2.47</p>
                                    <p>5612 MA Eindhoven</p>
                                </div>
                            </div>
                            <div id="map">
                               <iframe width="530" height="300" frameborder="0" style="border:0" src="https://www.google.com/maps/embed/v1/place?q=Rachelsmolen%201%20Building%20R1%20Room%202.47%205612%20MA%20Eindhoven&key=AIzaSyBVhAzcpxzpSzFdltKcg_ns6vQj0GxQCkY" allowfullscreen></iframe>
                            </div>
                        </div>
                        <div class="rightcolCont">
                            <div id="telephone">
                                <div class ="orangeLine"></div>
                                    <div class="desc" style = "color: #E36D01">Telephone</div>
                                    <div class="desc" style = "color: #E36D01">+31 8850 78127</div>
                            </div>
                           <div id="contact-area">
                                <form method="post" action="contactengine.php">

                                    <input type="text" name="Name" id="Name" placeholder="Your name"/>


                                    <input type="text" name="email" id="email" placeholder="Email" />


                                    <input type="text" name="subject" id="subject" placeholder="Subject"/>


                                    <textarea name="Message" rows="20" cols="20" id="Message" placeholder="Message"></textarea>

                                    <input type="submit" name="submit" value="Submit" class="submit-button" />
                                </form>

                                <div style="clear: both;"></div>		
                          </div>
                        </div><!--end div.rightcol!-->
                    </div> <!-- end div.ContactInfor-->
                    <div id="feedbackContainer" style="clear: both;">
                        <div class="blackLine"></div>
                        <div class="CBdesc">Recent feedback</div>
                        <div class="panel panel-success"> 
                            <div class="panel-heading"> 
                                <h3 class="panel-title">
                                    Panel title
                                </h3> 
                            </div> 
                            <div class="panel-body"> 
                                Panel content 
                            </div> 
                        </div>
                         <div class="panel panel-success"> 
                            <div class="panel-heading"> 
                                <h3 class="panel-title">
                                    Panel title
                                </h3> 
                            </div> 
                            <div class="panel-body"> 
                                Panel content 
                            </div> 
                        </div>
                         <div class="panel panel-success"> 
                            <div class="panel-heading"> 
                                <h3 class="panel-title">
                                    Panel title
                                </h3> 
                            </div> 
                            <div class="panel-body"> 
                                Panel content 
                            </div> 
                        </div>
                         <div class="panel panel-success"> 
                            <div class="panel-heading"> 
                                <h3 class="panel-title">
                                    Panel title
                                </h3> 
                            </div> 
                            <div class="panel-body"> 
                                Panel content 
                            </div> 
                        </div>
                    </div>
                </div><!--end div.innercontaine!-->
            </div><!--End #container-->
            <?php
            displayFooter();
            ?>
        </div>
    </body>
</html>         

    


