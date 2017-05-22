<!DOCTYPE html>
<html>
<head>
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
<script>
function senddetails() {
  var xhttp = new XMLHttpRequest();
  xhttp.onreadystatechange = function() {
    if (this.readyState == 4 && this.status == 200) {
      document.getElementById("demo").innerHTML =
      alert(this.responseText);
    }
  };
  xhttp.open("GET", "details.php", true);
  xhttp.send();
}
</script>
</head>
<body>
<ul>
  <li><a href="home.php">Home</a></li>
  <li><a href="map.php">Track Bus</a></li>
  <li><a class="active" href="service.php">Add Service</a></li>
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
<button onclick="senddetails();"> Add Details</button>
</form>
</div>
</body>
</html>