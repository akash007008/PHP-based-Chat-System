<html>
    <head>
        <title>Signup Page</title>
        <link type="text/css" rel="stylesheet" href="form.css">
    </head>
    <body>
        <form action="login.php"  method="post" align="center">
            <h2 align="center">Sign Up</h2>
            <img class='profile-img' src='images/login.png' align="center"><br/>
            <table>
                <tr>
                    <th>First Name</th><td><input type="text" name="fname" placeholder='First Name' required></td>
                </tr>
                <tr>
                    <th>Last Name</th><td><input type="text" name="lname" placeholder='Last Name' required></td>
                </tr>
                <tr>
                    <th>Username </th><td> <input type="text" name="uname" placeholder='Username' required></td>
                </tr>
                <tr>
                    <th>Gender </th>
                    <td> <select name="gender"  required>
                        <option>--Select--</option>
                        <option>Male</option>
                        <option>Female</option>
                        <option>Others</option>
                        </select>
                    </td>
                </tr>
                <tr>
                    <th>Date Of Birth </th><td> <input type="date" name="dob" placeholder='Date Of Birth' required></td>
                </tr>
                <tr>
                    <th>E-mail</th><td><input type="email" name="email" placeholder='E-mail' required></td>
                </tr>
                <tr>
                    <th>Mobile no.</th><td><input type="text" name="mob" placeholder='Mobile no.' required></td>
                </tr>
                <tr>
                    <th>City </th><td> <input type="text" name="city" placeholder='City' required></td>
                </tr>
                <tr>
                    <th>Password </th><td> <input type="password" name="pass" placeholder='Password' required></td>
                </tr>
                <tr>                
                    <th></th><td><input type="submit" name="signup" value="Register" ></td>
                </tr>
                <tr>                
                    <th></th><td><span class="size"><span class="size1">Already Registered.</span><br/><a href="login.php"> Login Now</a></span></td>
                </tr>
            </form>
        </body>
</html>   