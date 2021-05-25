<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8"/>
    <title>Registration</title>
    <link rel="stylesheet" href="style.css"/>
</head>
<body>
<?php
    require('db.php');
    // When form submitted, insert values into the database.


    if (isset($_REQUEST['username'])) {
        // removes backslashes
        $username = stripslashes($_REQUEST['username']);
        //escapes special characters in a string
        $username = mysqli_real_escape_string($con, $username);

         
        $fullname    = stripslashes($_REQUEST['fullname']);
        $fullname    = mysqli_real_escape_string($con, $fullname);
        

        $email    = stripslashes($_REQUEST['email']);
        $email    = mysqli_real_escape_string($con, $email);

        $password = stripslashes($_REQUEST['password']);
        $password = mysqli_real_escape_string($con, $password);

        $confirm_password =  stripslashes($_REQUEST['confirm_password']);
        $confirm_password = mysqli_real_escape_string($con, $confirm_password);

        $Phone =  stripslashes($_REQUEST['Phone']);
        $Phone = mysqli_real_escape_string($con, $Phone);

        $social_security_number = stripslashes($_REQUEST['social_security_number']);
        $social_security_number = mysqli_real_escape_string($con, $social_security_number);


        $datetime_ofBirth = date("Y-m-d H:i:s");
        $query    = "INSERT into `users` (username, fullname, password, confirm_password,
          email, Phone, social_security_number, datetime_ofBirth)
                     VALUES ('$username', '" . md5($password) . "', 
                      '" . md5($confirm_password) . "','$email', '$datetime_ofBirth',
                       '$fullname', '$Phone' , '$social_security_number')";
        $result   = mysqli_query($con, $query);
        if ($result) {
            echo "<div class='form'>
                  <h3>You are registered successfully.</h3><br/>
                  <p class='link'>Click here to <a href='login.php'>Login</a></p>
                  </div>";
        } else {
            echo "<div class='form'>
                  <h3>Required fields are missing.</h3><br/>
                  <p class='link'>Click here to <a href='registration.php'>registration</a> again.</p>
                  </div>";
        }
    } else {
?>
    <form class="form" action="" method="post">
        <h1 class="login-title">Registration</h1>
        <input type="text" class="login-input" name="username" placeholder="Username" required />

        <input type="text" class="login-input" name="fullname" placeholder="Full Name">

        <input type="text" class="login-input" name="email" placeholder="Email Adress">
        <input type="password" class="login-input" name="password" placeholder="Password">
        <input type="password" class="login-input" name="password" placeholder="Confirm Password">
        <input type="text" class="login-input" name="Phone" placeholder="Phone">
        <input type="text" class="login-input" name="social_security_number" placeholder="social security number">
        <input type="text" class="login-input" name="datetime_ofBirth" placeholder="datetime_ofBirth">

        <input type="submit" name="submit" value="Register" class="login-button">
        <p class="link"><a href="login.php">Click to Login</a></p>
    </form>
<?php
    }
?>
</body>
</html>