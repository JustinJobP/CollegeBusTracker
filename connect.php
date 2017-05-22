<?php

$username = $_POST['u'];
$password = $_POST['p'];

if($username=='justin'&& $password=='password'){
	header('Location:home.php');
	
}
else{
	echo "username or password is incorrect";	
}

?>
