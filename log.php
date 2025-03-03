<!DOCTYPE html>
<?php
 $user = $_POST['user'];
 $pass = $_POST['pass'];

 if($user == "xasan" && $pass ="123")
 {
 	header("location:a.php");
 }else{
 	echo "wrong try agin";
 }

?>
<html>
<head>
	<meta charset="utf-8">
	<title>Log In</title>
</head>
<body>

</body>
</html>