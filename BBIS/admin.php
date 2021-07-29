<!DOCTYPE html>

<?php
  include('connection.php');
  session_start();
?>


<html>
    <head>
        <title>B.B.I.S.</title>
        <link rel="stylesheet" href="style/admin_user_login/loginstyle.css">
    </head>
    <body>
        <div class="bgimage">
            <div class="menu">
                <div class="leftmenu">
                    <h4>B.B.I.S.</h4>
                </div>

                <div class="rightmenu">
                    <ul>
                        <a href="home.php"><li> HOME </li></a>
                        
                    </ul>
                </div>
            </div>

            <div class="loginbox">
                <div class="form">
                    
                    <h1>Admin Login</h1>
                    <form action="" method="post">
                        <div class="inputbox">
                            <input type="text" name="uname" class="input" placeholder="username">
                        </div>
                        <div class="inputbox">
                            <input type="password" name="pass" class="input" placeholder="password">
                        </div>
            
                        <div class="inputbtn">
                            <input type="submit" value="Login" class="btn" name="sub">
                        </div>
                    </form>
                </div>
            </div>

            <?php
              if(isset($_POST['sub']))
              {
                $un=$_POST["uname"];
                $ps=$_POST["pass"];
                $q="SELECT * FROM admin";
                $result = mysqli_query($db,$q);
                if(mysqli_num_rows($result))
                {
                  $x = mysqli_fetch_assoc($result);
                  if($x['uname']===$un)
                  {
                    if($x['pass']===$ps){
                        echo "<script> alert('Successfully Login') </script>";  
                        header ("Location:adminhome.php");			
                    }
                    else{
                        echo "<script> alert('Wrong password') </script>";
                    }
                  }
                  else
                    {
                  echo "<script> alert('Wrong User') </script>";
                  }
                }
                
              }
                ?>


            <div class="footer">        
            </div>
        </div>
    </body>
</html>