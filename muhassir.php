<?php
$host = "localhost";
$user = "root";
$password = "";
$database = "food_db";

// Connect to database
$conn = new mysqli($host, $user, $password, $database);

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $n = $_POST['name'];
    $e = $_POST['email'];
    $n = $_POST['number'];
    $y = $_POST['food_name'];
    

    $sql = "INSERT INTO CustomerDetails (name, email, number, food_name) VALUES ('$n','$e','$n','$y')";
    $stmt=mysqli_query($conn,$sql);

    if ($stmt) {
        echo "Message submitted successfully!";
    } else {
        echo "Error: " . $conn->error;
    }
}

$conn->close();
?>