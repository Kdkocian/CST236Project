<?php
require_once '../database.php';
$db = new myfuncs();
$conn = $db->dbConnect();

$uName = mysqli_real_escape_string($conn, $_POST['uName']);
$pWord = mysqli_real_escape_string($conn, $_POST['pWord']);
    if ($uName == "")
        {
            echo " The First Name cannot be empty";
        }
    if ($pWord == "")
        {
            echo " The Password field is empty";
        }

// checks to match username and password and logs in the users
$sql = "SELECT * From users Where userName = '$uName'";
$result = mysqli_query($conn, $sql) or die ("Failed to query database". mysql_error());
$row = mysqli_fetch_array($result);

    if ($row['PASSWORD'] == $pWord )
        {
            mysqli_close($conn);
            header("Location: ../views/loginSuccessful.php");
        }
    else
        {
            mysqli_close($conn);
            header("Location: ../views/login.html");
        }

?>