<!DOCTYPE html>


<?php
  include('connection.php');
  session_start();
?>


<html>

<head>
    <title>B.B.I.S.</title>
    <link rel="stylesheet" href="style.css">
</head>

<body>
    <div class="bgimage">
        <div class="menu">
            <div class="leftmenu">
                <h4>B.B.I.S.</h4>
            </div>

            <div class="rightmenu">
                <ul>
                    <a href="home.php">
                        <li id="firstlist"> HOME </li>
                    </a>
                    <a href="BR.php">
                        <li> Blood Request </li>
                    </a>
                    <a href="user.php">
                        <li> LOGIN </li>
                    </a>
                </ul>
            </div>
        </div>

        <div class="text">
            <h4> GIVE THE GIFT OF LIFE </h4>
            <h1> DONATE BLOOD & SAVE LIFE </h1>
            <h3> THE BLOOD YOU DONATE GIVES SOMEONE ANOTHER CHANCE AT LIFE</h3>

            <a href="admin.php"><button id="btn1" type="submit"> ADMIN LOGIN </button></a>
            <a href="user.php"><button id="btn2" type="submit"> USER LOGIN </button></a>
        </div>







        <div class="footer">
        </div>
    </div>
</body>

</html>