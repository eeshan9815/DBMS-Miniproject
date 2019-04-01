<?php
$job_id=$_POST['job_id'];
$role=$_POST['role'];
$org_name=$_POST['org_name'];
?>
<html>
<head>
	<meta charset="UTF-8">
	<title>Apply</title>
	
	
	
		<link rel="stylesheet" href="css/style.css">

	
</head>
<body>
	<div class="wrapper">
		<div class="container">
			<h1>Apply</h1>
			<?php echo "Applying for the role of $role in the organization $org_name <br><br>Cover Letter:<br>
			<form class=\"form\" action = \"apply_backend.php\" method = \"POST\">
			<input type= \"hidden\" name = \"job_id\" value=\"".$job_id."\">
			<textarea  name = \"proposal\" rows=\"20\" cols=\"60\" placeholder = \"Cover Letter\"></textarea><br><br>
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

