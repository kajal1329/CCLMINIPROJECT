

<?php
session_start();

$con=mysqli_connect('localhost','root');
if($con){
	echo"Successfully  Signed_up!";
}else{
	echo"Not Connected";
}
mysqli_select_db($con,'project');
$name=$_POST['user'];
$pass=$_POST['password'];

$q="select * from signin where Name='$name' && Password='$pass'";

$result=mysqli_query($con,$q);

$num=mysqli_num_rows($result);
if($num == 1){
	echo"Already Exists! Please Enter New Credentials";
}else{
	$qy="insert into signin(Name,Password)values('$name','$pass')";
	mysqli_query($con,$qy);
}

?>