<!DOCTYPE HTML>
<html>
<head>
    <h3>Add Member</h3>
    <title>Add Member</title>
</head>
<body>

<form method="post" action="insert_member_sql.php">

    <table>
        <!-- <tr><td> Member ID: </td> <td> <?php echo $_GET['id'] ?> </td> </tr>   -->
        <tr>
            <td>First Name:</td>
            <td><input type="text" name="firstName"></td>
        </tr>
        <tr>
            <td> Last name:</td>
            <td><input type="text" name="lastName"></td>
        </tr>
        <tr>
            <td><input type="submit" name="Add" value="Insert"></td>
            <td><input type="reset" name="addReset" value="Reset"></td>
        </tr>
    </table>

    <a href="index.php">Click Here to go back to Home Page</a>

</form>

</body>
</html>