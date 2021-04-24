<?php
session_start();
if(!isset($_SESSION['username'])){
	header('location:index.php');
}
?>
<!DOCTYPE html>
<html>
<head>
	<title></title>
	<style>
		body{
			margin: 0;
	        padding: 0;
		}
		.logo img{
			float: left;
			width: 1020px;
			height: 70px;
			margin: 15px 15px;
		}
		.Ilogo img{
			float: right;
			width: 100px;
			height: 88px;
			margin: -89px -5px 10px 10px;

		}
		.logout{
			float: left;
			list-style-type: none;
			margin: 200px;
		}
		.register{
			float: left;
			list-style-type: none;
			margin: 200px 5px -45px -45px;
		}
		
		.E{
			float: right;
			margin: -300px 125px 10px 10px;

		}
		.I{
			float: right;
			margin: -150px -105px 10px 20px;
		}
	</style>
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
</head>
<body>
	
	<div class="container">
		<h2 class="text-center text-success">Welcome <?php echo $_SESSION['username'];?></h2>
		<div class="main">
			<div class="logo">
				<img src="Uclogo.png">	
			</div>
			<div class="Ilogo">
				<img src="Ilogo.jpg">	
			</div>	
	</div><br><br>
<font face="Algerian" color="red" align="center"><h1><b>National Level Project Exhibition cum Poster Presentation</b></h1></font><br><br>

<font face="vardana" color="Green"><h3><b>About The Event</b></h3></font>
<p>
Our college hosts this National Level event annually for
the budding and aspiring engineers, researchers,
academicians and postgraduate students of our country
to help them understand the connection between science
technology and real life situations. The key purpose for
hosting this event is to provide a platform to intellectuals
for showcasing their brilliant ideas in the form of projects and poster.
Participation being from across the country. It
gives an opportunity to every participant to gauge
themselves about their standing ideas.
Our transparency in judging and awarding has been
appreciated by most of the participating institutions and
we have had a progressive rise in the Count Of
registration from 863 participants in 2015
to 1,823 participants in 2016 from across India.</p>
<table border="2" cellspacing="3" cellpadding="4" align="left">
		<caption><h4><font color="Blue"><b>Prize Money</b></font></h4></caption>
		<tr>
			<th> Level</th>
			<th> Prizes</th>
			<th> Catagory 1</th>
			<th> Catagory 2</th>
			<th> Catagory 3</th>
			<th> Catagory 4</th>
		</tr>
		<tr>
			<td>PG </td>
			<td> Winner</td>
			<td>Rs. 2,500</td>
			<td>Rs. 2,500</td>
			<td>Rs. 2,500</td>
			<td>Rs. 2,500</td>
 		</tr>
 		<tr>
			<td rowspan="2">UG </td>
			<td> Winner</td>
			<td>Rs. 2,500</td>
			<td>Rs. 2,500</td>
			<td>Rs. 2,500</td>
			<td>Rs. 2,500</td>
 		</tr>
 		<tr>
			<td> Runner up</td>
			<td>Rs. 1,500</td>
			<td>Rs. 1,500</td>
			<td>Rs. 1,500</td>
			<td>Rs. 1,500</td>
 		</tr>
 		<tr>
 			<td rowspan="2"> Diploma</td>
			<td> Winner</td>
			<td>Rs. 2,500</td>
			<td>Rs. 2,500</td>
			<td>Rs. 2,500</td>
			<td>Rs. 2,500</td>
 		</tr>
 		<tr>
		<td> Runner up</td>
			<td>Rs. 1,500</td>
			<td>Rs. 1,500</td>
			<td>Rs. 1,500</td>
			<td>Rs. 1,500</td>
 		</tr>
 		<tr>
 			<td colspan="6"> Consolation prize is worth Rs.10,000</td>
 		</tr>
	</table><br><br><br><br>
<p>
	&nbsp; Catagory 1: Electronics and all applied branches<br>
	&nbsp; Catagory 2: IT and Computer<br>
	&nbsp; Catagory 3: Civil<br>
	&nbsp; Catagory 4: Machanical and Automobile<br>
</p>
<br>
<br>
<font face="vardana" color="green"> <h3><b>Topics</b></h3></font>
<P>
	Any topic related to their respective domains(Electronics & Telecommunication, <br>
	Computer, IT, Civil, Machanical, Electrical, Electronics, Science & Humanities (FE),
	<br> Automobile, Production, Instrumentation and Biomedical).
</P>
<div class= "E">
<font face="vardana" color="green"> <h3><b>Eligibility Criteria </b></h3></font>
<p>
	<ul>
		<li>Diploma Student </li>
		<li>UG Student (FE, SE, TE, BE) </li>
		<li>PG Students (ME, M-Tech.)</li>
	</ul>		
</p>
</div>
<div class="I">
<font face="vardana" color="Red"> <h3><b>Instructions </b></h3></font>
<ol type="1.">
	<li>Maximum 4 students per team ( for PG- Only one participants).</li>
	<li>Exhibition time will be 9:00am to 4:00pm.</li>
	<li>Participants must carry the college id card.</li>
	<li>All the particiants will get National level Participation Certificate <br> and Appreciation Certificate will be awarded to the Project Guide.</li>
	<li>Simulation based projects are also welcome & idea based models <br>are accepted.</li>
	<li>Posters with details of the Project will be prepared  on card-bord <br> or chart paper (any size). </li>
	<li>Bring your own laptops and other reqquired accessories.</li>	
</ol>
</div>
<a href="logout.php" class="logout">Logout</a>
<a href="register.php" class="register">Register</a>
</body>
</html>