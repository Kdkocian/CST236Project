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
    echo '<ul id="content" class="list-unstyled">';
    $product = $db->getAllproducts();
    for($id = 0;$id < count($product);$id++){
    echo '<li>';
        echo "<form action = '../controllers/manageProducts.php' method = 'POST'>";
            echo "<div class='row'>";
                echo "<div class='col-md-2'>".$product[$id][0]."</div>";
                echo "<div class='col-md-3'>".$product[$id][1]."</div>";
                echo "<div class='col-md-3'>".$product[$id][2]."</div>";
                echo "<div class='col-md-3'>".$product[$id][3]."</div>";
                echo '<div classs="col-md-4"><input type = "hidden" name = "ID" value = "'.$product[$id][0].'">';
                echo '<input type="submit" name = "ADD" value="Add" /></div>';
                echo '<input type = "hidden" name = "ID" value = "'.$product[$id][0].'"><input type="submit" name = "delete" value="Delete" />';
                echo '<td><input type = "hidden" name = "ID" value = "'.$product[$id][0].'"><input type="submit" name = "EDIT" value="Edit" />';
            echo "</div>";
        echo "</form>";
    echo '</li>';
    }
    echo '</ul>';
    echo "<a href='../views/loginSuccessful.php'>Back to Login Success</a>";
    ?>
    </body>
</html>