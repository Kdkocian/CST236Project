<?php
include 'database.php';
$db = new myfuncs();
$conn = $db->dbConnect();

Echo "Your order is being processed";

$sql = "DELETE FROM cart WHERE productIDs > 0";

mysqli_query($conn, $sql);

mysqli_close($conn);

echo "<a href='viewAllProducts.php'>Back to Store</a>";
?>