<?php
$servername = "localhost";
$username = "chaitu";
$password = "chaitu";
$dbname = "DeviceReservationSystem";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Function to reserve a device
function reserveDevice($deviceId, $userName, $teamName) {
    global $conn;

    $sql = "UPDATE DeviceReservations 
            SET availability = 'Reserved', 
                userName = '$userName', 
                teamName = '$teamName', 
                timeReserved = NOW() 
            WHERE id = $deviceId";

    return $conn->query($sql);
}

// Function to release a device
function releaseDevice($deviceId) {
    global $conn;

    $sql = "UPDATE DeviceReservations 
            SET availability = 'Available', 
                userName = NULL, 
                teamName = NULL, 
                timeReserved = NULL 
            WHERE id = $deviceId";

    return $conn->query($sql);
}

// Close the database connection
$conn->close();
?>
