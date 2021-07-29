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

            <h1> Out Stock Blood List </h1>       
            <table>
                <tr id="header">
                    <th>Name</th>
                    <th>Mobile No.</th>
                    <th>Blood Group Name</th>
                </tr>
                <?php
                $q="SELECT * FROM osbl";
                $result=mysqli_query($db,$q);
				while($r1=mysqli_fetch_assoc($result))
				{
					?>
					<tr>
					

					<td><center><?=$r1['name'];?></center></td>
					<td><center><?=$r1['mno'];?></center></td>
					<td><center><?=$r1['bname'];?></center></td>
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