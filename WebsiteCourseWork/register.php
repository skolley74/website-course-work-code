<html>
<?php

require('Procedural_connect(2).php');
function test_input($data) {
			$data = trim($data);
			$data = stripslashes($data);
			$data = htmlspecialchars($data);
				return $data;
		}
		
if(isset($_POST['submit'])) {

$username = test_input($_POST["username"]);

$password = test_input($_POST["pass"]);
$verifyPassword = test_input ($_POST["vpass"]);

if(($_POST["pass"]) === ($_POST["vpass"])) {

$sql = "INSERT INTO Register(Username, Password, VerifyPassword)VALUES ('$username','$password', '$verifyPassword')";


	if ($db->query($sql) == FALSE) {
		echo "error: " . $sql . "<br>" . $db->error;
	}
}
	else {
		$db->close();
		
	}
}



?>
<body>
	
	
	<form action="login.inc.php" method="post" >
	
	
  username:<br>
  <input type="text" name="usern"><br>
  password:<br>
  <input type="password" name="pass">
  
<button type="submit" name="submit">login</button>
  
</form>

	
</body>

</html>