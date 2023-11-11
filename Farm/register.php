<!DOCTYPE html>
<html>
<head>
    <title>User Registration</title>
    <link rel="stylesheet" href="styles/Register.css">
</head>
<div class="mynavigation">
                <ul>
                <li><a href="index.php">Home</a></li>
                    <li><a href="Register.php">Register</a></li>
                    <li><a href="Login.php">Login</a></li>
                </ul>
            </div>
<body>
    <div class="container">
        <form action="register_process.php" method="post">
            <h2>Register</h2>
            <div class="input-group">
                <label>Username</label>
                <input type="text" name="username">
            </div>
            <div class="input-group">
                <label>Email</label>
                <input type="email" name="email">
            </div>
            <div class="input-group">
                <label>Password</label>
                <input type="password" name="password">
            </div>
            <div class="input-group">
                <button type="submit" class="btn" name="register">Register</button>
            </div>
            <p>Already a member? <a href="login.php">Sign in</a></p>
        </form>
    </div>
</body>
</html>
