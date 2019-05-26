<?php
$fname = mysqli_real_escape_string($conn, $_POST['fName']);
$lname = mysqli_real_escape_string($conn, $_POST['lName']);
$uname = mysqli_real_escape_string($conn, $_POST['uName']);
$pword = mysqli_real_escape_string($conn, $_POST['pWord']);

    if ($fname == ""){
        echo " The First Name cannot be blank ";
    }
    if ($lname == ""){
        echo " The Last Name cannot be blank ";
    }
    if ($uname == ""){
        echo "Please submit a username";
    }
    if ($pword == ""){
        echo "Please submit a password";
    }

$sql = "INSERT INTO users(firstName, lastName, userName, passWord) VALUES('$fname', '$lname', '$uname', '$pword')";

?>


