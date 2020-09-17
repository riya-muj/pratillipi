<?php

$email = $_POST['email'];
$password = $_POST['psw'];
$repeat_password = $_POST['psw-repeat'];
if(!empty($email)||!empty($password) || !empty($repeat_password)){
	//$host = "localhost";
//	$dbUsername = "root";
	//$dbPassword = "";
	//$dbname = "signup_info";
	// create a connection
	
	//$conn = mysqli_connect($host,$dbUsername,$dbPassword,$dbname);
		//	if(mysqli_connect_error()){
	//	die('Connect Error('.mysqli_connect_errno().')'.mysqli_connect_error());
	include "config.php";
	//else{
		//$sql = mysql_select_db('signup_info',$conn);
		$SELECT = "SELECT email From sign_up Where email = ? Limit 1";
		$INSERT = "INSERT Into sign_up (email,password,repeat_password) values(?,?,?))";
		// Prepare statement
		$stmt = $conn->prepare($SELECT);
		$stmt->bind_param("s",$email);
		$stmt->execute();
		$stmt->bind_result($email);
		$smt->store_result();
		$rnum = $stmt->num_rows;
		if($rnum==0){
			$stmt->close();
			$stmt = $conn->prepare($INSERT);
			$stmt->bind_param("sss",$email, $password, $repeat_password);
			$stmt->execute();
			echo " New Record Inserted";
		}else{
			echo "someone aldready used this email id ";
		}
	}
		else{
	echo "All feilds are required";
	die('Connect Error('.mysqli_connect_errno().')'.mysqli_connect_error());
	
}
?>