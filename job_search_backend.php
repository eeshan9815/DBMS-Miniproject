<html>
<head>
	<meta charset="UTF-8">
	<title>Job Search Results</title>
	
	
	
		<link rel="stylesheet" href="css/style.css">

	
</head>
<body>
	<br><br>
	<center>
		<div class="wrapper">
		<div class="container">
		<h3>Job Search Results</h3><br><br>
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
$org_reg = $_POST["org_reg"];
$role = $_POST["role"];
$tag = $_POST["tag"];
$location = $_POST["location"];
$exp_years = $_POST["exp_years"];
$email = $_SESSION['email_id'];
if(empty(trim($exp_years))){
	$exp_years='100';
}
// $query = "SELECT * FROM APPLICANT_ WHERE email_id='$email'";
$query = "SELECT * FROM JOB_LISTING_ WHERE  org_reg LIKE '%".$org_reg."%' AND role LIKE '%".$role."%' AND tag LIKE '%".$tag."%' AND location LIKE '%".$location."%' AND  exp_req <= ".$exp_years;	//TODO: Sorting
$result = mysqli_query($con, $query);
$numResults = mysqli_num_rows($result);
// echo $years;
if($numResults == 0){
	echo "<br><br><br><center><h1>No jobs found matching given criteria.</h1></center>";
}
else{
	echo"	<html>
	<head>
		<meta charset=\"UTF-8\">
		<title>Login Page</title>
		
		
		
			<link rel=\"stylesheet\" href=\"css/style.css\">
	
		
	</head>
	
	
	<body>
	<br><br>
	<div class=\"wrapper\">
			<div class=\"container\">";
	while ($row = mysqli_fetch_array($result, MYSQLI_ASSOC)){ 
	$query2 = "SELECT org_name,rating FROM ORGANIZATION_ WHERE  org_reg = '".$row['org_reg']."'";	//TODO: Sorting
	$query_result2 = mysqli_query($con, $query2);
	$result2 = mysqli_fetch_array($query_result2, MYSQLI_ASSOC);
	echo "

			<form action=\"apply.php\" method = POST>
			<input type= \"hidden\" name = \"job_id\" value=\"".$row['job_id']."\">
			<input type= \"hidden\" name = \"role\" value=\"".$row['role']."\">
			<input type= \"hidden\" name = \"org_name\" value=\"".$row['org_name']."\">
			<button type = \"submit\">
	
	
	
		Organization: ".$result2['org_name']."<br>
		Rating: ".$result2['rating']."<br>
		Job ID: ".$row['job_id']."<br>
		Role: ".$row['role']."<br>
		Tag: ".$row['tag']."<br>
		Location:".$row['location']."<br>
		Experience Required:".$row['exp_req']."<br>
		Opened on:".$row['open_date']."<br>
		Closed on:".$row['close_date']."<br>
		Click here to Apply	
		
		</button>
			</form>


";
	} 
	echo"			</div>
			
	<ul class=\"bg-bubbles\">
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
</html>";
}
// echo $years;

?>

<form action="home.php">
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