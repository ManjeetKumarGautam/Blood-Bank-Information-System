<!DOCTYPE html>

<?php
include('connection.php');
session_start();
?>

<html>
    <head>
        <title>B.B.I.S.</title>
        <link rel="stylesheet" href="style/OSBL/osblstyle.css">
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

            <h1> Complication Detail List </h1>       
            <table>
                <tr id="header">
                    <th>Name</th>
                    <th>Email Address </th>
                    <th>Mobile No.</th>
                    <th>Any Complication</th>
                    <th>Complication</th>
                </tr>
                <?php
                $q="SELECT * FROM cad";
                $result=mysqli_query($db,$q);
				while($r1=mysqli_fetch_assoc($result))
				{
					?>
					<tr>
					

					<td><center><?=$r1['name'];?></center></td>
					<td><center><?=$r1['email'];?></center></td>
					<td><center><?=$r1['mno'];?></center></td>
                    <td><center><?=$r1['com'];?></center></td>
                    <td><center><?=$r1['wcom'];?></center></td>
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