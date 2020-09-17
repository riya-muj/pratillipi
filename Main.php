<?php>
<$uname=_POST['name'];
<$passw=_POST['psw'];

if(!empty($username)||!empty($password)){
	$host = "localhost";
	$dbUsername = "root";
	$dbPassword = "";
	$dbname =  
	// create a connection
	$conn = mysqli($host,$dbUsername,$dbPassword,$dbname);
	if(mysqli_connect_error()){
		die('Connect Error('.mysqli_connect_errno().')'.mysqli_connect_error());
	}
	else{

		$SEELCT = "SELECT usename,password From sign_up where username='uname & password='passw'";
		
		$result=mysqli_query($conn,$SELECT);
		if(!$result)
		 {
		 echo" USER EXIST";
		 }
		 else
		 {
		 exit();
		 
		 }


?>
<html>
<head>
</head>
<body>
<h1> Story page</h1>
<ol> 
<li><a href=" Story1_page.php">First Story</li>
<li><a href="Story2_page.php">Second Story</li>
<li> <a href=" Story3_page.php">Third Story</li>
<li> <a href=" Story3_page.php">Fourth Story</li>
</ol> 
</body>
</html>