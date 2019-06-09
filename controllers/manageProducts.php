<?php
    require_once '../database.php';
    $db = new myfuncs();
    $conn = $db->dbConnect();
    
    if(isset($_POST['EDIT']))
    {
        
    }
    
    if(isset($_POST['ADD']))
    {
        
    }
    if(isset($_POST['Delete']))
    {
        $id = mysqli_real_escape_string($conn, $_POST['ID']);
        $sql= "DELETE FROM products WHERE ID = '$id'";
        
        mysqli_query($conn, $sql);
        mysqli_close($conn);
        header("Location: ../views/viewAllProducts.php");
    }
?>