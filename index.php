<?php
// Create database connection using config file
include_once("config.php");

// Fetch all users data from database
$result = mysqli_query($mysqli, "SELECT * FROM student");
?>

<html>
<head>
    <title>Homepage</title>
</head>

<body>
<a href="add.php">Add New User</a><br/><br/>

    <table width='80%' border=1>

    <tr>
        <th>ID</th> <th>Dept</th> <th>Name</th> <th>NID</th><th>Birth</th><th>Address</th><th>Update</th>
    </tr>
    <?php
    while($user_data = mysqli_fetch_array($result)) {
        echo "<tr>";
        echo "<td>".$user_data['id']."</td>";
        echo "<td>".$user_data['dept']."</td>";
        echo "<td>".$user_data['name']."</td>";
        echo "<td>".$user_data['nid']."</td>";
        echo "<td>".$user_data['birth']."</td>";
        echo "<td>".$user_data['address']."</td>";
        echo "<td><a href='edit.php?id=$user_data[id]'>Edit</a> | <a href='delete.php?id=$user_data[id]'>Delete</a></td></tr>";
    }
    ?>
    </table>
</body>
</html>