<?php
include 'database.php';
$db = new myfuncs();
$conn = $db->dbConnect();

$sql = "SELECT * FROM orderhistory";

$result = mysqli_query($conn, $sql);

if ($result->num_rows > 0)
{
    while($row = $result->fetch_assoc())
    {
      echo "$row[ID], $row[productNAme], $row[productPrice]";  
    }
}
?>

