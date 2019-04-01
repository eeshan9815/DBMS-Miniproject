<!-- <html>
<body>
	<br><br>
	<center>
		<h3>Edit Profile</h3>
		<form action = "profile-backend.php" method = "POST">
			Name: <input name = "name" placeholder = "Name"><br><br>
			Date Of Birth: <input name = "date_of_birth" type = "date"><br><br>
			Current Role: <input name = "curr_role" placeholder = "Enter Current Role"><br><br>
			<button type = "Update">Submit</button>
		</form>
	</center>
</body>
</html>
 -->

 <?php
require_once 'dbconnect.php';
session_start();
$email = $_SESSION['email_id'];
$query = "SELECT * FROM APPLICANT_ WHERE email_id='$email'";
$result = mysqli_query($con, $query);
$row = mysqli_fetch_assoc($result);
// echo $row['date_of_birth'];
echo "<html><body><br><br><center><h3>Edit Profile</h3><form action = \"profile-backend.php\" method = \"POST\">Name: <input name = \"name\" value = \"{$row['username']}\"><br><br>Date Of Birth: <input name = \"date_of_birth\" value = \"{$row['date_of_birth']}\" type = \"date\"><br><br>Current Role: <input name = \"curr_role\" value = \"{$row['role']}\"><br><br><button type = \"Update\">Submit</button></form></center></body></html>";
?>
