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
                        <a href="userhome.php"><li> HOME </li></a>
                        <a href="BR2.php"><li > Blood Request </li></a>
                        <a href="logout.php"><li> LOGOUT </li></a>
                    </ul>
                </div>
            </div> 
            
          
            <form action="" method="post">
            <div class="wrapper">
                <div class="title">
                  Complication Details
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
                      <label>Email Address</label>
                      <input type="text" name="email" class="input" required>
                   </div> 
                  <div class="inputfield">
                      <label>Mobile Number</label>
                      <input type="text" name="mno" class="input" required>
                   </div> 
                  
                   <div class="inputfield">
                    <label>Any complication</label>
                    <div class="custom_select"  >
                      <select name="com" required>
                      <option value="">Select </option>
                        <option value="No">No</option>
                        <option value="Yes">Yes</option>
                      </select>
                    </div>
                    </div>
                  
                  <div class="inputfield">
                      <label>Which complication<br>
                       (if you select 'yes')</label>
                      <input type="text" name="wcom" class="input" id="wcom" >
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
					$com = $_POST['com'];
          $wcom = $_POST['wcom'];
					$mno = $_POST['mno'];
          $email = $_POST['email'];
          
          

					$q="INSERT INTO cad( name, email, mno, com, wcom) VALUES
              ('$name','$email', '$mno', '$com', '$wcom')";
          $result = mysqli_query($db,$q);
					if($result)
					{
                  
                      echo "<script>alert('Complication details Successfull')</script>";
                      header("Location:userhome.php");
                  
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