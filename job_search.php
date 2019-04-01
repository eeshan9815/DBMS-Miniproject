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
		<h3>Job Search</h3>
		<form action = "job_search_backend.php" method = "POST">
			Enter the following details (Leave empty in case of no preference)<br><br>
	   		 Organization Name: <select name="org_reg">
	   		 <?php
	   		 require_once 'dbconnect.php';
	   		 $sql = mysqli_query($con, "SELECT org_reg,org_name FROM ORGANIZATION_") or die(mysql_error());
	   		 while ($row = $sql->fetch_assoc()){
	   		 echo $row['org_name'];
   			 echo "<option value=\"{$row['org_reg']}\">" . $row['org_name'] . "</option>";	   		 }
 	   		 echo "No Preference";
   			 echo "<option value=\"\"></option>";  			 
	   		 ?>
	   		 </select><br><br>
   			Role: <input name = "role" placeholder = "Enter Role"><br><br>
			Tag: <input name = "tag" placeholder = "Enter Tag of Organization"><br><br>
			Location: <input name = "location" placeholder = "Enter Location of Organization"><br><br>
			Experience (Years): <input name = "exp_years" placeholder = "Enter Experience of Organization"><br><br>
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
