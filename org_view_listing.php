<html>
<head>
	<meta charset="UTF-8">
	<title>My Listings</title>
	
	
	
		<link rel="stylesheet" href="css/style.css">

	
</head>
<body>
	<br><br>
	<center>
		<div class="wrapper">
		<div class="container">
		<h3>My Listings</h3><br><br>
<?php
/*
$host = "localhost";
$user = "USER_NAME";
$dbpass = "PASSWORD";
$dbname = "DB_NAME";
$con = mysqli_connect($host,$user,$dbpass,$dbname);
*/
require_once 'dbconnect.php';
session_start();
$org_reg = $_SESSION["email_id"];
$query = "SELECT * FROM JOB_LISTING_ WHERE  org_reg = '$org_reg'";
$result = mysqli_query($con, $query);
$numResults = mysqli_num_rows($result);
// echo $years;
if($numResults == 0){
	echo "<br><br><br><center><h1>No Listings Found<br>Click <a href = \"org_new_listing.php\">here</a> to add</h1></center>";
}
else{
	while ($row = mysqli_fetch_array($result, MYSQLI_ASSOC)){ 
	$query2 = "SELECT org_name,rating FROM ORGANIZATION_ WHERE  org_reg = '".$row['org_reg']."'";	//TODO: Sorting
	$query_result2 = mysqli_query($con, $query2);
	$result2 = mysqli_fetch_array($query_result2, MYSQLI_ASSOC);
	echo "Organization: ".$result2['org_name']."<br>";
	echo "Job ID: ".$row['job_id']."<br>";
	echo "Role: ".$row['role']."<br>";
	echo "Tag: ".$row['tag']."<br>";
	echo "Location: ".$row['location']."<br>";
	echo "Experience Required: ".$row['exp_req']."<br>";
	echo "Opened on: ".$row['open_date']."<br>";
	echo "Closed on: ".$row['close_date']."<br>";
	echo "<br><br>";
	} 
}
// echo $years;

?>

<form action="org_home.php">
			<button type="submit">Go Back</button>
        </form>
				</div>                                 
		
		<ul class="bg-bubbles">
			<li></li>
			<li></li>
			<li></li>
			<li></li>
			<li></li>
			<li></li>
			<li></li>
			<li></li>
			<li></li>
			<li></li>
		</ul>
	</div>
	</center>
</body>
</html>