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
                      <label>Father's Name</label>
                      <input type="text" name="fname" class="input" required>
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
                    <label>Last Blood Donate Detail</label>
                    <div class="custom_select"  >
                      <select name="lbdd" required>
                      <option value="">Select </option>
                        <option value="No">No</option>
                        <option value="Yes">Yes</option>
                      </select>
                    </div>
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
                    <div class="inputfield">
                      <label>Email Address</label>
                      <input type="text" name="email" class="input" required>
                   </div> 
                  <div class="inputfield">
                      <label>Mobile Number</label>
                      <input type="text" name="mno" class="input" required>
                   </div> 
                  <div class="inputfield">
                      <label>Address</label>
                      <textarea class="textarea" name="address" required></textarea>
                   </div>
                   <div class="inputfield">
                    <label>City</label>
                    <input type="text" class="input" name="city" required>
                 </div> 
                 <div class="inputfield">
                    <label>Country</label>
                    <input type="text" name="country" class="input" required>
                 </div>  
                  <div class="inputfield">
                      <label>Postal Code</label>
                      <input type="text" name="postalcode" class="input" required>
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
					$fname = $_POST['fname'];
					$address = $_POST['address'];
          $city = $_POST['city'];
          $country = $_POST['country'];
					$lbdd = $_POST['lbdd'];
					$bgroup = $_POST['bgroup'];
					$mno = $_POST['mno'];
          $email = $_POST['email'];
          $gender = $_POST['gender'];
          $postalcode = $_POST['postalcode'];

					$q="INSERT INTO donor_registration(name, fname, address, city, country, bgroup, email, mno, lbdd, gender, postalcode) 
              VALUES ('$name', '$fname', '$address', '$city',' $country', '$bgroup', '$email', '$mno', '$lbdd', '$gender', '$postalcode')";
          $result = mysqli_query($db,$q)  ;
					if($result)
					{
            echo "<script>alert('Donor Registration Successfull')</script>";
            header ("Location:userhome.php");
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