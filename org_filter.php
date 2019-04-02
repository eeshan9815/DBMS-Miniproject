<html>
<head>
	<meta charset="UTF-8">
	<title>Search Candidates</title>
	
	
	
		<link rel="stylesheet" href="css/style.css">

	
</head>
<body>
	<br><br>
	<center>
		<div class="wrapper">
		<div class="container">
		<h1>Search Candidates</h1>
		<form action = "org_filter_backend.php" method = "POST">
			Enter the following details (Leave empty in case of no preference)<br><br>
       		Candidate Name: <input name = "name" placeholder = "Enter Name"><br><br>
   			Role: <input name = "role" placeholder = "Enter Role"><br><br>
			Tag: <input name = "tag" placeholder = "Enter Tag of Candidates"><br><br>
			
			Skill: <input name = "skill" placeholder = "Enter Skill of Candidates"><br><br>
			Location: <input name = "location" placeholder = "Enter Location of Candidates"><br><br>
            Qualification:<br> <select id="degree" name="degree">                      
			  <option value="None">--Select Degree--</option>
			  <option value="M.Tech">M.Tech</option>
			  <option value="B.Tech">B.Tech</option>
			  <option value="PHD">PHD</option>
			  <option value="M.Sc">M.Sc</option>
			  <option value="B.Tech+M.Tech(Dual)">B.Tech+M.Tech(Dual)</option>
			</select><br><br>
			
            <button type = "submit">Submit</button>
		</form>
		<form action="org_home.php">
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
