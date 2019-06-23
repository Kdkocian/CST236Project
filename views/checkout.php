<?php
require_once '../database.php';
require_once '../functions.php';
$func= new funcs();
$db = new myfuncs();
$conn = $db->dbConnect();
echo "Your order is being processed"."</br>";

/*$sql = "DELETE FROM cart WHERE productIDs > 0";

mysqli_query($conn, $sql);

mysqli_close($conn);*/

echo "<a href='viewAllProducts.php'>Back to Store</a>"."</br>";
?>
<html>
	<head>
	<title>receipt</title>
	</head>
	<body>
	<table>
	<tr>
		<th>Product ID</th>
		<th>Product Name</th>
		<th>Price</th>
	</tr>
	<?php
	$product = $func->getAllIncart();
	for($id = 0;$id < count($product);$id++)
	{
    	   echo "<tr>";
    	       echo "<td>".$product[$id][0]."</td>";
               echo "<td>".$product[$id][1]."</td>";
               echo "<td>$".$product[$id][2]."</td>";
           echo "</form></tr>";
	}
	
	$sql = "SELECT SUM(productPrice) FROM cart";
	mysqli_query($conn, $sql);
	echo "Your total is: '$sql'";
	mysqli_close($conn);
	?>
    </table>
    </body>
</html>