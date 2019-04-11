<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
<title>login</title>
</head>
<?php

$hostname= "localhost";
$username="skolley";
$dbname ="skolley";
$password= "A@atanima22a";

$mysqli = new mysqli($hostname, $username, $password, $dbname);
if ($mysqli->connect_error) {
    printf("Connect failed: %s\n", $mysqli->connect_error);
    exit();
}
function test_input($data) {
	  $data = trim($data);
	  $data = stripslashes($data);
	  $data = htmlspecialchars($data);
	  return $data;
	}
 
if(isset($_POST['submit'])){
	$username = test_input($_POST['usern']);
	$password= test_input($_POST['pass']);


	  //$sql ="SELECT * FROM users WHERE username='$username' AND password='$password";
	   $sql="select * from users where username='".$username."' and password='".$password."'";

		$result = mysqli_query($mysqli, $sql);
		 //$count = mysqli_num_rows($result);
		
		if(!$result){
			echo "username or password is wrong";
			//echo "Welcome to the baby shop";
			//header("Location: index1.html");
			
		}	else {
			//echo "username or password is wrong";
			header("Location: http://lamp.scim.brad.ac.uk:50223/WebsiteCourseWork/index1.php");
			exit;
		}
		
		
	
	//echo $username;
	//echo "<br>";
	//echo $password;
}
?>
<body>
	
	
	<form action="" method="post" >
	
	
  username:<br>
  <input type="text" name="usern"><br>
  password:<br>
  <input type="password" name="pass">
  
<button type="submit" name="submit">login</button>
  
</form>

	
</body>
</html>
