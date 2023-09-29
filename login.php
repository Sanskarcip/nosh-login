<?php
$serverName = "localhost";
$username = "sanskar08";
$password = "sans08";
$databaseName = "Chef-onboarding";

// Create a connection
$conn = new mysqli($serverName, $username, $password);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
$sql = "CREATE DATABASE $databaseName";

if ($conn->query($sql) === TRUE) {
    echo "Database created successfully";
} else {
    echo "Error creating database: " . $conn->error;
}
$conn->select_db($databaseName);
// PersonalDetails table
$sql = "CREATE TABLE PersonalDetails (
    ID INT AUTO_INCREMENT PRIMARY KEY,
    FirstName VARCHAR(255) NOT NULL,
    LastName VARCHAR(255) NOT NULL,
    Email VARCHAR(255) UNIQUE NOT NULL,
    PhoneNo VARCHAR(15)
)";

if ($conn->query($sql) !== TRUE) {
    echo "Error creating PersonalDetails table: " . $conn->error;
}

// Address table
$sql = "CREATE TABLE Address (
    ID INT AUTO_INCREMENT PRIMARY KEY,
    AddressLine1 VARCHAR(255) NOT NULL,
    AddressLine2 VARCHAR(255),
    ZIPCode VARCHAR(10),
    PickUpInstruction TEXT
)";

if ($conn->query($sql) !== TRUE) {
    echo "Error creating Address table: " . $conn->error;
}

// Cuisine table
$sql = "CREATE TABLE Cuisine (
    ID INT AUTO_INCREMENT PRIMARY KEY,
    Indian BOOLEAN DEFAULT 0,
    Mexican BOOLEAN DEFAULT 0,
    Italian BOOLEAN DEFAULT 0
    -- ... Add other cuisines similarly ...
)";

if ($conn->query($sql) !== TRUE) {
    echo "Error creating Cuisine table: " . $conn->error;
}

// ProfileImage table
$sql = "CREATE TABLE ProfileImage (
    ID INT AUTO_INCREMENT PRIMARY KEY,
    ImagePath TEXT
)";

if ($conn->query($sql) !== TRUE) {
    echo "Error creating ProfileImage table: " . $conn->error;
}
$conn->close();
