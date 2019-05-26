<?php
include '../database.php';
$db = new myfuncs();
$conn = $db->dbConnect();

$fName = mysqli_real_escape_string($conn, $_POST['fName']);
$lName = mysqli_real_escape_string($conn, $_POST['lName']);
$uName = mysqli_real_escape_string($conn, $_POST['uName']);
$pWord = mysqli_real_escape_string($conn, $_POST['pWord']);

    if ($fName == "")
    {
        echo " The First Name cannot be blank ";
    }
    if ($lName == "")
    {
        echo " The Last Name cannot be blank ";
    }
    if ($uName == "")
    {
        echo "Please submit a username";
    }
    if ($pWord == "")
    {
        echo "Please submit a password";
    }

$sql = "INSERT INTO users(firstName, lastName, userName, passWord) VALUES('$fName', '$lName', '$uName', '$pWord')";

mysqli_query($conn, $sql);

mysqli_close($conn);

header("Location: ../views/login.html");
?>