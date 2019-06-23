<?php
    require_once '../database.php';
    $db = new myfuncs();
    $conn = $db->dbConnect();
    
    if(isset($_POST['EDIT']))
    {
        $id = mysqli_real_escape_string($conn, $_POST['ID']);
        $pname = mysqli_real_escape_string($conn, $_POST['productName']);
        $descript = mysqli_real_escape_string($conn, $_POST['productDescript']);
        $inStock = mysqli_real_escape_string($conn, $_POST['inStock']);
        
        $sql = "UPDATE products SET productName='$pname', productDescript='$descript', inStock='$inStock' WHERE productID='$id'";
        mysqli_query($conn, $sql);
        mysqli_close($conn);
        header("Location: ../views/viewAllProducts.php");
    }
    
    if(isset($_POST['ADD']))
    {
        $productname = mysqli_real_escape_string($conn, $_POST['productName']);
        $productDescript = mysqli_real_escape_string($conn, $_POST['productDescript']);
        $inStock = mysqli_real_escape_string($conn, $_POST['inStock']);
        $sql = "INSERT INTO products(productName, productDescript, inStock) VALUES('$productname', '$productDescript', '$inStock')";
        
        mysqli_query($conn, $sql);
        mysqli_close($conn);
        header("Location: ../views/viewAllProducts.php");
    }
    
    if(isset($_POST['delete']))
    {
        $id = mysqli_real_escape_string($conn, $_POST['ID']);
        $sql= "DELETE FROM products WHERE productID = '$id'";
        
        mysqli_query($conn, $sql);
        mysqli_close($conn);
        header("Location: ../views/viewAllProducts.php");
    }
    
    if(isset($_POST['order']))
    {
        $product = mysqli_real_escape_string($conn, $_POST['productName']);
        $id = mysqli_real_escape_string($conn, $_POST['ID']);
        $price = mysqli_mysqli_real_escape_string($conn, $_POST['productPrice']);
        $sql ="INSERT INTO cart(productIDs, productNAme, productPrice) VALUES('$id','$product', '$price')";
        
        mysqli_query($conn, $sql);
       // mysli_close($conn);
        header("Location: ../views/cartView.php");
    }
?>