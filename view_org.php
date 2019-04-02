<html>
<head>
	<meta charset="UTF-8">
	<title>Organization Page</title>
	
	
	
		<link rel="stylesheet" href="css/style.css">

	
</head>
<body>
	<div class="wrapper">
		<div class="container">
        <h1>Organization Page</h1>
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
        $org_reg = $_POST["org_reg"];
        $query = "SELECT * FROM ORGANIZATION_ WHERE org_reg = '$org_reg'";
        $result = mysqli_query($con, $query);
        $row = mysqli_fetch_assoc($result);
        echo "<h1>".$row['org_name']." (".$row['org_reg'].")</h1><br>";
        $starNumber=$row['rating'];
        for($x=1;$x<=$starNumber;$x++) {
            echo '<img src="res/star.png" />';
        }
        if (($x - $starNumber) <= 0.9) {
            echo '<img src="res/halfstar.png" />';
        }        
        echo "<br>	<form class = \"form\" action = \"view_reviews_org.php\" method = \"POST\">
        <input type=\"hidden\" name=\"org_reg\" value=\"".$org_reg."\">
        <button type = \"submit\">View Reviews</button>
        </form>";
        echo "<br>	<form class = \"form\" action = \"review.php\" method = \"POST\">
        <input type=\"hidden\" name=\"org_reg\" value=\"$org_reg\">
        <input type=\"hidden\" name=\"org_name\" value=\"".$row['org_name']."\">
        <button type = \"submit\">Submit an anonymous review</button>
        </form>" ;  
        $success_rate=100*$row['num_listings']/$row['num_hired'];
        echo "<br>".$row['num_listings']." Jobs Posted<br>".$row['num_hired']." Candidates Hired<br>".$success_rate."% Success Rate";
        echo "<br><br><h3>Job Listings<h3>";
        $query_joblist = "SELECT * FROM JOB_LISTING_ WHERE org_reg = '$org_reg'";
        $result_joblist = mysqli_query($con, $query_joblist);

        while($row_joblist=mysqli_fetch_array($result_joblist,MYSQLI_ASSOC)){ 
        echo "
    
                <form action=\"apply.php\" method = POST>
                <input type= \"hidden\" name = \"job_id\" value=\"".$row_joblist['job_id']."\">
                <input type= \"hidden\" name = \"role\" value=\"".$row_joblist['role']."\">
                <input type= \"hidden\" name = \"org_name\" value=\"".$row['org_name']."\">
                <button type = \"submit\">
            Job ID: ".$row_joblist['job_id']."<br>
            Role: ".$row_joblist['role']."<br>
            Tag: ".$row_joblist['tag']."<br>
            Location:".$row_joblist['location']."<br>
            Experience Required:".$row_joblist['exp_req']."<br>
            Opened on:".$row_joblist['open_date']."<br>
            Closed on:".$row_joblist['close_date']."<br>
            Click here to Apply	
            
            </button>
                </form>
    
    
    ";
        } 
 
    

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
