<!DOCTYPE html>

<?php
include('connection.php');
session_start();
?>

<html>
    <head>
        <title>B.B.I.S.</title>
        <link rel="stylesheet" href="style/EBDRF/ebdrfstyle.css">
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
             

            <div class="wrapper">
                <div class="title">
                  Exchange Blood Donor Registration Form
                </div>
                <div class="form">
                  <form action="" method="post">
                   <div class="inputfield">
                      <label>First Name</label>
                      <input type="text" class="input" name="firstname" required>
                   </div>  
                    <div class="inputfield">
                      <label>Last Name</label>
                      <input type="text" class="input" name="lastname" required>
                   </div>  
                   <div class="inputfield">
                      <label>Father's Name</label>
                      <input type="text" class="input" name="fname" required>
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
                      <label>Exchange Blood Group</label>
                      <div class="custom_select">
                        <select  name="ebg" required>
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
                      <label>Gender</label>
                      <div class="custom_select">
                        <select name="gender"  required>
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
                    <input type="text" class="input" name="country" required>
                 </div>  
                  <div class="inputfield">
                      <label>Postal Code</label>
                      <input type="text" class="input" name="postalcode" required>
                   </div> 
                  <div class="inputfield terms">
                      <label class="check">
                        <input type="checkbox">
                        <span class="checkmark"></span>
                      </label>
                      <p>Agreed to terms and conditions</p>
                   </div> 
                  <div class="inputfield">
                    <input type="submit" value="Register" name="sub" class="btn">
                  </div>
                  </form>

                  <?php
									if(isset($_POST['sub']))
									{
										//front end data input
										$name = $_POST['firstname']." ".$_POST['lastname'];
                    $fname = $_POST['fname'];
                    $address = $_POST['address'];
                    $city = $_POST['city'];
                    $country = $_POST['country'];
                    $bgroup = $_POST['bgroup'];
                    $mno = $_POST['mno'];
                    $email = $_POST['email'];
                    $gender = $_POST['gender'];
                    $postalcode = $_POST['postalcode'];
										$ebg = $_POST['ebg'];
										//front end data input end
										
										//select and insert
										$q="SELECT * from donor_registration where bgroup='$bgroup'";
                    $st=mysqli_query($db, $q);
                    $num_row=mysqli_fetch_assoc($st);
										  $id=$num_row['id'];
									    $name2=$num_row['name'];
									    $b1=$num_row['bgroup'];
                      $mno2=$num_row['mno'];
                      
										$q1="INSERT INTO osbl(bname, name, mno) value('$b1','$name2','$mno2')";
										$result=mysqli_query($db, $q1);
                    
										
                    //select and insert end
                    
										
										//delete code
										$q2="DELETE from  donor_registration where id='$id'";
										$st2=mysqli_query($db, $q1);
										//delete end 
										
										if($st2)
										{
											echo "Insert";
										}
										else
										{
											echo"Not Insert";
										}
										//exchange info insert
										$q3="INSERT INTO ebgr(name, fname, address, city, country, bgroup, email, mno, ebg, gender, postalcode) VALUES
													('$name', '$fname', '$address', '$city', '$country', '$bgroup', '$email', '$mno', '$ebg', '$gender', '$postalcode')";
                      
                      $res = mysqli_query($db,$q3);
											if($res)
										{
											echo "<script>alert(' Registration Successfull')</script>";
                      header("Location:EBDRF.php");
										}
										else
										{
											echo "<script>alert('Donor Registration Fail')</script>";
										}
										
										//exchange info insert end
									}
									
								?>


                </div>
            </div>	
            
            <div class="footer"></div>
        </div>
    </body>
</html>