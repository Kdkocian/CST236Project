<?php
require_once '../database.php';
$db = new myfuncs();
$conn = $db->dbConnect();

$searchresult = mysqli_real_escape_string($conn, $_GET['SearchBar']);

$sql = "Select * from products where productName LIKE '%$searchresult%'";

$result = mysqli_query($conn, $sql);

while($row = mysqli_fetch_array($result))
{
    echo '<link rel="stylesheet" type="text/css" href="style.css">';
    echo "<table>";
    echo "<tr><td>Product ID</td><td>Product Name</td><td>Product Description</td></tr>";
    echo $row['productID']," ", $row['productName'], " ", $row['productDescript'] ."<br>";
    echo "</table>";
}
echo "<a href='../views/searchProductview.php'>Searchpage</a>";
