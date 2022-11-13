<html>
<head>
	<title>Add Users</title>
</head>

<body>
	<a href="index.php">Go to Home</a>
	<br/><br/>

	<form action="add.php" method="post" name="form1">
		<table width="25%" border="0">
			<tr>
				<td>Dept</td>
				<td><input type="text" name="dept"></td>
			</tr>
			<tr>
				<td>Name</td>
				<td><input type="text" name="name"></td>
			</tr>
			<tr>
				<td>NID</td>
				<td><input type="text" name="nid"></td>
			</tr>
			<tr>
				<td>Birth</td>
				<td><input type="text" name="birth"></td>
			</tr>
			<tr>
				<td>Address</td>
				<td><input type="text" name="address"></td>
			</tr>
			<tr>
				<td></td>
				<td><input type="submit" name="Submit" value="Add"></td>
			</tr>
		</table>
	</form>

	<?php

	// Check If form submitted, insert form data into users table.
	if(isset($_POST['Submit'])) {
		$dept = $_POST['dept'];
		$name = $_POST['name'];
		$nid = $_POST['nid'];
		$birth = $_POST['birth'];
		$address = $_POST['address'];

		// include database connection file
		include_once("config.php");

		// Insert user data into table
		$result = mysqli_query($mysqli, "INSERT INTO student(dept,name,nid,birth,address) VALUES('$dept','$name','$nid','$birth','$address')");

		// Show message when user added
		echo "User added successfully. <a href='index.php'>View Users</a>";
	}
	?>
</body>
</html>