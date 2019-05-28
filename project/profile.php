<?php
    session_start();
?>
<html>
    <head>
        <title>Profile</title>
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
        <link rel="stylesheet" href="form.css">
    </head>
    <body>
        <div class="navbar">
            <div class="dropdown">
                <button class="dwnbtn"><h3>Welcome <?php echo $_SESSION["fname"]; ?><i class="fa fa-caret-down"></i></h3></button>
                <div class="dropdown-content">
                    <a href="#">Profile</a>
                    <a href="changepass.php">Change Password</a>
                    <a href="login.php">Logout</a>
                </div>
            </div>
        </div>
        <form method="post" action="server.php">
        <center><h3><?php echo $_SESSION['acctype']; ?> Profile</h3></center>
                <table>
                    <tr>
                        <th>User ID</th>
                        <td><?php  echo $_SESSION['id']; ?></td>
                    </tr>
                    <tr>
                        <th>First Name</th>
                        <td><input type="text" name="ufname" <?php echo 'value="'.$_SESSION['fname'].'"' ?> > </td>
                        <td><input type="submit" name="updatefname" value="SAVE"></td>
                    </tr>
                    <tr>
                        <th>Last Name</th>
                        <td><input type="text" name="ulname" <?php echo 'value="'.$_SESSION['lname'].'"' ?> ></td>
                        <td><input type="submit" name="updatelname" value="SAVE"></td>
                    </tr>
                    <tr>
                        <th>Username</th>
                        <td><input type="text" name="uuname" <?php echo 'value="'.$_SESSION['uname'].'"' ?> ></td>
                        <td><input type="submit" name="updateuname" value="SAVE"></td>
                    </tr>
                    <tr>
                        <th>Gender</th>
                        <td><input type="text" name="ugender" <?php echo 'value="'.$_SESSION['gender'].'"' ?> ></td>
                        <td><input type="submit" name="updategender" value="SAVE"></td>
                    </tr>
                    <tr>
                        <th>Date Of Birth</th>
                        <td><input type="date" name="udob" <?php echo 'value="'.$_SESSION['dob'].'"' ?> ></td>
                        <td><input type="submit" name="updatedob" value="SAVE"></td>
                    </tr>
                    <tr>
                        <th>E-mail</th>
                        <td><input type="email" name="uemail" <?php echo 'value="'.$_SESSION['email'].'"' ?> ></td>
                        <td><input type="submit" name="updateemail" value="SAVE"></td>
                    </tr>
                    <tr>
                        <th>Mobile no.</th>
                        <td><input type="text" name="umob" <?php echo 'value="'.$_SESSION['mob'].'"' ?> ></td>
                        <td><input type="submit" name="updatemob" value="SAVE"></td>
                    </tr>
                    <tr>
                        <th>City</th>
                        <td><input type="text" name="ucity" <?php echo 'value="'.$_SESSION['city'].'"' ?> ></td>
                        <td><input type="submit" name="updatecity" value="SAVE"></td>
                    </tr>
                  
                    <tr><th></th>
                    </tr>
                    <tr>
                        <th></th>
                        <td>
                        <?php
                            if($_SESSION['acctype']=='Admin'){echo '<a href="admindashboard.php"><input type="button" value="OK"></a>';}
                            else{echo '<a href="dashboard.php"><input type="button" value="OK"></a>';} ?></td>
                    </tr>
                </table>
        </form>
    </body>
</html>