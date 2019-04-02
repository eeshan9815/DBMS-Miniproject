<html>
<head>
	<meta charset="UTF-8">
	<title>New Listing</title>
	
	
	
		<link rel="stylesheet" href="css/style.css">

	
</head>
<body>
	<div class="wrapper">
		<div class="container">
			<h1>Login</h1>
			<form class="form" action = "org_new_listing_backend.php" method = "POST">
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
            Role: <input name = "role" placeholder = "role" required><br><br>
			Tag: <input name = "tag" placeholder = "tag" required><br><br>
            Location: <input name = "location" placeholder = "location" required><br><br>          
            Experience Required: <input name = "expreq" placeholder = "number of years"><br><br>
            Open Date: <input name = "start" type = "date"><br><br>			
			Close Date: <input name = "end" type = "date"><br><br>			

            <!-- <input name = "email" placeholder = "Email/Registration ID"><br><br> -->
			<button type = "submit">Submit</button>
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
</body>
</html>
