<?php
require_once '../database.php';
$db =  new myfuncs();
$conn = $db->dbConnect();

$sql = "SELECT * FROM products";

$result = $conn->query($sql);

if ($result->num_rows > 0)
{
    while($row = $result->fetch_assoc())
    {
        echo $row['productID']," ", $row['productName'], " ", $row['productDescript'] ."<br>";
    }
}

?>