<?php
    if(isset($_POST['adminsignup'])){
        include('server.php');
    }
?>
<html>
    <head>
        <title>Admin Login Page</title>
        <link type="text/css" rel="stylesheet" href="form.css">
    </head>
    <body >
        <form action="admindashboard.php" method="post" class='form-signin' align="center">
            <h2 align="center">Login</h2>
            <table>
                <caption>
                    <img class='profile-img' src='images/login.png' align="center">
                </caption>
                <tr>
                    <th>Username/E-mail </th><td> <input type="text" name="adminmail" placeholder='E-mail' required></td>
                <tr>
                    <th>Password </th><td><input type="password" name="pass" placeholder='Password' required></td>
                </tr>
                <tr>
                    <th></th><td><input type="submit" name="adminlogin" value="Login"></td>
                </tr>
            </table>
        </form>
</body>
</html>   