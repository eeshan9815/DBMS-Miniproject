<?php
$org_name=$_POST['org_name'];
$org_reg=$_POST['org_reg'];
?>
<html>
<head>
	<meta charset="UTF-8">
	<title>Review</title>
	
	
	
		<link rel="stylesheet" href="css/style.css">

	
</head>
<body>
	<div class="wrapper">
		<div class="container">
			<h1>Review</h1>
			<?php echo "Leave a review for the organization $org_name <br><br>Your Review:<br>
			<form class=\"form\" action = \"review_backend.php\" method = \"POST\">
			<input type= \"hidden\" name = \"org_reg\" value=\"".$org_reg."\">
			<input type= \"hidden\" name = \"org_name\" value=\"".$org_name."\">
			
			
			<textarea  name = \"comment\" rows=\"20\" cols=\"60\" placeholder = \"Review\"></textarea><br><br>
			Rating: 
			<select id=\"rating\" name=\"rating\">
			  <option value=\"0\">0</option>
			  <option value=\"1\">1</option>
			  <option value=\"2\">2</option>
			  <option value=\"3\">3</option>
			  <option value=\"4\">4</option>
			  <option value=\"5\">5</option>
			  </select><br><br>

			<button type = \"submit\">Submit</button>
			</form>"
			?>
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

