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
	for($id = 0;$id < count($product);$id++)
	{
    	   echo "<tr>";
    	       echo "<td>".$product[$id][0]."</td>";
               echo "<td>".$product[$id][1]."</td>";
           echo "</tr>";
	}
	?>
    </table>
    </body>
</html>
