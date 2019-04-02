<html>
<head>
	<meta charset="UTF-8">
	<title>Reviews</title>
	
	
	
		<link rel="stylesheet" href="css/style.css">

	
</head>
<body>
	<div class="wrapper">
		<div class="container">
        <h1>Reviews</h1>
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
        $query = "SELECT * FROM REVIEW_ WHERE org_reg = '$org_reg'";
        $result = mysqli_query($con, $query);
        $numResults = mysqli_num_rows($result);
        // echo $years;
        echo "<br><br>";
        if($numResults == 0){
            echo "<br><br><br><center><h1>No Reviews Yet, n00b<br></h1>";
        }
        else{
            while ($row = mysqli_fetch_array($result, MYSQLI_ASSOC)){ 
                echo "Rating: ".$row['rating']."<br>";
                
                $starNumber=$row['rating'];
                for($x=1;$x<=$starNumber;$x++) {
                    echo '<img src="res/star.png" />';
                }
                if (($x - $starNumber) <= 0.9) {
                    echo '<img src="res/halfstar.png" />';
                }
                // while ($x<=5) {
                //     echo '<img src="path/to/blank/star.png" />';
                //     $x++;
                // }

                echo "<br>Comment Received: ".$row['comment'];
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
