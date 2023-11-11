<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="styles/investments.css">
    <title>PoultryRecords</title>
</head>
<body>
<h1>Poultry Farm Dashboard</h1>
    <table>
        <thead>
            <tr>
            <th scope="col">Date</th>
                <th>Activity Description</th>
                <th>Quantity</th>
                <th>Cost (ksh)</th>
                <th>Revenue (ksh)</th>
                <th>Profit (ksh)</th>
            </tr>
        </thead>
        <tbody>
            <!-- Dynamic data will be inserted here -->
        </tbody>
    </table>
</body>
</html>

<style>
body {
    font-family: Arial, sans-serif;
    text-align: center;
    margin: 20px;
}

h1 {
    color: #333;
}

table {
    border-collapse: collapse;
    width: 80%;
    margin: 20px auto;
}

th, td {
    border: 1px solid #333;
    padding: 8px;
}

th {
    background-color: #f2f2f2;
}

tr:nth-child(even) {
    background-color: #f2f2f2;
}
</style>