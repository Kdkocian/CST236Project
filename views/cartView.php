<?php
require_once '../database.php';
require_once '../functions.php';
$db= new funcs();
?>

<html>
	<head>
	<title>Cart</title>
	</head>
	<body>
	<table>
	<tr>
		<th>Product ID</th>
		<th>Product Name</th>
	</tr>
	<?php
	$product = $db->getAllIncart();
	echo "<form action = '../controllers/manageProducts.php' method = 'POST'>";
	for($id = 0;$id < count($product);$id++)
	{
    	   echo "<tr>";
    	       echo "<td>".$product[$id][0]."</td>";
               echo "<td>".$product[$id][1]."</td>";
           echo "</form></tr>";
	}
	echo "<a href='../views/checkout.php'>Place Order</a>";
	?>
    </table>
    </body>
</html>