<?php
    $servername = "localhost";
    $username = "root"; 
    $password = "";
    $dbname = "webproject";

    
    $conn = new mysqli($servername, $username, $password, $dbname);

 
    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    }

    $sql = "INSERT INTO bookings (name, email, number, rooms, additionals, check_in, check_out) VALUES (?, ?, ?, ?, ?, ?, ?)";


    $stmt = $conn->prepare($sql);

    if (!$stmt) {
        die("Error in preparing the SQL statement: " . $conn->error);
    }
    $name = $_POST["Name"];
    $email = $_POST["email"];
    $number = $_POST["number"];
    $rooms = $_POST["rooms"];
    $additionals = $_POST["additionals"];
    $check_in = $_POST["check_in"];
    $check_out = $_POST["check_out"];
   

    $stmt->bind_param("sssssss", $name, $email,  $number, $rooms, $additionals,  $check_in, $check_out);

   
    if ($stmt->execute()) {
        echo "Book Successfully";
        exit; 
    } else {
        echo "Error: " . $stmt->error;
    }


    $stmt->close();
    $conn->close();
?>