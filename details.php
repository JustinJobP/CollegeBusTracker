<?php
echo "hello";
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "driversdb";

// Create connection
$conn = mysqli_connect($servername, $username, $password, $dbname);
// Check connection
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}

$sql = "select DriverName,BusRoute,DriverNumber,StartingPoint from details";
$result = mysqli_query($conn, $sql);

if (mysqli_num_rows($result) > 0) {
    // output data of each row
    while($row = mysqli_fetch_assoc($result)) {
       // echo "Driver Name: " . $row['DriverName'] . "Bus Route : " .$row['BusRoute'] . "Driver Number : " .$row['DriverNumber'] . "Starting Point : ".$row['StartingPoint'] ."<br>";
    }
} else {
    echo "0 results";
}

mysqli_close($conn);
?>