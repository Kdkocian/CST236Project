<?php
require_once '../database.php';
require_once '../functions.php';
$db= new funcs();
?>

<html>
    <head>
    	<title>Manage Users</title>
    </head>
    <body>
    <table>
    <tr>
    	<th>Product ID</th>
    	<th>Product Name</th>
    	<th>Product in Stock</th>
    	<th>Product Description</th>
	</tr>
    <?php
    $product = $db->getAllproducts();
    for($id = 0;$id < count($product);$id++){
        echo "<form action = '../controllers/manageProducts.php' method = 'POST'>";
        echo "<tr>";
            echo "<td>".$product[$id][0]."</td>";
            echo "<td>".$product[$id][1]."</td>";
            echo "<td>".$product[$id][2]."</td>";
            echo "<td>".$product[$id][3]."</td>";
            echo '<td><input type = "hidden" name = "ID" value = "'.$product[$id][0].'">';
            echo '<input type="submit" name = "ADD" value="Add" /></td>';
        echo "</form>";
        echo "<form action = '../controllers/manageProducts.php' method = 'POST'>";
        echo '<td><input type = "hidden" name = "ID" value = "'.$product[$id][0].'"><input type="submit" name = "delete" value="Delete" /></td>';
        echo "</form></tr>";
        echo "<form action = '../controllers/manageProducts.php' method = 'POST'>";
        echo '<td><input type = "hidden" name = "ID" value = "'.$product[$id][0].'"><input type="submit" name = "EDIT" value="Edit" /></td>';
        echo "</form></tr>";
    }
    echo "<a href='../views/loginSuccessful.php'>Back to Login Success</a>";
    ?>
    </table>
    </body>
</html>