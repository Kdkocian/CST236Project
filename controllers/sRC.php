<?php

include 'database.php';

$db = new myfuncs();
$conn = $db->dbConnect();

$sql = "SELECT * FROM orderhistory";

mysqli_query($conn, $sql);

?>