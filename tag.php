<html>
<body>
<?php
require_once 'dbconnect.php';
session_start();
$email = $_SESSION['email_id'];
$query = "SELECT * FROM TAGS_ WHERE email_id='$email'";
$result = mysqli_query($con, $query);
// $row = mysqli_fetch_assoc($result);
$numResults = mysqli_num_rows($result);
$_SESSION['num_tags'] = $numResults;
?>
<!-- echo $row['date_of_birth'];
echo "<html><body><br><br><center><h3>Edit Profile</h3><form action = \"mobile.php\" method = \"POST\">Name: <input name = \"name\" value = \"{$row['username']}\"><br><br>Date Of Birth: <input name = \"date_of_birth\" value = \"{$row['date_of_birth']}\" type = \"date\"><br><br>Current Role: <input name = \"curr_role\" value = \"{$row['role']}\"><br><br><button type = \"Update\">Submit</button></form></center></body></html>";
?>
 -->
	<br><br>
	<center>
		<h3>Tags</h3>
		<form action = "tag_backend.php" method = "POST">
			<?php
				$counter = 1;
				while ($row = mysqli_fetch_array($result, MYSQLI_ASSOC)) {
					// echo "\"{$row['mobile_no']}\"";
					echo "Tag {$counter}: <input name = \"Tag_{$counter}\" value = \"{$row['tag']}\"><br><br>";
					$counter++;
				}

			?>
			Add New: <input name = "new" placeholder = "Tag"><br><br>
			<button type = "submit">Submit</button>
		</form>
	</center>
</body>
</html>
