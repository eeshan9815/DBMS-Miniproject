<html>
<head>
	<meta charset="UTF-8">
	<title>Search Jobs</title>
	
	
	
		<link rel="stylesheet" href="css/style.css">

	
</head>
<body>
	<br><br>
	<center>
		<div class="wrapper">
		<div class="container">
		<h3>Job Search</h3>
		<form action = "view_org.php" method = "POST">
	   		 Organization Name: <select name="org_reg">
	   		 <?php
	   		 require_once 'dbconnect.php';
	   		 $sql = mysqli_query($con, "SELECT org_reg,org_name FROM ORGANIZATION_") or die(mysql_error());
	   		 while ($row = $sql->fetch_assoc()){
	   		 echo $row['org_name'];
   			 echo "<option value=\"{$row['org_reg']}\">" . $row['org_name'] . "</option>";	   		 }
	   		 ?>
	   		 </select><br><br>   			
			<button type = "submit">View Organization</button>
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
