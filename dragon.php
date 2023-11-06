<!DOCTYPE html>
<html>
<head>
    <title>PHP & MySQL CRUD Example</title>
    <link rel="stylesheet" href="dragon.css">
</head>
<body>
<h1>CRUD Example</h1>

<?php

$con = new mysqli("localhost", "root", "", "webproject");

// Check connection
if ($con->connect_error) {
    die("Connection failed: " . $con->connect_error);
}

// Display records
$sql = "SELECT * FROM users";
$result = $con->query($sql);

if ($result->num_rows > 0) {
    echo "<table border='1'>";
    echo "<tr><th>ID</th><th>Username</th><th>Password</th><th>Email</th><th>Action</th></tr>";

    while ($row = $result->fetch_assoc()) {
        echo "<tr>";
        echo "<td>" . $row["id"] . "</td>";
        echo "<td>" . $row["username"] . "</td>";
        echo "<td>" . $row["password"] . "</td>";
        echo "<td>" . $row["email"] . "</td>";
        echo "<td><a href='edit.php?id=" . $row["id"] . "'>Edit</a> | <a href='delete.php?id=" .
            $row["id"] . "'>Delete</a></td>";
        echo "</tr>";
    }

    echo "</table>";
} else {
    echo "No records found.";
}

$con->close();
?>

<br>
<a href="add.php">Add Record</a>
</body>
</html>
