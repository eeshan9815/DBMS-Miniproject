<html>
<body>
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
			Field: <input name = "field" placeholder = "Field"><br><br>	
			Institute: <input name = "institute" placeholder = "Institute"><br><br>	
			Grade: <input name = "grade" placeholder = "grade"><br><br>
			Year of Graduation: <input name = "year"><br><br>			
			<button type = "submit">Submit</button>
		</form>
	</center>
</body>
</html>