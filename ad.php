<?php
session_start();

$con=mysqli_connect('localhost','root');
if($con){
	echo"Connection Successful!";
}else{
	echo"Not Connected";
}
mysqli_select_db($con,'project');
$name=$_POST['user'];
$pass=$_POST['password'];

$q="select * from admin where UserName='$name' && Password='$pass'";

$result=mysqli_query($con,$q);

$num=mysqli_num_rows($result);
if($num == 1){
	$_SESSION['username']=$name;
	header('location:Retrieve.php');
}else{
	header('location:ALF.php');
}

?>