<?php
session_start();
$servername = "localhost";
$username = "root";
$password = "password";
$dbname = "client";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

//FOR LOGIN PAGE
if(isset($_POST['login'])){
    $sql = "SELECT * FROM users WHERE email='$_POST[uname]'";
    $result = $conn->query($sql);
    if ($result->num_rows >= 1) {
        // output data of each row
        $row = $result->fetch_assoc();
        //print_r($row);die;
            if($row['pass'] == $_POST['pass']){
            $_SESSION['uname']=$row['uname'];
            $_SESSION['email']=$row['email'];
            $_SESSION['id']=$row['ID'];
            $_SESSION['fname']=$row['fname'];
            $_SESSION['lname']=$row['lname'];
            $_SESSION['dob']=$row['dob'];
            $_SESSION['city']=$row['city'];
            $_SESSION['gender']=$row['gender'];
            $_SESSION['mob']=$row['mob'];
            
        }
        else{
            echo "Error: ". $conn->error;
            header("location:login.php?Error: INCORECT USERNAME OR PASSWORD");
            //header("location:login.php");
        }
    }
    else {
        //echo "Error: ". $conn->error;
        header("location:login.php?Error: INCORECT USERNAME OR PASSWORD");
        echo "Error: INCORECT USERNAME OR PASSWORD";
    }
}

//FOR SIGNUP PAGE
if(isset($_POST['signup'])){
    $sql = "INSERT INTO users ( fname, lname, uname, gender, dob, email, mob, city, pass)
    VALUES ('$_POST[fname]', '$_POST[lname]', '$_POST[uname]', '$_POST[gender]', '$_POST[dob]', '$_POST[email]', '$_POST[mob]', '$_POST[city]', '$_POST[pass]')";

    if ($conn->query($sql) === TRUE) {
        echo "<center><h1>Registration Successfull</hi></center>";
 
    } else {
        echo "Error: ". $conn->error;
    }
}

//FOR PASSWORD CHANGE
if(isset($_POST['changepass'])){
    $sql = "UPDATE users SET pass='$_POST[npass]' WHERE id='$_SESSION[id]' ";
    if($_POST['npass']==$_POST['cnpass']){
        if ($conn->query($sql) === TRUE) {
            echo "<center><h1>Password Updated Successfully</h1></center>";
            echo "<a href='login.php'><span class='size' ><center>Proceed To LOGIN<center></span></a>";
        }
        else {
            echo "Error: " . $conn->error;
        }
    }else{
        echo "<script type='text/javascript'>alert('Password didn't matched.');</script>";
    }
}

//FOR PROFILE DATA FETCHING
/*if(isset($_POST['profile'])){
    $sql = "SELECT * FROM sample WHERE uname='$_SESSION[uname]'";
    $result = $conn->query($sql);
    if ($result->num_rows == 1) {
        // output data of each row
        $row = $result->fetch_assoc();
   }
   echo "<table>
            <tr>
                <th>Name</th>
                <td>".$row['name']."</td>
            </tr>
            <tr>
                <th>Username</th>
                <td>".$row['uname']."</td>
            </tr>
            <tr>
                <th>City</th>
                <td>".$row['city']."</td>
            </tr>
            <tr>
                <th>Gender</th>
                <td>".$row['gender']."</td>
            </tr>
            <tr>
                <th>Password</th>
                <td>".$row['password']."</td>
            </tr>
        </table>";
}


//FOR PROFILE DATA UPDATE
if(isset($_POST['uprofile'])){
    $sql="UPDATE users SET fname='$_POST[ufname]' OR lname='$_POST[ulname]'OR uname='$_POST[uuname]'OR gender='$_POST[ugender]'OR dob='$_POST[udob]'OR email='$_POST[email]' OR mob='$_POST[mob]' OR city='$_POST[city]' WHERE id='$_SESSION[id]'";
    if($conn->query($sql)=== TRUE){
        echo "<center><h2>Profile Successfully Updated</h2></center> ";
        $sql = "SELECT * FROM users WHERE id='$_SESSION[id]'";
        $result = $conn->query($sql);
        if ($result->num_rows == 1) {
            // output data of each row
            $row = $result->fetch_assoc();
            $_SESSION['uname']=$row['uname'];
            $_SESSION['email']=$row['email'];
            $_SESSION['id']=$row['ID'];
            $_SESSION['fname']=$row['fname'];
            $_SESSION['lname']=$row['lname'];
            $_SESSION['dob']=$row['dob'];
            $_SESSION['city']=$row['city'];
            $_SESSION['gender']=$row['gender'];
            $_SESSION['mob']=$row['mob'];
       }
       header("location:profile.php");
    }
    else{
        echo "Error : ".$conn->error;
    }
}*/

