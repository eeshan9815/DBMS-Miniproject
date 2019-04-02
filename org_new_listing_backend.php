<html>
<head>
  <meta charset="UTF-8">
  <title>Qualification Backend</title>
  
  
  
    <link rel="stylesheet" href="css/style.css">

  
</head>

<body>
  <br><br>
  <center>
    <div class="wrapper">
    <div class="container">
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
$org = $_POST["org_reg"];
// echo $org;
$start = date('Y-m-d', strtotime($_POST["start"]));
$end = date('Y-m-d', strtotime($_POST["end"]));
$role = $_POST["role"];
$tag = $_POST["tag"];
$email = $_SESSION['email_id'];
$location = $_POST["location"];
$exp_req = $_POST["expreq"];
// $query = "SELECT * FROM APPLICANT_ WHERE email_id='$email'";
$query = "INSERT INTO JOB_LISTING_ (org_reg, role, tag, location, exp_req, open_date, close_date) VALUES('$org', '$role', '$tag', '$location', '$exp_req', '$start', '$end')";

// echo $years;
$result = mysqli_query($con, $query);

echo "<br><br><br><center><h1>Listing Added</h1></center>";
echo "<form action=\"org_home.php\">
      <button type=\"submit\">Go Back</button>
        </form>";

?>
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