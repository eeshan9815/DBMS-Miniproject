<html>
<head>
	<meta charset="UTF-8">
	<title>Add Mobile Number</title>
	
	
	
		<link rel="stylesheet" href="css/style.css">

	
</head>
<body>
<?php
require_once 'dbconnect.php';
session_start();
$email = $_SESSION['email_id'];
$query = "SELECT * FROM MOBILE_NO_ WHERE email_id='$email'";
$result = mysqli_query($con, $query);
// $row = mysqli_fetch_assoc($result);
$numResults = mysqli_num_rows($result);
$_SESSION['num_mobile'] = $numResults;
?>
<!-- echo $row['date_of_birth'];
echo "<html><body><br><br><center><h3>Edit Profile</h3><form action = \"mobile.php\" method = \"POST\">Name: <input name = \"name\" value = \"{$row['username']}\"><br><br>Date Of Birth: <input name = \"date_of_birth\" value = \"{$row['date_of_birth']}\" type = \"date\"><br><br>Current Role: <input name = \"curr_role\" value = \"{$row['role']}\"><br><br><button type = \"Update\">Submit</button></form></center></body></html>";
?>
 --><div class="wrapper">
	<div class="container">
	<br><br>
	<center>
		<h3>Mobile Numbers</h3>
		<form action = "mobile_backend.php" method = "POST">
			<?php
				$counter = 1;
				while ($row = mysqli_fetch_array($result, MYSQLI_ASSOC)) {
					// echo "\"{$row['mobile_no']}\"";
					echo "Mobile {$counter}: <input name = \"Mobile_{$counter}\" value = \"{$row['mobile_no']}\"><br><br>";
					$counter++;
				}

			?>
			Add New: <input name = "new" placeholder = "Mobile Number"><br><br>
			<button type = "submit">Submit</button>
		</form>
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