//FOR PROFILE DATA UPDATE
if (isset($_POST['updatefname'])) {
    $name = $_POST['ufname'];
    $sql="UPDATE users SET fname='$name' WHERE id='$_SESSION[id]'";
    if ($conn->query($sql) === TRUE) {
        $sql = "SELECT * FROM users WHERE id='$_SESSION[id]'";
        $result = $conn->query($sql);
        if ($result->num_rows == 1) {
            // output data of each row
            $row = $result->fetch_assoc();
            $_SESSION['fname']=$row['fname'];
        }
        header("location:profile.php");
    }
    else {
        echo "Error: " . $conn->error;
    }
}
if (isset($_POST['updatelname'])) {
    $name = $_POST['ulname'];
    $sql="UPDATE users SET lname='$name' WHERE id='$_SESSION[id]'";
    if ($conn->query($sql) === TRUE) {
        $sql = "SELECT * FROM users WHERE id='$_SESSION[id]'";
        $result = $conn->query($sql);
        if ($result->num_rows == 1) {
            // output data of each row
            $row = $result->fetch_assoc();
            $_SESSION['lname']=$row['lname'];
        }
        header("location:profile.php");
    }
    else {
        echo "Error: " . $conn->error;
    }
}
if (isset($_POST['updateuname'])) {
    $name = $_POST['uuname'];
    $sql="UPDATE users SET uname='$name' WHERE id='$_SESSION[id]'";
    if ($conn->query($sql) === TRUE) {
        $sql = "SELECT * FROM users WHERE id='$_SESSION[id]'";
        $result = $conn->query($sql);
        if ($result->num_rows == 1) {
            // output data of each row
            $row = $result->fetch_assoc();
            $_SESSION['uname']=$row['uname'];
        }
        header("location:profile.php");
    }
    else {
        echo "Error: " . $conn->error;
    }
}
if (isset($_POST['updategender'])) {
    $name = $_POST['ugender'];
    $sql="UPDATE users SET gender='$name' WHERE id='$_SESSION[id]'";
    if ($conn->query($sql) === TRUE) {
        $sql = "SELECT * FROM users WHERE id='$_SESSION[id]'";
        $result = $conn->query($sql);
        if ($result->num_rows == 1) {
            // output data of each row
            $row = $result->fetch_assoc();
            $_SESSION['gender']=$row['gender'];
        }
        header("location:profile.php");
    }
    else {
        echo "Error: " . $conn->error;
    }
}
if (isset($_POST['updatedob'])) {
    $name = $_POST['udob'];
    $sql="UPDATE users SET dob='$name' WHERE id='$_SESSION[id]'";
    if ($conn->query($sql) === TRUE) {
        $sql = "SELECT * FROM users WHERE id='$_SESSION[id]'";
        $result = $conn->query($sql);
        if ($result->num_rows == 1) {
            // output data of each row
            $row = $result->fetch_assoc();
            $_SESSION['dob']=$row['dob'];
        }
        header("location:profile.php");
    }
    else {
        echo "Error: " . $conn->error;
    }
}
if (isset($_POST['updateemail'])) {
    $name = $_POST['uemail'];
    $sql="UPDATE users SET email='$name' WHERE id='$_SESSION[id]'";
    if ($conn->query($sql) === TRUE) {
        $sql = "SELECT * FROM users WHERE id='$_SESSION[id]'";
        $result = $conn->query($sql);
        if ($result->num_rows == 1) {
            // output data of each row
            $row = $result->fetch_assoc();
            $_SESSION['email']=$row['email'];
        }
        header("location:profile.php");
    }
    else {
        echo "Error: " . $conn->error;
    }
}
if (isset($_POST['updatemob'])) {
    $name = $_POST['umob'];
    $sql="UPDATE users SET mob='$name' WHERE id='$_SESSION[id]'";
    if ($conn->query($sql) === TRUE) {
        $sql = "SELECT * FROM users WHERE id='$_SESSION[id]'";
        $result = $conn->query($sql);
        if ($result->num_rows == 1) {
            // output data of each row
            $row = $result->fetch_assoc();
            $_SESSION['mob']=$row['mob'];
        }
        header("location:profile.php");
    }
    else {
        echo "Error: " . $conn->error;
    }
}
if (isset($_POST['updatecity'])) {
    $name = $_POST['ucity'];
    $sql="UPDATE users SET city='$name' WHERE id='$_SESSION[id]'";
    if ($conn->query($sql) === TRUE) {
        $sql = "SELECT * FROM users WHERE id='$_SESSION[id]'";
        $result = $conn->query($sql);
        if ($result->num_rows == 1) {
            // output data of each row
            $row = $result->fetch_assoc();
            $_SESSION['city']=$row['city'];
        }
        header("location:profile.php");
    }
    else {
        echo "Error: " . $conn->error;
    }
}

