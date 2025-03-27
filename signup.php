<!DOCTYPE html>
<html lang="en">
<head>
    <link rel="stylesheet" href="signup.css">
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>signup to Glamour Haven</title>
</head>  

<body>
    <a href="loginform.php"></a>
    <h1>WELCOME TO SERENITY BEAUTY SPA SYSTEM</h1>
        <form action="/action_page.php"method="post">
   
    <label for="email address">ENTER EMAIL ADDRESS:</label><br>
    <input type="text"id="email"required> <br>
    <label for="password">ENTER PASSWORD:<label><br>
    <input type="password"id="password" required> <br>
    <label for="confirm password">CONFIRM PASSWORD:</label><br>
    <input type="phonenumber"id="phonenumber"required>
    <label for="phonenumber">Phone no:</label>
    <input type="password"id=" confirm password"required> <br>
    <label for="checkbox">Remember me</label>
    <input type="checkbox"id="Remember"> <br>
    <button style="color: black;">SIGNUP</button>
    <a href="loginform.php">login</a>

</form>


</body>
<?php
// Database connection details
$host = 'localhost';
$dbname = 'regestration_db';
$email = 'emailaddress';
$password = 'password';
$confirmpassword='password';
$phonenumber='phonenumber'


try {
    // Connect to MySQL database
    $pdo = new PDO("mysql:host=$host;regestration=$regestration", $email, $password,$confirmpassword,$phonenumber);
    
   
    }
 catch (PDOException $e) {
    // Display error message if connection fails
    echo 'Database connection failed: ' . $e->getMessage();
}
?>

</html>
