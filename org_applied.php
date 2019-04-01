<html>
<head>
	<meta charset="UTF-8">
	<title>Applicants</title>
	
	
	
		<link rel="stylesheet" href="css/style.css">

	
</head>
<body>
	<div class="wrapper">
		<div class="container">
        <h1>Applicants</h1>
        <?php
        /*
        $host = "localhost";
        $user = "USER_NAME";
        $dbpass = "PASSWORD";
        $dbname = "DB_NAME";
        $con = mysqli_connect($host,$user,$dbpass,$dbname);
        */
        require_once 'dbconnect.php';
        session_start();
        $org_reg = $_SESSION["email_id"];
        $query = "SELECT * FROM APPLY_, JOB_LISTING_ WHERE APPLY_.job_id = JOB_LISTING_.job_id AND JOB_LISTING_.org_reg = '$org_reg'";
        $result = mysqli_query($con, $query);
        $numResults = mysqli_num_rows($result);
        // echo $years;
        if($numResults == 0){
            echo "<br><br><br><center><h1>No Applicants Found<br></h1>Click <a href = \"org_new_listing.php\">here</a> to add new job listing to attract candidates.</center>";
        }
        else{
            while ($row = mysqli_fetch_array($result, MYSQLI_ASSOC)){ 
            $email_applicant = $row['email_id'];
            $query2 = "SELECT * FROM APPLICANT_ WHERE email_id = '".$row['email_id']."'";	//TODO: Sorting
            $query_result2 = mysqli_query($con, $query2);
            $result2 = mysqli_fetch_array($query_result2, MYSQLI_ASSOC);
            echo "Job ID: ".$row['job_id']."<br>";
            echo "Role: ".$row['role']."<br>";
            echo "Tag: ".$row['tag']."<br>";
            echo "Location: ".$row['location']."<br>";
            echo "Experience Required: ".$row['exp_req']."<br>";
            echo "Opened on: ".$row['open_date']."<br>";
            echo "Closed on: ".$row['close_date']."<br>";
            echo "<form class=\"form\" action = \"applicant_profile.php\" method = \"POST\">";
            echo "<button name=\"email\" value=\"'$email_applicant'\">Click to see profile</button>";
            echo "</form>";
            // <form class="form" action = "login-backend.php" method = "POST">
			// <input name = "email" placeholder = "Email/Registration ID"><br><br>
			// <input name = "password" type = "password" placeholder = "Password"><br><br>
			// Appplicant:<input type="radio" name="radio" value="Applicant">
			// Organization:<input type="radio" name="radio" value="Organization"><br><br>
			// <button type = "submit">Submit</button>
			// </form>
            echo "<br><br>";
            } 
        }
        // echo $years;

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
	<!-- <br><br>
	<center>
		<h1>Signup</h1>
		<form action = "signup-backend.php" method = "POST">
			<input name = "name" placeholder = "Name"><br><br>
			<input name = "email" placeholder = "Email"><br><br>
			<input name = "password" type = "password" placeholder = "Password"><br><br>
			<button type = "submit">Submit</button>
		</form>
	</center> -->
</body>
</html>
