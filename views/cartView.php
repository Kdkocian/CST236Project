<?php
require_once '../database.php';
require_once '../functions.php';
$func= new funcs();
$db = new myfuncs();
$conn = $db->dbConnect();
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
	$product = $func->getAllIncart();
	for($id = 0;$id < count($product);$id++)
	{
    	   echo "<tr>";
    	       echo "<td>".$product[$id][0]."</td>";
               echo "<td>".$product[$id][1]."</td>";
           echo "</form></tr>";
	}
	echo "<a href='../views/checkout.php'>Place Order</a>" ."</br>";
	mysqli_close($conn);
	
	echo "<label>Card Number</label> <input type = 'text' name = 'creditcard'>" ."</br>";
	echo "<label>Date</label> <input type = 'date' style = 'width: 120px' name = 'date'>" ."</br>";
	echo "<label>security code</label> <input type = 'text' style = 'width: 30px' name = 'securitycode'>" ."</br>";
	?>
    </table>
    </body>
</html>
