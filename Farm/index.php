<?php

$pdo = new PDO('mysql:host=localhost;port=3306;dbname=poultryfarm', 'root','');
$pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
$statement = $pdo->prepare('SELECT *FROM birds ORDER BY id DESC');
$statement->execute();
$poultryfarm = $statement->fetchAll(PDO::FETCH_ASSOC);
echo '<pre>';
var_dump ($poultryfarm);
echo '</pre>';

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="styles/style.css">
   <title>PoultryRecords</title>
</head>
<body>
    <div class="mainCont">
        <nav>
            <div class="mylogo">
                <img src="../images/cock.jpeg" alt="" width="60px" height="60px">
                <!-- Name of farm -->
                <h2>POULTRY FARM</h2>
            </div>
            <div class="mynavigation">
                <ul>
                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-house-door-fill" viewBox="0 0 16 16">
  <path d="M6.5 14.5v-3.505c0-.245.25-.495.5-.495h2c.25 0 .5.25.5.5v3.5a.5.5 0 0 0 .5.5h4a.5.5 0 0 0 .5-.5v-7a.5.5 0 0 0-.146-.354L13 5.793V2.5a.5.5 0 0 0-.5-.5h-1a.5.5 0 0 0-.5.5v1.293L8.354 1.146a.5.5 0 0 0-.708 0l-6 6A.5.5 0 0 0 1.5 7.5v7a.5.5 0 0 0 .5.5h4a.5.5 0 0 0 .5-.5Z"/>
</svg>
                <li><a href="index.php">Home</a></li>
                <li class="navigation-li"><a class="navigation-a" href="#about">About</a></li>
                    <li><a href="Register.php">Register</a></li>
                    <li><a href="Login.php">Login</a></li>
                </ul>
            </div>
        </nav>
        <div class="mainContent">
            <!-- home -->
            <div class="home">
                <div class="homeText">
                    Welcome to Poultry Farm! The largest farm in Kenya!
                </div>
            </div>
            <!-- About -->
            <div class="about">
                <h2>ABOUT US</h2>
                <p>Welcome to our poultry farm! We are a family-owned business dedicated to breeding and caring for top-quality chickens. Our passion for poultry and commitment to animal welfare drive us to provide you with healthy and happy roosters and hens. We take pride in our sustainable and responsible farming practices, ensuring that our birds are treated with respect while delivering the finest poultry products. Thank you for choosing us as your poultry provider; we look forward to exceeding your expectations with our dedication to excellence.</p>
            </div>
            <!-- History -->
            <div class="history">
                <h2>POULTRY FARM HISTORY</h2>
                <p>Our poultry farm has a rich history dating back many years. We have always been dedicated to the well-being of our birds, prioritizing their health and happiness in all aspects of our operations. Over time, we have continually improved our breeding practices and embraced sustainable methods to ensure the finest quality chickens. Our commitment to ethical and responsible farming has been unwavering, and we take great pride in treating our poultry with the utmost respect. As we look to the future, we remain dedicated to providing top-notch poultry products while minimizing our environmental impact. Thank you for being part of our journey, and we are excited to continue delivering excellence in poultry farming.</p>
            </div>
        </div>
        <footer>
            <p>&copy;2023 Copyright poultry farm </p>
            <p> Contact: 0742438268</p>
            <div class="disclaimer">
            <h3>Disclaimer</h3>
            <p3>The information contained in these records is for reference purposes only and should not be considered as professional advice</p3>
</div>
        </footer>
    </div>
</body>
</html>

<style>
    nav{
     background-color: #658e9a; 
    color: #fff;
    display: flex;
    justify-content: space-between;
    padding: 5px;
    padding-left: 30px;
    padding-right: 30px;
    align-items: center;
}
</style>