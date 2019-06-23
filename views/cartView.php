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
	mysqli_close($conn);
	echo "<form action = '../views/checkout.php' method = 'POST'>";
    	echo "<label>Card Number</label> <input type = 'text' pattern = '.{15,16}' style = 'width:120px' name = 'creditcard' required>" ."</br>";
    	echo "<label>Date</label> <input type = 'date' style = 'width: 120px' name = 'date' required>" ."</br>";
    	echo "<label>security code</label> <input type = 'text' style = 'width: 30px' name = 'securitycode' required>" ."</br>";
	echo "<input type = 'submit' name = checkout>";
	echo "</form>";
	?>
    </table>
    </body>
</html>
