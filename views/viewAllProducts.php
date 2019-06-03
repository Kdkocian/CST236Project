<?php
require_once '../database.php';
$db =  new myfuncs();
$conn = $db->dbConnect();

$sql = "SELECT * FROM products";

$product = mysqli_real_escape_string($conn, $sql);
echo "<table>";
echo "<tr><td>Product ID </td><td>Product Name </td><td>Product Description</td></tr>";
for($x = 0; $x < count((array)$product); $x++)
{
        echo "<tr>";
        echo "<td>" . $product[$x][0] . "</td>" .
            "<td>" . $product[$x][1] . "</td>" .
            "<td>" . $product[$x][2] . "</td>" ;
        echo "</tr>";
}
echo "</table>"
?>