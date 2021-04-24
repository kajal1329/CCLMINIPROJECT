<?php
session_start();
if(!isset($_SESSION['username'])){
	header('location:ALF.php');
}
?>
</<?php 

if(isset($_POST['search'])){
	$valueToSearch = $_POST['valueToSearch'];
	$query = "SELECT * FROM `register` WHERE ProjectType LIKE '%".$valueToSearch."%'";
	$search_result = filterTable($query);
 
}else{
	$query = "SELECT * FROM `register` ";
	$search_result = filterTable($query);


}
function filterTable($query)
{
	$con= mysqli_connect("localhost","root","","project");
	$filter_Result = mysqli_query($con,$query);
	return  $filter_Result;
}
?>

<!DOCTYPE html>
<html>
<head>
	<title></title>
	<style>
		table,tr,th,td
		{
			border: 1px solid black;
		}
	</style>

</head>
<body>
	<form action="Retrieve.php" method="post">
		<input type="text" name="valueToSearch" placeholder="Value To Search"><br><br>
		<input type="submit" name="search" value="Filter"><br><br>

		<table>
			<tr>
				<th>Name</th>
				<th>Members</th>
				<th>ProjectType</th>
				<th>ProjectName</th>
				<th>CollegeName</th>
			</tr>
			<?php while($row = mysqli_fetch_array($search_result)):?>

			<tr>
				<td><?php  echo $row['Name'];?></td>
				<td><?php  echo $row['Members'];?></td>
				<td><?php  echo $row['ProjectType'];?></td>
				<td><?php  echo $row['ProjectName'];?></td>
				<td><?php  echo $row['CollegeName'];?></td>
			</tr>
		<?php endwhile ?>
		</table>

	</form>
</body>
</html>