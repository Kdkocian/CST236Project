<?php
require_once '../database.php';
require_once '../functions.php';
$db= new funcs();
?>

<html>
    <head>
    	<title>Manage Products</title>
    	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
   		<link rel="stylesheet" href="../CSS/viewAllProductscss.css"/>
    </head>
    <body>
<?php
    echo '<ul id="content" class="list-unstyled">';
    echo '<li>';
    echo "<div class='row'>";
    echo "<div class='col-md-2'>Product ID</div>";
    echo "<div class='col-md-3'>Product Name</div>";
    echo "<div class='col-md-3'>Product Description</div>";
    echo "<div class='col-md-3'>Product In Stock</div>";
    if ($db->getUseradmin())
    {
    echo "<div class='col-md-4'>CRUD</div>";
    }
    else 
    {
    echo "<div class='col-md-4'>ORDER</div>";
    }
    echo '</li>';
    $product = $db->getAllproducts();
    for($id = 0;$id < count($product);$id++)
    {
    echo '<li>';
        echo "<form action = '../controllers/manageProducts.php' method = 'POST'>";
            echo "<div class='row' id='".$id."'>";
                echo "<div class='col-md-2'>";
                    echo "<label>".$product[$id][0]."</label>";
                echo"</div>";
                echo "<div class='col-md-3'>";
                    echo "<label>".$product[$id][1]."</label>";
                echo"</div>";
                echo "<div class='col-md-3'>";
                    echo"<label>".$product[$id][2]."</label>";
                echo"</div>";
                echo "<div class='col-md-3'>";
                    echo "<label>".$product[$id][3]."</label>";
                echo "</div>";
                if($db->getUseradmin())
                {
                echo '<div classs="col-md-4">';
                echo '<input type="button" name = "ADD" value="Add" onclick="createAddField()" />';
                echo '<input type = "hidden" name = "ID" value = "'.$product[$id][0].'"><input type="submit" name = "delete" value="Delete" />';
                echo '<input type="button" class="editButton" name="edit" value="Edit" onclick="createEditField('.$id.', \''.$product[$id][0].'\', \''.$product[$id][1].'\', \''.$product[$id][2].'\', \''.$product[$id][3].'\')"/>';
            echo "</div>";
                } 
                else 
                {
                    echo '<div classs="col-md-4">';
                    echo '<input type="button" name = "Order" value="Order"/>';
                    echo "</div>";
                }
        echo "</form>";
    echo '</li>';
    }
    echo '</ul>';
    echo "<a href='../views/loginSuccessful.php'>Back to Login Success</a>";
    ?>
    <script src="../myscripts.js"></script>
    </body>
</html>