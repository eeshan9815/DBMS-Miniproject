<html>
<head>
  <meta charset="UTF-8">
  <title>Review Backend</title>
  
  
  
    <link rel="stylesheet" href="css/style.css">

  
</head>
<body>
  <br><br>
  <center>
    <div class="wrapper">
    <div class="container">
        <h3></h3><br><br>
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
$org_reg=$_POST['org_reg'];
$comment=$_POST['comment'];
$rating=(int)$_POST['rating'];

// $query = "SELECT * FROM APPLICANT_ WHERE email_id='$email'";
$query = "INSERT INTO REVIEW_ VALUES('$org_reg', '$rating','$comment')";

mysqli_query($con, $query) ;

$query1 = "SELECT AVG(rating) as avg FROM REVIEW_ WHERE org_reg = '$org_reg' GROUP BY org_reg";

$result = mysqli_query($con, $query1) ;

$row = mysqli_fetch_assoc($result);

// echo $row['avg'];
$update = "UPDATE ORGANIZATION_ SET rating = $row['avg'] WHERE org_reg = '$org_reg'";

mysqli_query($con, $update) ;

echo "<br><br><br><center><h1>Review Submitted!</h1></center>";

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