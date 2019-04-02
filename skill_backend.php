<html>
<head>
  <meta charset="UTF-8">
  <title>Skill Backend</title>
  
  
  
    <link rel="stylesheet" href="css/style.css">

  
</head>

<body>
  <br><br>
  <center>
    <div class="wrapper">
    <div class="container">
<?php
require_once 'dbconnect.php';
session_start();
$tag = $_POST['tag'];
$skill = $_POST['skill'];
$email = $_SESSION['email_id'];

$query = "INSERT INTO SKILLS_ VALUES('$email', '$tag', '$skill')";

// echo $years;
$result = mysqli_query($con, $query);

echo "<br><br><br><center><h1>Skill Added!</h1></center>";
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