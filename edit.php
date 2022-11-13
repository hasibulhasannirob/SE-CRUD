<?php
// include database connection file
include_once("config.php");

// Check if form is submitted for user update, then redirect to homepage after update
if(isset($_POST['update']))
{
	$id = $_POST['id'];

	$dept=$_POST['dept'];
	$name=$_POST['name'];
	$nid=$_POST['nid'];
	$birth=$_POST['birth'];
	$address=$_POST['address'];
	

	// update user data
	$result = mysqli_query($mysqli, "UPDATE student SET dept='$dept',name='$name',nid='$nid',birth='$birth',address='$address' WHERE id=$id");

	// Redirect to homepage to display updated user in list
	header("Location: index.php");
}
?>
<?php
// Display selected user data based on id
// Getting id from url
$id = $_GET['id'];

// Fetech user data based on id
$result = mysqli_query($mysqli, "SELECT * FROM student WHERE id=$id");

while($user_data = mysqli_fetch_array($result))
{

		$dept = $user_data['dept'];
		$name = $user_data['name'];
		$nid = $user_data['nid'];
		$birth = $user_data['birth'];
		$address = $user_data['address'];
}
?>
<html>
<head>
	<title>Edit User Data</title>
</head>

<body>
	<a href="index.php">Home</a>
	<br/><br/>

	<form name="update_user" method="post" action="edit.php">
		<table border="0">
			<tr>
				<td>Dept</td>
				<td><input type="text" name="dept" value="<?php echo $dept;?>"></td>
			</tr>
			<tr>
				<td>Name</td>
				<td><input type="text" name="name" value="<?php echo $name;?>"></td>
			</tr>
			<tr>
				<td>NID</td>
				<td><input type="text" name="nid" value="<?php echo $nid;?>"></td>
			</tr>
			<tr>
				<td>Birth</td>
				<td><input type="text" name="birth" value="<?php echo $birth;?>"></td>
			</tr>
			<tr>
				<td>Address</td>
				<td><input type="text" name="address" value="<?php echo $address;?>"></td>
			</tr>
			<tr>
				<td><input type="hidden" name="id" value="<?php echo $_GET['id'];?>"></td>
				<td><input type="submit" name="update" value="Update"></td>
			</tr>
		</table>
	</form>
</body>
</html>