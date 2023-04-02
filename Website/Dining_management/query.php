<?php
	// Replace the values in these variables with your database credentials
	$host = '127.0.0.1:4306';
	$username = 'root';
	$password = '';
	$dbname = 'dining_management_system';

	// Connect to the database
	$conn = mysqli_connect($host,$username,$password,$dbname);

	// Check connection
	if (!$conn) {
	    die("Connection failed: " . mysqli_connect_error());
	}

	$search ="";	
	if ($_SERVER["REQUEST_METHOD"] == "POST"){
		$search = $_POST["search"];
	}
	// Select data from a table
	$sql = "SELECT * FROM payments natural join student where Discipline_name like '$search%' ";  //and Meal_type='dinner'
	$result = mysqli_query($conn, $sql);
	echo "<div class='container'>";
	// Display the data in an HTML table
	if (mysqli_num_rows($result) > 0) {

	    echo "<table class = 'table table-primary'>";
	    echo "<tr><th>Transaction id</th><th>Student id</th><th>Name</th><th>Discipline</th><th>Room No</th><th>Meal Type</th></tr>";
	    while($row = mysqli_fetch_assoc($result)) {
	        echo "<tr><td>" . $row["Transaction_ID"]. "</td><td>" . $row["Student_ID"]. "</td><td>" . $row["Student_name"]. "</td><td>" . $row["Discipline_name"]. "</td><td>" . $row["Room_number"]. "</td><td>" . $row["Meal_type"]. "</td></tr>";
	    }
	    echo "</table>";
	} else {
	    echo "0 results";
	}
	echo "</div>";

	// Close the database connection
	mysqli_close($conn);
?>
