<?php 
    if(isset($_POST['changepass']))
    {
        include('server.php');
    }
?>
<?php
    if(isset($_POST['signup'])){
        include('server.php');
    }
?>
<html>
    <head>
        <title>Login Page</title>
        <link type="text/css" rel="stylesheet" href="form.css">
    </head>
    <body >
        <form action="dashboard.php" method="post" class='form-signin' align="center">
            <h2 align="center">Login</h2>
            <table>
                <caption>
                    <img class='profile-img' src='images/login.png' align="center">
                </caption>
                <tr>
                    <th>Username/E-mail </th><td> <input type="text" name="uname" placeholder='Username/E-mail' required></td>
                <tr>
                    <th>Password </th><td><input type="password" name="pass" placeholder='Password' required></td>
                </tr>
                <tr>
                    <th></th><td><input type="submit" name="login" value="Login"></td>
                </tr>
                <tr>
                    <th></th><td><span class="size"><span class="size1">Not Registered Yet.</span><br/><a href="signup.php">Register Now</a></span></td>
                </tr>
            </table>
        </form>
</body>
</html>   