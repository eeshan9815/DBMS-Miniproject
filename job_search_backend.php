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
	while ($row = mysqli_fetch_array($result, MYSQLI_ASSOC)){ 
	$query2 = "SELECT org_name,rating FROM ORGANIZATION_ WHERE  org_reg = '".$row['org_reg']."'";	//TODO: Sorting
	$query_result2 = mysqli_query($con, $query2);
	$result2 = mysqli_fetch_array($query_result2, MYSQLI_ASSOC);
	echo "Organization: ".$result2['org_name']."<br>";
	echo "Rating: ".$result2['rating']."<br>";
	echo "Job ID: ".$row['job_id']."<br>";
	echo "Role: ".$row['role']."<br>";
	echo "Tag: ".$row['tag']."<br>";
	echo "Location:".$row['location']."<br>";
	echo "Experience Required:".$row['exp_req']."<br>";
	echo "Opened on:".$row['open_date']."<br>";
	echo "Closed on:".$row['close_date']."<br>";
	echo "<br><br>";
	} 
}
// echo $years;

?>