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
                        <a href="home.php"><li> HOME </li></a>
                    </ul>
                </div>
            </div> 
            
          
            <form action="" method="post">
            <div class="wrapper">
                <div class="title">
                  Blood Request
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
                    <label>Blood Group</label>
                    <div class="custom_select">
                      <select name="bgroup" required>
                        <option value="">Select Blood Group</option>
                        <option value="A+">A+</option>
                        <option value="A-">A-</option>
                        <option value="B+">B+</option>
                        <option value="B-">B-</option>
                        <option value="O+">O+</option>
                        <option value="O-">O-</option>
                        <option value="AB+">AB+</option>
                        <option value="AB-">AB-</option>
                      </select>
                    </div>
                    </div> 
                  
                  <div class="inputfield">
                      <label>Mobile Number</label>
                      <input type="text" name="mno" class="input" required>
                   </div> 
                  
                   <div class="inputfield">
                    <label>Patient Age</label>
                    <input type="text" class="input" name="age" required>
                 </div> 
                  
                 <div class="inputfield">
                      <label>Gender</label>
                      <div class="custom_select">
                        <select name="gender" required>
                          <option value="">Select</option>
                          <option value="male">Male</option>
                          <option value="female">Female</option>
                          <option value="other">Other</option>
                        </select>
                      </div>
                   </div> 
                  <div class="inputfield terms">
                      <label class="check">
                        <input type="checkbox" required>
                        <span class="checkmark"></span>
                      </label>
                      <p>Agreed to terms and conditions</p>
                   </div> 
                  <div class="inputfield">
                    <input type="submit" name="sub" value="Send Request" class="btn">
                  </div>
                </div>
            </div>	
            </form>
            
            <?php
				if(isset($_POST['sub']))
				{
					$name = $_POST['firstname']." ".$_POST['lastname'];
					$bgroup = $_POST['bgroup'];
          $age = $_POST['age'];
					$mno = $_POST['mno'];
          $gender = $_POST['gender'];
          

					$q="INSERT INTO br(name, bgroup, gender, age, mno) 
                VALUES('$name', '$bgroup','$gender', '$age', '$mno')";
          $result = mysqli_query($db,$q);
					if($result)
					{
            echo "<script>alert('Blood Request Successfull')</script>";

            header("Location:userhome.php");       
          }
					else
					{
					  echo "<script>alert('Blood Request Fail')</script>";
					}
        }
			?>
                  
            <div class="footer"></div>
        </div>
    </body>
</html>