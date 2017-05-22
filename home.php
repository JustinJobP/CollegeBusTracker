<!DOCTYPE html>
<html>
<head>
<style>
body {
    margin: 0;
	background-image: url("home.jpg");
}
h1 {
	background-color:black;
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
</head>
<body>
<ul>
  <li><a class="active" href="#home">Home</a></li>
  <li><a href="map.php">Track Bus</a></li>
  <li><a href="service.php">Add Service</a></li>
  <li><a href="about.php">About</a></li>
</ul>
<div style="margin-left:25%;padding:1px 16px;height:1000px;">
	<h1 align=center><font color='white'>RVS COLLEGE BUS NAVIGATION SYSTEM </font></h1>
</div>



</body>
</html>