//--------------------------------------------------------------------------------------------------------------------------
//FOR ADMIN LOGIN
//FOR LOGIN PAGE
if(isset($_POST['adminlogin'])){
    $sql = "SELECT * FROM admin WHERE email='$_POST[adminmail]'";
    $result = $conn->query($sql);
    if ($result->num_rows >= 1) {
        // output data of each row
        $row = $result->fetch_assoc();
        //print_r($row);die;
            if($row['pass'] == $_POST['pass']){
            $_SESSION['uname']=$row['uname'];
            $_SESSION['email']=$row['email'];
            $_SESSION['id']=$row['ID'];
            $_SESSION['fname']=$row['fname'];
            $_SESSION['lname']=$row['lname'];
            $_SESSION['dob']=$row['dob'];
            $_SESSION['city']=$row['city'];
            $_SESSION['gender']=$row['gender'];
            $_SESSION['mob']=$row['mob'];
            }
            else{
                echo "Error: ". $conn->error;
                header("location:adminlogin.php?Error: INCORECT USERNAME OR PASSWORD");
                //header("location:login.php");
            }
    }
    else {
        //echo "Error: ". $conn->error;
        header("location:adminlogin.php");
        //echo "Error: INCORECT USERNAME OR PASSWORD";
    }
}
//SHOW USER DATA
if(isset($_POST['showuserdata'])){
    $sql="SELECT * FROM users";
    $result = mysqli_query($conn,$sql);
    echo '<html>
    <head>
        <title>Admin Dashboard</title>
        <meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<link rel="stylesheet" href="admin.css">
    </head>
    <body>
        
        <div class="navbar">
            <div class="dropdown">
            <button class="dwnbtn"><h3>Welcome '.$_SESSION["fname"].'<i class="fa fa-caret-down"></i></h3></button>
            
            <div class="dropdown-content">
                <a href="profile.php">Profile</a>
                <a href="changepass.php">Change Password</a>
                <a href="login.php">Logout</a>
            </div>
            </div>
        </div>
        <div class="custom">
        <table id="customers">
    <tr>
    <th>Sr. No</th>
    <th>First Name</th>
    <th>Last Name</th>
    <th>Username</th>
    <th>Gender</th>
    <th>Date Of Birth</th>
    <th>E-mail</th>
    <th>Mobile No.</th>
    <th>City</th>
    </tr>';
    while($row = mysqli_fetch_array($result)) {
        echo "<tr>";
        echo "<td>" . $row['ID'] . "</td>";
        echo "<td>" . $row['fname'] . "</td>";
        echo "<td>" . $row['lname'] . "</td>";
        echo "<td>" . $row['uname'] . "</td>";
        echo "<td>" . $row['gender'] . "</td>";
        echo "<td>" . $row['dob'] . "</td>";
        echo "<td>" . $row['email'] . "</td>";
        echo "<td>" . $row['mob'] . "</td>";
        echo "<td>" . $row['city'] . "</td>";
        echo "</tr>";
    }
    echo "</table> </div>
    </body>
</html>   ";
}
$conn->close();
?>