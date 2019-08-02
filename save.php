<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "dbriksar";

$ukirim = $_POST ['ukirim'];
$utahun = $_POST ['utahun'];
$ubulan = $_POST ['ubulan'];
$ikirim = $_POST ['ikirim'];
$itahun = $_POST ['itahun'];
$ibulan = $_POST ['ibulan'];

// Create connection
$conn = mysqli_connect($servername, $username, $password, $dbname);
// Check connection
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}

$sql = "INSERT INTO target (ukirim, utahun, ubulan, ikirim, itahun, ibulan)
VALUES ('$ukirim', '$utahun', '$ubulan', '$ikirim', '$itahun', '$ibulan')";

if (mysqli_query($conn, $sql)) {
    echo "New record created successfully";
} else {
    echo "Error: " . $sql . "<br>" . mysqli_error($conn);
}

mysqli_close($conn);

header("location:home.php");
?>
