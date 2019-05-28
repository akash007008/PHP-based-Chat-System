<?php
  if(isset($_POST['uname'])){
    include('server.php');
  }
  else{
    session_start();
  }
  $_SESSION['acctype']='User';
  ?>
<html>
    <head>
        <title>Dashboard</title>
        <meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<link rel="stylesheet" href="form.css">
    </head>
    <body>
        
        <div class="navbar">
            <div class="dropdown">
            <button class="dwnbtn"><h3>Welcome <?php echo $_SESSION["fname"]; ?><i class="fa fa-caret-down"></i></h3></button>
            
            <div class="dropdown-content">
                <a href="profile.php">Profile</a>
                <a href="changepass.php">Change Password</a>
                <a href="login.php">Logout</a>
            </div>
            </div>
        </div>
    </body>
</html>   