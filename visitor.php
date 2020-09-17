//Script for total visitor count
<?php
session_start();
if(isset($_SESSION['visitcount']))
{
	$_SESSION['visitcount']++;
}
else
{
	$_SESSION['visitcount']=1;
}
echo "<p>Hit Count is=</p>"$_SESSION['visitcount'];

?>