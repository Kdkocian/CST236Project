<?php
require_once '../database.php';
$db =  new myfuncs();
$conn = $db->dbConnect();

$sql = "SELECT * FROM products";

$product = mysqli_real_escape_string($conn, $sql);

echo "<tr><td>Product ID </td><td>Product Name </td><td>Product Description</td></tr>" . "<br>";
while($row = mysqli_fetch_array($product))
{
    echo '<link rel="stylesheet" type="text/css" href="style.css">';
    echo "<table>";
    echo $row['productID']," ", $row['productName'], " ", $row['productDescript'] ."<br>";
    echo "</table>";
}

?>