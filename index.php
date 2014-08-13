<!DOCTYPE HTML>
<html>
<head>
    <title>Members</title>

    <h2>Members</h2>
</head>
<body>

<?php
include_once("data_con.php");

/*
// Create connection
$con = mysqli_connect("localhost", "root", "password", "soccer");

// Check connection
if (mysqli_connect_errno()) {
    echo "Failed to connect to MySQL: " . mysqli_connect_error();
} else {
    //echo "Connection Successful";
}
*/

$result = mysqli_query($con, "SELECT * FROM members");


echo "<table border = '3' >
        <tr>
        <th>Member ID</th>
        <th>First Name</th>
        <th>Last Name</th>
        <th colspan=\"2\">Transactions</th>
        </tr>";


while ($row = mysqli_fetch_array($result)) {
    echo "<tr>";
    echo "<td>" . "<input type=\"text\" name=\"memberID\" value=$row[0] readonly>" . "</td>";
    echo "<td>" . "<input type=\"text\" name=\"firstName\" value=$row[1]>" . "</td>";
    echo "<td>" . "<input type=\"text\" name=\"lastName\" value=$row[2]>" . "</td>";
    echo "<td><a href='edit_member.php?id=" . $row['member_id'] . "'>Edit</a></td>";
    echo "<td><a href='delete_member_sql.php?id=" . $row['member_id'] . "'>Delete</a></td>";
    echo "</tr>";
}
echo "</table>";

// Check connection
if (mysqli_connect_errno()) {
    echo "Failed to connect to MySQL: " . mysqli_connect_error();
}

mysqli_close($con);
?>
<br>
<!-- <input type="button"  onclick="window.location.href='\insert_member.php'"   value="Add Memebr"> -->
<form action="insert_member.php"><input type="submit" value="Add Member"></form>

</body>
</html>

<!-- Added by Byresh to check GITHYB -->