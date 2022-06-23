<!DOCTYPE html>
<html>

<head>
	<title>Insert Page page</title>
</head>

<body>
	<center>
		<?php

		// servername => localhost
		// username => root
		// password => empty
		// database name => staff
		$conn = mysqli_connect("localhost", "root", "", "donatehere");
		
		// Check connection
		if($conn === false){
			die("ERROR: Could not connect. "
				. mysqli_connect_error());
		}
		
		// Taking all 5 values from the form data(input)
		$Name = $_REQUEST['Name'];
		$Phonenumber = $_REQUEST['Phonenumber'];
		$Address = $_REQUEST['Address'];
		$Describefood = $_REQUEST['Describefood'];
		$Rate = $_REQUEST['Rate'];
		
		// Performing insert query execution
		// here our table name is college
		$sql = "INSERT INTO Name VALUES ('$Name',
			'$Phonenumber','$Address','$Describefood','$Rate')";
		
		if(mysqli_query($conn, $sql)){
			echo "<h3>Your donation has been recorded.
			We will send a person to take your kind donation!!!
			Thank you!!</h3>";

			echo nl2br("\n$Name\n $Phonenumber\n "
				. "$Address\n $Describefood\n $Rate");
		} else{
			echo "ERROR: Hush! Sorry $sql. "
				. mysqli_error($conn);
		}
		
		// Close connection
		mysqli_close($conn);
		?>
	</center>
</body>

</html>
