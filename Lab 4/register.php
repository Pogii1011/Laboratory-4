<!DOCTYPE html>
<html>
<head>
    <title>Registration</title>
    <link rel="stylesheet" type="text/css" href="Stylesheet.css">
</head>
<body>
    <form action="register.php" method="post"> 
        <h2>Registration</h2>
        <?php 
        include "db_conn.php"; 
        
        if ($_SERVER["REQUEST_METHOD"] == "POST") {
            $username = $_POST['username'];
            $password = $_POST['password'];
            $lastname = $_POST['lastname'];
            $firstname = $_POST['firstname'];
            $middlename = $_POST['middlename'];
            $email = $_POST['email'];

            if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
                echo '<p class="error">Invalid email format</p>';
            } else {
               
                $sql = "INSERT INTO user (username, password, Lastname, First_name, Middle_name, Email) 
                        VALUES ('$username', '$password', '$lastname', '$firstname', '$middlename', '$email')";
                if (mysqli_query($conn, $sql)) {
                    echo '<p class="success">Registration successful.<a href="Loginform.php">login</a></p>';
                } else {
                    echo '<p class="error">Registration failed.</p>';
                }
            }
        }
        ?> 
        <label>Username</label>
        <input type="text" name="username" placeholder="Username" required>
        <br>
        <label>Password</label>
        <input type="password" name="password" placeholder="Password" required>
        <br>
        <label>Last Name</label>
        <input type="text" name="lastname" placeholder="Last Name" required>
        <br>
        <label>First Name</label>
        <input type="text" name="firstname" placeholder="First Name" required>
        <br>
        <label>Middle Name</label>
        <input type="text" name="middlename" placeholder="Middle Name" required>
        <br>
        <label>Email</label>
        <input type="email" name="email" placeholder="Email" required>
        <br>
        <button type="submit">Register</button>
    </form>
</body>
</html>
