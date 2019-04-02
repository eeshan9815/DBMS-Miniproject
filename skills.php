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
			Skill: 
			<select id="skill" name="skill">                      
			  <option value="None">--Select Skill--</option>
			   <option value="Desktop Software Development">Desktop Software Development</option>
				 <option value="Ecommerce Development">Ecommerce Development</option>
				 <option value="Game Development">Game Development</option>
				 <option value="Mobile Development">Mobile Development</option>
				 <option value="Product Management">Product Management</option>
				 <option value="QA & Testing">QA & Testing</option>
				 <option value="Scripts & Utilities">Scripts & Utilities</option>
				 <option value="Web Development">Web Development</option>
				 <option value="Web & Mobile Design">Web & Mobile Design</option>
				 <option value="Other - Software Development">Other - Software Development</option>
				 <option value="Database Administration">Database Administration</option>
				 <option value="ERP / CRM Software">ERP / CRM Software</option>
				 <option value="Information Security">Information Security</option>
				 <option value="Network & System Administration">Network & System Administration</option>
				 <option value="Other - IT & Networking">Other - IT & Networking</option>
				 <option value="DATA SCIENCE & ANALYTICS">DATA SCIENCE & ANALYTICS</option>
				 <option value="A/B Testing">A/B Testing</option>
				 <option value="Data Visualization">Data Visualization</option>
				 <option value="Data Extraction / ETL">Data Extraction / ETL</option>
				 <option value="Data Mining & Management">Data Mining & Management</option>
				 <option value="Machine Learning">Machine Learning</option>
				 <option value="Quantitative Analysis">Quantitative Analysis</option>
				 <option value="Other - Data Science & Analytics">Other - Data Science & Analytics</option>
				 <option value="3D Modeling & CAD">3D Modeling & CAD</option>
				 <option value="Architecture">Architecture</option>
				 <option value="Chemical Engineering">Chemical Engineering</option>
				 <option value="Civil & Structural Engineering">Civil & Structural Engineering</option>
				 <option value="Contract Manufacturing">Contract Manufacturing</option>
				 <option value="Electrical Engineering">Electrical Engineering</option>
				 <option value="Interior Design">Interior Design</option>
				 <option value="Mechanical Engineering">Mechanical Engineering</option>
				 <option value="Product Design">Product Design</option>
				 <option value="Other - Engineering & Architecture">Other - Engineering & Architecture</option>
				 <option value="Animation">Animation</option>
				 <option value="Art & Illustration">Art & Illustration</option>
				 <option value="Audio Production">Audio Production</option>
				 <option value="Brand Identity & Strategy">Brand Identity & Strategy</option>
				 <option value="Graphics & Design">Graphics & Design</option>
				 <option value="Logo Design & Branding">Logo Design & Branding</option>
				 <option value="Motion Graphics">Motion Graphics</option>
				 <option value="Other - Design & Creative">Other - Design & Creative</option>
				 <option value="Photography">Photography</option>
				 <option value="Physical Design">Physical Design</option>
				 <option value="Presentations">Presentations</option>
				 <option value="Video Production">Video Production</option>
				 <option value="Voice Talent">Voice Talent</option>
				 <option value="Academic Writing & Research">Academic Writing & Research</option>
				 <option value="Article & Blog Writing">Article & Blog Writing</option>
				 <option value="Copywriting">Copywriting</option>
				 <option value="Creative Writing">Creative Writing</option>
				 <option value="Editing & Proofreading">Editing & Proofreading</option>
				 <option value="Grant Writing">Grant Writing</option>
				 <option value="Resumes & Cover Letters">Resumes & Cover Letters</option>
				 <option value="Technical Writing">Technical Writing</option>
				 <option value="Web Content">Web Content</option>
				 <option value="Other - Writing">Other - Writing</option>
				 <option value="General Translation">General Translation</option>
				 <option value="Legal Translation">Legal Translation</option>
				 <option value="Medical Translation">Medical Translation</option>
				 <option value="Technical Translation">Technical Translation</option>
				 <option value="Contract Law">Contract Law</option>
				 <option value="Corporate Law">Corporate Law</option>
				 <option value="Criminal Law">Criminal Law</option>
				 <option value="Family Law">Family Law</option>
				 <option value="Intellectual Property Law">Intellectual Property Law</option>
				 <option value="Paralegal Services">Paralegal Services</option>
				 <option value="Other - Legal">Other - Legal</option>
				 <option value="Data Entry">Data Entry</option>
				 <option value="Personal / Virtual Assistant">Personal / Virtual Assistant</option>
				 <option value="Project Management">Project Management</option>
				 <option value="Transcription">Transcription</option>
				 <option value="Web Research">Web Research</option>
				 <option value="Other - Admin Support">Other - Admin Support</option>
				 <option value="Customer Service">Customer Service</option>
				 <option value="Technical Support">Technical Support</option>
				 <option value="Other - Customer Service">Other - Customer Service</option>
				 <option value="Display Advertising">Display Advertising</option>
				 <option value="Email & Marketing Automation">Email & Marketing Automation</option>
				 <option value="Lead Generation">Lead Generation</option>
				 <option value="Market & Customer Research">Market & Customer Research</option>
				 <option value="Marketing Strategy">Marketing Strategy</option>
				 <option value="Public Relations">Public Relations</option>
				 <option value="SEM - Search Engine Marketing">SEM - Search Engine Marketing</option>
				 <option value="SEO - Search Engine Optimization">SEO - Search Engine Optimization</option>
				 <option value="SMM - Social Media Marketing">SMM - Social Media Marketing</option>
				 <option value="Telemarketing & Telesales">Telemarketing & Telesales</option>
				 <option value="Other - Sales & Marketing">Other - Sales & Marketing</option>
				 <option value="Accounting">Accounting</option>
				 <option value="Financial Planning">Financial Planning</option>
				 <option value="Human Resources">Human Resources</option>
				 <option value="Management Consulting">Management Consulting</option>
				 <option value="Other - Accounting & Consulting">Other - Accounting & Consulting</option>

			  </select><br><br>
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
