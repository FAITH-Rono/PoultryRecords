<?php

$pdo = new PDO('mysql:host=localhost;port=3306;dbname=poultryfarm', 'root','');
$pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
$statement = $pdo->prepare('SELECT *FROM birds ORDER BY id DESC');
$statement->execute();
$poultryfarm = $statement->fetchAll(PDO::FETCH_ASSOC);
echo '<pre>';
var_dump ($poultryfarm);
echo '</pre>';

// Replace these values with your actual database credentials
$servername = "localhost";
$username = "your_username";
$password = "your_password";
$dbname = "your_database";

try {
    // Create a PDO instance
    $pdo = new PDO("mysql:host=$servername;dbname=$poultryfarm", $username, $password);

    // Set the PDO error mode to exception
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

    // Replace these values with the actual data you want to insert
    $usernameValue = "example_username";
    $emailValue = "example@email.com";
    $passwordValue = password_hash("example_password", PASSWORD_DEFAULT);

    // Prepare the SQL statement
    $statement = $pdo->prepare("INSERT INTO login (username, email, password) VALUES (:username, :email, :password)");

    // Execute the statement
    $statement->execute();

    echo "Data inserted successfully";

} catch (PDOException $e) {
    echo "Error: " . $e->getMessage();
}

?>

<!DOCTYPE html>
<html>
<head>
    <title>User Login</title>
    <link rel="stylesheet" href="styles/Register.css">
</head>
<style>
    
    </style>
<div class="mynavigation">
                <ul>
                <li><a href="index.php">Home</a></li>
                    <li><a href="Register.php">Register</a></li>
                    <li><a href="Login.php">Login</a></li>
                </ul>
            </div>
<body>
    <div class="container">
        <form action="login_process.php" method="post">
            <h2>Login</h2>
            <div class="input-group">
                <label>Email</label>
                <input type="text" name="username">
            </div>
            <div class="input-group">
                <label>Password</label>
                <input type="password" name="password">
            </div>
            <div class="input-group">
                <button type="submit" class="btn" name="login">Login</button>
            </div>
            <p>Not a member? <a href="register.php">Register here</a></p>
        </form>
    </div>
</body>
</html>
