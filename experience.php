<html>
<head>
	<meta charset="UTF-8">
	<title>Add Qualification</title>
	
	
	
		<link rel="stylesheet" href="css/style.css">

	
</head>
<body>

	<br><br>
	<center>
		<div class="wrapper">
		<div class="container">
		<h1>Experience</h1>
		<form action = "exp_backend.php" method = "POST">
			<!-- Organization: <input name = "org_reg" placeholder = "TODO: DROP-DOWN"><br><br> -->
			Organization: <select name="org_reg">
			<?php 
			require_once 'dbconnect.php';
			$sql = mysqli_query($con, "SELECT org_reg FROM ORGANIZATION_") or die(mysql_error());
			while ($row = $sql->fetch_assoc()){
			echo $row['org_reg'];
			echo "<option value=\"{$row['org_reg']}\">" . $row['org_reg'] . "</option>";
			// \"{$row['mobile_no']}\"
			}
			?>
			</select><br>
			Role: <input name = "role" placeholder = "role"><br><br>
			Start Date: <input name = "start" type = "date"><br><br>			
			End Date: <input name = "end" type = "date"><br><br>			
			Tag: <input name = "tag" placeholder = "tag"><br><br>
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
