<html>
<head>
  <meta charset="UTF-8">
  <title>Experience Backend</title>
  
  
  
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
$start = date('Y-m-d', strtotime($_POST["start"]));
$end = date('Y-m-d', strtotime($_POST["end"]));
$years = round(((strtotime($_POST["end"]) - strtotime($_POST["start"])) / 86400) / 365);
$role = $_POST["role"];
$tag = $_POST["tag"];
$email = $_SESSION['email_id'];
// $query = "SELECT * FROM APPLICANT_ WHERE email_id='$email'";
$query = "INSERT INTO EXPERIENCE_ VALUES('$email', '$org', '$role', '$start', '$end', '$years', '$tag')";

$result = mysqli_query($con, $query);

echo "<br><br><br><center><h1>Experience Updated</h1></center>";
echo "<form action=\"home.php\">
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
