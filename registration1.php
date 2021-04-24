<?php
$Name= $_POST['name'];
$Members= $_POST['member'];
$ProjectType= $_POST['project'];
$ProjectName= $_POST['pn'];
$CollegeName= $_POST['cn'];


if(!empty($Name) || !empty($Members) || !empty($ProjectType) || !empty($ProjectName) || !empty($CollegeName)){
	$host= "localhost";
	$username="root";
	$password="";
	$dbname="project";

	$con= new mysqli($host, $username, $password, $dbname);
	if(mysqli_connect_error()){
		die('Connect Error('.mysqli_connect_error().')'.mysqli_connect_error());
	}else{
		$SELECT="SELECT ProjectName from register Where ProjectName=? Limit 1";
		$INSERT="INSERT INTO register(Name, Members, ProjectType, ProjectName, CollegeName) values(?, ?, ?,?,?)";
		$stmt = $con->prepare($SELECT);
		$stmt->bind_param("s", $ProjectName);
		$stmt-> execute();
		$stmt->bind_result($ProjectName);
		$stmt->store_result();
		$rnum = $stmt->num_rows;

		if($rnum==0){
			$stmt->close();

			$stmt = $con->prepare($INSERT);
			$stmt->bind_param("sssss",$Name,$Members,$ProjectType,$ProjectName,$CollegeName);
			$stmt->execute();
			echo "Regisration Successful";
		}else{
			echo "This Project is already registerd";
		}
		$stmt->close();
		$con->close();
	}
}else{
	echo"All fields are required";
	die();
}

?>


