<html>
<head>
<title>Add New Record in MySQL Database</title>
<style>
body {
    margin: 0;
	background-image: url("home.jpg");
}
form {
  text-align: center;
}


ul {
    list-style-type: none;
    margin: 0;
    padding: 0;
    width: 25%;
    background-color: #f1f1f1;
    position: fixed;
    height: 100%;
    overflow: auto;
}

li a {
    display: block;
    color: #000;
    padding: 8px 16px;
    text-decoration: none;
}

li a.active {
    background-color: #4CAF50;
    color: white;
}

li a:hover:not(.active) {
    background-color: #555;
    color: white;
}
</style>
<?php
if(isset($_POST['add']))
{
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
if (! get_magic_quotes_gpc())
{
	$Driver_Name = addslashes($_POST['Driver_Name']);
	$Bus_Route = addslashes($_POST['Bus_Route']);
	$Driver_Number = addslashes($_POST['Driver_Number']);
	$Starting_Point = addslashes($_POST['Starting_Point']);
}
else
{
	$Driver_Name = $_POST['Driver_Name'];
	$Bus_Route = $_POST['Bus_Route'];
	$Driver_Number = $_POST['Driver_Number'];
	$Starting_Point = $_POST['Starting_Point'];
}$sql = "INSERT INTO details ".
       "(Driver_Name,Bus_Route, Driver_Number,Starting_Point) ".
       "VALUES ".
       "('$Driver_Name','$Bus_Route','$Driver_Number','Starting_Point')";
	   $retval = mysql_query( $sql, $conn );
if(! $retval )
{
  die('Could not enter data: ' . mysql_error());
}
echo "Entered data successfully\n";
mysql_close($conn);
}
?>
<body>
<ul>
  <li><a href="home.php">Home</a></li>
  <li><a href="map.php">Track Bus</a></li>
  <li><a href="service.php">Add Service</a></li>
  <li><a class="active" href="new1.php">Details</a></li>
  <li><a href="about.php">About</a></li>
</ul>
<div style="margin-left:25%;padding:1px 16px;height:1000px;">
<form><br><br><br><br><br><br>
Driver Name :&nbsp&nbsp&nbsp&nbsp<input type="text" name="drivername">
<br><br>
Bus Route :&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp<input type="text" name="busroute">
<br><br>
Driver Number :<input type="text" name="drivernumber">
<br><br>
Starting Point :&nbsp&nbsp&nbsp<input type="text" name="startingpoint">
<br><br>
</form>
</body>
</html>