<?php

// $pdo = new PDO('')

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="styles/style.css">
    <link rel="stylesheet" href="styles/medicine.css">
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
                    <li>medicine records</li>
                    <li>Register</li>
                    <li>Login</li>
                </ul>
            </div>
        </nav>
    <table>
        <tr>
            <th>Medicine ID</th>
            <th>Medicine Name</th>
            <th>Quantity</th>
            <th>Price</th>
            <th>Expiry Date</th>
        </tr>
        <tr>
            <td>1</td>
            <td>Medicine A</td>
            <td>100</td>
            <td>$10.00</td>
            <td>2023-12-31</td>
        </tr>
        <tr>
            <td>2</td>
            <td>Medicine B</td>
            <td>75</td>
            <td>$15.50</td>
            <td>2024-06-30</td>
        </tr>
        <!-- Add more rows for additional medicines -->
    </table>
</body>
</html>