<?php
    $errors =[];

    $user = [
        'name' => 'Khaldoun',
        'username' => 'khaldoun',
        'password' => 'password',
        'phone' => '1234',
        'email' => 'bla@bla'
    ];

    if(isset($_POST['submit']) && $_POST['submit'] == 'Register') {

        if(!isset($_POST['name']) || $_POST['name'] == ''){
            $errors[] = "Missing Name";
        }

        if(!isset($_POST['username']) || $_POST['username'] == ''){
            $errors[] = "Missing username";
        }

        if(!isset($_POST['password']) || $_POST['password'] == ''){
            $errors[] = "Missing password";
        }

        if(!isset($_POST['confirmPass']) || $_POST['confirmPass'] == ''){
            $errors[] = "Missing confirmPass";
        }

        if(!isset($_POST['email']) || $_POST['email'] == ''){
            $errors[] = "Missing email";
        }

        if(!isset($_POST['phone']) || $_POST['phone'] == ''){
            $errors[] = "Missing phone";
        }

        if(!isset($_POST['dob']) || $_POST['dob'] == ''){
            $errors[] = "Missing date of birth";
        }

        if(!isset($_POST['ssn']) || $_POST['ssn'] == ''){
            $errors[] = "Missing Social Security Number";
        }

        if($_POST['password'] != $_POST['confirmPass']) {
            $errors[] = "Passwords Do Not Match";
        }

        if($_POST['username'] == $user['username']){
            $errors[] = "Username already taken";
        }
    }

    if(isset($_POST['submit']) && $_POST['submit'] == 'Login') {
        if(!isset($_POST['username']) || $_POST['username'] == ''
        ||!isset($_POST['password']) || $_POST['password'] == ''){
            $errors[] = "Empty Fields";
        } else {
            if ($_POST['username'] != $user['username'] ||
                $_POST['password'] != $user['password']) {
                $errors[] = 'Invalid Username or Password';
            }
        }

        if(empty($errors)){
            // urlencode?
            $info = urlencode(json_encode($user));
            header('Location: safe.php?data=' . $info);
        }
    }

?>

<div style=" margin-top: 5%;">
    <div style="display: inline-block; width: 40%; margin-left: 5%;">
        <h3>Register</h3>
        <div style="background-color: indianred">
            <?php
            if(isset($_POST['submit']) && $_POST['submit'] == 'Register') {
                foreach ($errors as $error) {
                    echo $error;
                    echo '<br>';
                }
            }?>
        </div>
        <div style="background-color: lawngreen">
            <?php
                if(isset($_POST['submit']) && $_POST['submit'] == 'Register') {
                    if (empty($errors)) {
                        echo "Successfully Registered";
                    }
                }
            ?>
        </div>
        <form action="home.php" method="post">
            <label for="name">Full Name</label>
            <input name="name" id="name"><br/>

            <label for="username">Username</label>
            <input name="username" id="username"><br/>

            <label for="password">Password</label>
            <input type="password" name="password" id="password"><br/>

            <label for="confirmPass">Confirm Password</label>
            <input name="confirmPass" id="confirmPass"><br/>

            <label for="email">Email</label>
            <input name="email" id="email"><br/>

            <label for="phone">Phone</label>
            <input name="phone" id="phone"><br/>

            <label for="dob">Date Of Birth</label>
            <input name="dob" id="dob"><br/>

            <label for="ssn">Social Security Number</label>
            <input name="ssn" id="ssn"><br/>

            <input type="submit" name="submit" value="Register">
        </form>
    </div>

    <div style="display: inline-block; width: 40%;">
        <div style="background-color: indianred">
            <?php
            if(isset($_POST['submit']) && $_POST['submit'] == 'Login') {
                foreach ($errors as $error) {
                    echo $error;
                    echo '<br>';
                }
            }?>
        </div>
        <h3>Log In</h3>
        <form action="home.php" method="post">
            <label for="username">Username</label>
            <input name="username" id="username"><br/>

            <label for="password">Password</label>
            <input name="password" id="password"><br/>

            <input type="submit" name="submit" value="Login">
        </form>

    </div>

</div>