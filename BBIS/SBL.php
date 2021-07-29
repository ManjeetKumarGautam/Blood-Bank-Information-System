<!DOCTYPE html>

<?php
include('connection.php');
session_start();
?>

<html>
    <head>
        <title>B.B.I.S.</title>
        <link rel="stylesheet" href="style/SBL/sblstyle.css">
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

            <h1> Stock Blood List </h1>       
            <table>
                <tr id="header">

                    <th>Blood Group Name</th>
                    <th>Quantity</th>
                </tr>
                
                <tr>
                    <td class="BGN">A+</td>
                    <td>
                        <?php
							$q="SELECT count(id) AS total FROM donor_registration where bgroup='A+'";
                            $result = mysqli_query($db,$q);
                            $value = mysqli_fetch_assoc($result);
                            $num_rows = $value['total'];
                            echo $num_rows;
						?>
                    </td>
                    
                </tr>
                <tr>
                    <td class="BGN">A-</td>
                    <td><?php
							$q="SELECT count(id) AS total FROM donor_registration where bgroup='A-'";
                            $result = mysqli_query($db,$q);
                            $value = mysqli_fetch_assoc($result);
                            $num_rows = $value['total'];
                            echo $num_rows;
						?>
                    </td>
                    
                </tr>
                <tr>
                    <td class="BGN">B+</td>
                    <td><?php
							$q="SELECT count(id) AS total FROM donor_registration where bgroup='A+'";
                            $result = mysqli_query($db,$q);
                            $value = mysqli_fetch_assoc($result);
                            $num_rows = $value['total'];
                            echo $num_rows;
						?></td>
                    
                </tr>
                <tr>
                    <td class="BGN">B-</td>
                    <td><?php
							$q="SELECT count(id) AS total FROM donor_registration where bgroup='B-'";
                            $result = mysqli_query($db,$q);
                            $value = mysqli_fetch_assoc($result);
                            $num_rows = $value['total'];
                            echo $num_rows;
						?></td>
                    
                </tr>
                <tr>
                    <td class="BGN">O+</td>
                    <td><?php
							$q="SELECT count(id) AS total FROM donor_registration where bgroup='O+'";
                            $result = mysqli_query($db,$q);
                            $value = mysqli_fetch_assoc($result);
                            $num_rows = $value['total'];
                            echo $num_rows;
						?></td>
                    
                </tr>
                <tr>
                    <td class="BGN">O-</td>
                    <td><?php
							$q="SELECT count(id) AS total FROM donor_registration where bgroup='O-'";
                            $result = mysqli_query($db,$q);
                            $value = mysqli_fetch_assoc($result);
                            $num_rows = $value['total'];
                            echo $num_rows;
						?></td>
                    
                </tr>
                <tr>
                    <td class="BGN">AB+</td>
                    <td><?php
							$q="SELECT count(id) AS total FROM donor_registration where bgroup='AB+'";
                            $result = mysqli_query($db,$q);
                            $value = mysqli_fetch_assoc($result);
                            $num_rows = $value['total'];
                            echo $num_rows;
						?></td>
                    
                </tr>
                <tr>
                    <td class="BGN">AB-</td>
                    <td><?php
							$q="SELECT count(id) AS total FROM donor_registration where bgroup='AB-'";
                            $result = mysqli_query($db,$q);
                            $value = mysqli_fetch_assoc($result);
                            $num_rows = $value['total'];
                            echo $num_rows;
						?></td>
                    
                </tr>
            </table>
            <div class="footer">        
            </div>
        </div>
    </body>
</html>