<!DOCTYPE html>

<?php
  include('connection.php');
  session_start();
?>


<html>
    <head>
        <title>B.B.I.S.</title>
        <link rel="stylesheet" href="style/BDRF/bdrfstyle.css">
    </head>
    <body>
        <div class="bgimage">
            <div class="menu">
                <div class="leftmenu">
                    <h4>B.B.I.S.</h4>
                </div>

                <div class="rightmenu">
                    <ul>
                        <a href="adminhome.php"><li> HOME </li></a>
                        <a href="about.php"><li> ABOUT </li></a>
                        <a href="logout.php"><li> LOGOUT </li></a>
                    </ul>
                </div>
            </div> 
            
          
            <form action="" method="post">
            <div class="wrapper">
                <div class="title">
                  Blood Donor Registration Form
                </div>
                <div class="form">
                   <div class="inputfield">
                      <label>First Name</label>
                      <input type="text" name="firstname" class="input" required>
                   </div>  
                    <div class="inputfield">
                      <label>Last Name</label>
                      <input type="text" name="lastname" class="input" required>
                   </div>  
                   <div class="inputfield">
                    <label>User name</label>
                    <input type="text" name="uname" class="input" required>
                 </div> 
                   
                    <div class="inputfield">
                      <label>Email Address</label>
                      <input type="text" name="email" class="input" required>
                   </div> 
                  <div class="inputfield">
                      <label>Mobile Number</label>
                      <input type="text" name="mno" class="input" required>
                   </div> 
                  
                   <div class="inputfield">
                    <label>Password</label>
                    <input type="password" class="input" name="password" required>
                 </div> 
                  
                  <div class="inputfield">
                      <label>Confirm Password</label>
                      <input type="password" name="cpassword" class="input" required>
                   </div> 
                  <div class="inputfield terms">
                      <label class="check">
                        <input type="checkbox" required>
                        <span class="checkmark"></span>
                      </label>
                      <p>Agreed to terms and conditions</p>
                   </div> 
                  <div class="inputfield">
                    <input type="submit" name="sub" value="Register" class="btn">
                  </div>
                </div>
            </div>	
            </form>
            
            <?php
				if(isset($_POST['sub']))
				{
					$name = $_POST['firstname']." ".$_POST['lastname'];
					$uname = $_POST['uname'];
          $password = $_POST['password'];
					$mno = $_POST['mno'];
          $email = $_POST['email'];
          $cpassword = $_POST['cpassword'];
          

					$q="INSERT INTO user( name, uname, email, mno, password, cpassword) VALUES
              ('$name', '$uname','$email', '$mno', '$password', '$cpassword')";
          $result = mysqli_query($db,$q);
					if($result)
					{
                  
                      echo "<script>alert('Donor Registration Successfull')</script>";
                      header("Location:user.php");
                  
                }
					  else
					  {
						echo "<script>alert('Donor Registration Fail')</script>";
					  }
				  
        }
			?>
                  
            <div class="footer"></div>
        </div>
    </body>
</html>