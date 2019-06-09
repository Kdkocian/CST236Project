<?php
require_once '../database.php';
require_once '../functions.php';
$db= new funcs();
?>

<html>
    <head>
    	<title>Manage Users</title>
    	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    </head>
    <body>
<?php
    $product = $db->getAllproducts();
    for($id = 0;$id < count($product);$id++){
        echo "<form action = '../controllers/manageProducts.php' method = 'POST'>";
        echo "<div id='row'>";
            echo "<div id=''>".$product[$id][0]."</div>";
            echo "<div id=''>".$product[$id][1]."</div>";
            echo "<div id=''>".$product[$id][2]."</div>";
            echo "<div id=''>".$product[$id][3]."</div>";
            echo '<div id=""><input type = "hidden" name = "ID" value = "'.$product[$id][0].'">';
            echo '<input type="submit" name = "ADD" value="Add" /></div>';
         echo '<div id=""><input type = "hidden" name = "ID" value = "'.$product[$id][0].'"><input type="submit" name = "delete" value="Delete" />';
        echo '<td><input type = "hidden" name = "ID" value = "'.$product[$id][0].'"><input type="submit" name = "EDIT" value="Edit" /></div>';
        echo "</form></tr>";
    }
    echo "<a href='../views/loginSuccessful.php'>Back to Login Success</a>";
?>
    </body>
</html>