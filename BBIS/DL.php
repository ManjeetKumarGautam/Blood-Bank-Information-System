<!DOCTYPE html>

<?php
include('connection.php');
session_start();
?>

<html>
    <head>
        <title>B.B.I.S.</title>
        <link rel="stylesheet" href="style/DL/dlstyle.css">
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
                       
                        <a href="logout.php"><li> LOGOUT </li></a>
                    </ul>
                </div>
            </div>         

            <h1> <u> Blood Donor List </u></h1>       
            <table>
                <tr id="header">
                    <th>Name</th>
                    <th>Father's Name</th>
                    <th>Blood Group</th>
                    <th>Last Blood Donate Detail</th>
                    <th>Gender</th>
                    <th>Email Address</th>
                    <th>Mobile No.</th>
                    <th>Address</th>
                    <th>City</th>
                    <th>Country</th>
                    <th>Postal Code</th>
                </tr>
                <?php
                $q="SELECT * FROM donor_registration";
                $result=mysqli_query($db,$q);
				while($r1=mysqli_fetch_assoc($result))
				{
					?>
					<tr>
				
					<td><center><?=$r1['name'];?></center></td>
					<td><center><?=$r1['fname'];?></center></td>
                    <td><center><?=$r1['bgroup'];?></center></td>
                    <td><center><?=$r1['lbdd'];?></center></td>
                    <td><center><?=$r1['gender'];?></center></td>
					<td><center><?=$r1['email']?></center></td>
                    <td><center><?=$r1['mno'];?></center></td>
					<td><center><?=$r1['address'];?></center></td>
                    <td><center><?=$r1['city'];?></center></td>
                    <td><center><?=$r1['country'];?></center></td>
					<td><center><?=$r1['postalcode'];?></center></td>
					
					</tr>
					
					<?php
				}
				?>
            </table>
            <div class="footer">        
            </div>
        </div>
    </body>
</html>