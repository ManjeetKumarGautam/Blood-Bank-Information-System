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

            <h1> <u> Blood Request List </u></h1>       
            <table>
                <tr id="header">
                    <th>Name</th>
                    <th>Blood Group</th>
                    <th>Gender</th>
                    <th>Age</th>
                    <th>Mobile No.</th>
                </tr>
                <?php
                $q="SELECT * FROM br";
                $result=mysqli_query($db,$q);
				while($r1=mysqli_fetch_assoc($result))
				{
					?>
					<tr>
				
					<td><center><?=$r1['name'];?></center></td>
                    <td><center><?=$r1['bgroup'];?></center></td>
                    <td><center><?=$r1['gender'];?></center></td>
					<td><center><?=$r1['age']?></center></td>
                    <td><center><?=$r1['mno'];?></center></td>
					
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