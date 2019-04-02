<html>
<head>
	<meta charset="UTF-8">
	<title>Add Experience</title>
	
	
	
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
			Tag: 
			<select id="tag" name="tag">                      
			  <option value="None">--Select Tag--</option>
			  <option value="WEB, MOBILE & SOFTWARE DEV">WEB, MOBILE & SOFTWARE DEV</option>
			  <option value="IT & NETWORKING">IT & NETWORKING</option>
			  <option value="DATA SCIENCE & ANALYTICS">DATA SCIENCE & ANALYTICS</option>
			  <option value="ENGINEERING & ARCHITECTURE">ENGINEERING & ARCHITECTURE</option>
			  <option value="MEDIA">MEDIA</option>
			  <option value="LEGAL">LEGAL</option>
			  <option value="SALES & MARKETING">SALES & MARKETING</option>
			  <option value="OTHER">OTHER</option>
			  </select><br><br>
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
