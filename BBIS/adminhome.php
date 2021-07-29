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
                        <a href="adminhome.php"><li id="firstlist"> HOME </li></a>
                        
                        <a href="logout.php"><li> LOGOUT </li></a>
                    </ul>
                </div>
            </div>                
            <div class="body">   
                 
                <div class="container">
                    
                    <a href="DL.php">
                        <div class="box">
                            
                            <div class="content">
                                <h3>Donor<br>List</h3>
                            </div>
                        
                        </div>
                    </a>
                    <a href="SBL.php">
                        <div class="box">
                            
                            <div class="content">
                                <h3>Stock Blood List</h3>
                            </div>
                        </div>
                    </a>
                    <br>
                    <a href="OSBL.php">
                        <div class="box">
                        
                            <div class="content">
                                <h3>Out Stock Blood List</h3>
                            </div>
                        </div>
                    </a>
                    
                    <a href="EBL.php">
                        <div class="box">
                            
                            <div class="content">
                                <h3>Exchange Blood List</h3>
                            </div>
                        </div>
                    </a>
                    <a href="BRL.php">
                        <div class="box">
                            
                            <div class="content">
                                <h3>Blood<br>Request List</h3>
                            </div>
                        </div>
                    </a>
                    <a href="cd.php">
                        <div class="box">
                        
                            <div class="content">
                                <h3>Complication<br>Details</h3>
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