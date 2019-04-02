<html>
<head>
  <meta charset="UTF-8">
  <title>Signup Backend</title>
  
  
  
    <link rel="stylesheet" href="css/style.css">

  
</head>

<body>
  <br><br>
  <center>
    <div class="wrapper">
    <div class="container">
<?php


/*$host = "localhost";
$user = "USER_NAME";
$dbpass = "PASSWORD";
$dbname = "DB_NAME";
$con = mysqli_connect($host,$user,$dbpass,$dbname);
*/
require_once 'dbconnect.php';

$name = $_POST["name"];
$email = $_POST["email"];
$password = $_POST["password"];

$password = md5($password);
if($_POST['radio'] == "Applicant")
{
    $query = "SELECT * FROM APPLICANT_ WHERE email_id='$email'";
    $result = mysqli_query($con, $query);
    $numResults = mysqli_num_rows($result);

    if($numResults == 1)
    {
   	 echo "<br><br><br><center><h1>Already registered!</h1></center>";
   	 echo "<form action=\"index.php\">
      <button type=\"submit\">Go Back</button>
        </form>";

   	 // sleep(4);
    }
    else
    {
   	 $query = "INSERT INTO APPLICANT_ (email_id, password, username) VALUES ('$email', '$password', '$name')";
   	 mysqli_query($con, $query);
   	 echo "<br><br><br><center><h1>Sign-up Complete!</h1></center>";
   	 echo "<form action=\"index.php\">
      <button type=\"submit\">Go Back</button>
        </form>";
   	 
    }
}
else
{
    $query = "SELECT * FROM ORGANIZATION_ WHERE org_reg='$email'";
    $result = mysqli_query($con, $query);
    $numResults = mysqli_num_rows($result);

    if($numResults == 1)
    {
   	 echo "<br><br><br><center><h1>Already registered!</h1></center>";
   	 echo "<form action=\"index.php\">
      <button type=\"submit\">Go Back</button>
        </form>";

   	 // sleep(4);
    }
    else
    {
   	 $query = "INSERT INTO ORGANIZATION_ (org_reg, password, org_name) VALUES ('$email', '$password', '$name')";
   	 mysqli_query($con, $query);
   	 echo "<br><br><br><center><h1>Sign-up Complete!</h1></center>";
   	 echo "<form action=\"index.php\">
      <button type=\"submit\">Go Back</button>
        </form>";
   	 
    }
}
    
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

