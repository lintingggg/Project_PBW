<?php
include("koneksi.php");

// Mengecek koneksi
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Menangkap data dari form
$username = $_POST['username'];
$password = password_hash($_POST['password'], PASSWORD_DEFAULT);

// Menyimpan data ke database
$sql = "INSERT INTO users (username, password) VALUES ('$username', '$password')";

if ($conn->query($sql) === TRUE) {
    echo "New record created successfully";
    header("Location: login.html");
    exit();
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();
?>
