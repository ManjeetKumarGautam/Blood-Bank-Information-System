<!DOCTYPE html>
<?php
  include('connection.php');
  session_start();
?>

<html>
    <head>
        <title>B.B.I.S.</title>
        <link rel="stylesheet" href="style/home/homestyle.css">
    </head>
    <body>
        <div class="bgimage">
            <div class="menu">
                <div class="leftmenu">
                    <h4>B.B.I.S.</h4>
                </div>

                <div class="rightmenu">
                    <ul>
                        <a href="userhome.php"><li id="firstlist"> HOME </li></a>
                        <a href="BR2.php"><li > Blood Request </li></a>
                        <a href="logout.php"><li> LOGOUT </li></a>
                    </ul>
                </div>
            </div>                
            <div class="body">   
                 
                <div class="container">
                    <a href="BDRF.php">
                        <div class="box">
                        
                            <div class="content">
                                <h3>Donor Registration</h3>
                            </div>
                        </div>
                    </a>
                    <a href="DD.php">
                        <div class="box">
                            
                            <div class="content">
                                <h3>Donor<br>Details</h3>
                            </div>
                        
                        </div>
                    </a>
                    
                    <a href="EBDRF.php">
                        <div class="box">
                            
                            <div class="content">
                                <h3>Exchange Blood Registration</h3>
                            </div>
                        </div>
                    </a>
                    <a href="EBD.php">
                        <div class="box">
                            
                            <div class="content">
                                <h3>Exchange Blood Detail</h3>
                            </div>
                        </div>
                    </a>
                    <a href="cad.php">
                        <div class="box">
                            
                            <div class="content">
                                <h3>Complications After Donation</h3>
                            </div>
                        </div>
                    </a>
                    
                </div>

               
            
            </div>

            <div class="footer">        
            </div>
        </div>
    </body>
</html>