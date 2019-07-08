<?php
require_once '../database.php';
require_once '../functions.php';
$func= new funcs();
$db = new myfuncs();
$conn = $db->dbConnect();
echo "Your order is being processed"."</br>";

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
	if($_POST['couponcode'] == "")
	{
	    $sql = "SELECT SUM(productPrice) FROM cart";
	    $result = mysqli_query($conn, $sql);
	    $row = mysqli_fetch_array($result);
	    echo "Your total is: $".$row['SUM(productPrice)'];
	}
	else 
	{
	    $sql = "SELECT SUM(productPrice) FROM cart";
	    $result = mysqli_query($conn, $sql);
	    $row = mysqli_fetch_array($result);
	    $percentoff = .10;
	    $total = $row['SUM(productPrice)'];
	    $discountprice = $total * $percentoff;
	    $newPrice = $total - $discountprice;
	    echo "Your total is: $".$newPrice;
	}
	$sql = "SELECT SUM(productPrice) FROM cart";
	mysqli_close($conn);
	?>
    </table>
    </body>
</html>