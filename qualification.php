<html>
<head>
	<meta charset="UTF-8">
	<title>Add Qualification</title>
	
	
	
		<link rel="stylesheet" href="css/style.css">

	
</head>
<body>
	<div class="wrapper">
	<div class="container">
	<br><br>
	<center>
		<h3>Qualification</h3>
		<form action = "qual_backend.php" method = "POST">
			Select Degree:
			<select id="degree" name="degree">                      
			  <option value="None">--Select Degree--</option>
			  <option value="M.Tech">M.Tech</option>
			  <option value="B.Tech">B.Tech</option>
			  <option value="PHD">PHD</option>
			  <option value="M.Sc">M.Sc</option>
			  <option value="B.Tech+M.Tech(Dual)">B.Tech+M.Tech(Dual)</option>
			</select><br><br>
			Field: <input name = "field" placeholder = "Field" required><br><br>	
			Institute: <input name = "institute" placeholder = "Institute" required><br><br>	
			Grade: <input name = "grade" placeholder = "grade" required><br><br>
			Year of Graduation: <input name = "year" placeholder = "year" required><br><br>			
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