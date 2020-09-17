<?php
$session_start();
$host = "localhost";
	$dbUsername = "root";
	$dbPassword = "";
	$dbname =  "visitorinfo"
	// create a connection
	$conn = mysqli_connect($host,$dbUsername,$dbPassword,$dbname);
	$sql = mysql_select_db('visitorinfo',$conn);
	if(mysqli_connect_error()){
		die('Connect Error('.mysqli_connect_errno().')'.mysqli_connect_error());
	}
	else{
		$SELECT = "SELECT userid,story_id From visitorinfo where userid=uname1 and story_id=id";
				
		$result=mysqli_query($conn,$SELECT);
		if($result)
		{
			
		$update = "UPDATE Into visitorinfo set count=count+1";
		mysqli_query($conn,$SELECT);
		
	}
	}

?>