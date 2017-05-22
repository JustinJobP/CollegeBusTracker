<!DOCTYPE html>
<html>
<head>
<style>
body {
    margin: 0;
}
 #map {
        height: 600px;
        width: 100%;
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
  <li><a href="home.php">Home</a></li>
  <li><a class="active" href="map.php">Track Bus</a></li>
  <li><a href="service.php">Add Service</a></li>
  <li><a href="about.php">About</a></li>
</ul>
<div id="map"></div>
    <script>
      function initMap() {
        var uluru = {lat: -25.363, lng: 131.044};
        var map = new google.maps.Map(document.getElementById('map'), {
          zoom: 4,
          center: uluru
        });
        var marker = new google.maps.Marker({
          position: uluru,
          map: map
        });
      }
    </script>
    <script async defer
    src="https://maps.googleapis.com/maps/api/js?key=AIzaSyAWvPpTBSnORlHO7S0Mg5CShL4oirtbni8&callback=initMap">
    </script>
</body>
</html>