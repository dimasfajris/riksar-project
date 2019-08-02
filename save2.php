<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "dbriksar";

$berita = $_POST ['berita'];

// Create connection
$conn = mysqli_connect($servername, $username, $password, $dbname);
// Check connection
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}

$sql = "INSERT INTO berita (berita)
VALUES ('$berita')";

if (mysqli_query($conn, $sql)) {
    echo "New record created successfully";
} else {
    echo "Error: " . $sql . "<br>" . mysqli_error($conn);
}

mysqli_close($conn);

header("location:home.php");
?>
