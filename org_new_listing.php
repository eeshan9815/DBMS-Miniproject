<html>
<head>
	<meta charset="UTF-8">
	<title>New Listing</title>
	
	
	
		<link rel="stylesheet" href="css/style.css">

	
</head>
<body>
	<div class="wrapper">
		<div class="container">
			<h1>New Listing</h1>
			<form class="form" action = "org_new_listing_backend.php" method = "POST">
            </select><br>
            Role: <input name = "role" placeholder = "role" required><br><br>
			Tag: <br> <select id="tag" name="tag">                      
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
