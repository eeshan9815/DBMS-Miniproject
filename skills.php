<html>
<head>
	<meta charset="UTF-8">
	<title>Add Skills</title>
	
	
	
		<link rel="stylesheet" href="css/style.css">

	
</head>
<body>
	<div class="wrapper">
		<div class="container">
	<br><br>
	<center>
		<h3>Skills</h3>
		<form action = "skill_backend.php" method = "POST">
			Tag: 
			<select id="tags" name="tags">                      
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
			Skill: <input name = "skill" placeholder = "skill"><br><br>
			<button type = "submit">Add Skill</button>
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
