<?php
include '../database.php';
$db = new myfuncs();
$conn = $db->dbConnect();

$sql = "SELECT * FROM orderhistory";

$result = mysqli_query($conn, $sql);
echo "<tr>";
echo "<th>ID, </th>";
echo "<th>UserID, </th>";
echo "<th>Total Spent</th>";
echo "</tr>";
if ($result->num_rows > 0)
{
    while($row = mysqli_fetch_array($result))
    {
       echo $row['ID'].", ".$row['productNAme'].", $".$row['productPrice']."</br>";  
    }
}

$sqlt = "SELECT SUM(productPrice) FROM orderhistory";
$results = mysqli_query($conn, $sqlt);
$rows = mysqli_fetch_array($results);
echo "You have made: $".$rows['SUM(productPrice)'];

?>

