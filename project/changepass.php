<?php
    session_start();
?>
<html>
    <head>
        <title>Change Password</title>
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
        <!--<link rel="stylesheet" href="dashcss.css">-->
        <link type="text/css" rel="stylesheet" href="form.css">
    </head>
    <body>
        <div class="navbar">
            <div class="dropdown">
                <button class="dwnbtn"><h3>Welcome <?php echo $_SESSION["fname"]; ?><i class="fa fa-caret-down"></i></h3></button>
                <div class="dropdown-content">
                    <a href="profile.php">Profile</a>
                    <a href="#">Change Password</a>
                    <a href="login.php">Logout</a>
                </div>
            </div>  
        </div>
        
        <form action="server.php" method="post" align="center">
            <center><h3>Change Password</h3></center>
            <table class="table1">
                <tr>
                    <th>New Password </th><td> <input type="password" name="npass" placeholder='New Password' required></td>
                </tr>
                <tr>
                    <th>Confirm New Password </th><td> <input type="password" name="cnpass" placeholder='Confirm New Password' required></td>
                </tr>
                <tr>    
                    <th></th><td><input type="submit" name="changepass" value="Update">  </td>
                </tr>
        </form>
    </body>
</html>   