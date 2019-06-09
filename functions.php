<?php
include_once '../database.php';
class funcs
{
    
    function logOut()
    {
    sessionStorage.clear();
    header("Location: /views/login.html");
    }
    
    function setUseradmin($admin){
        session_start();
        return $_SESSION["isadmin"] = $admin;
    }
    function getAllusers()
    {
        $db = new myfuncs();
        $conn = $db->dbConnect();
        $sql = "SELECT ID, USERNAME FROM users";
        $users = array();
        $result = mysqli_query($conn, $sql);
        
        while ($row = mysqli_fetch_array($result)){
            $users[] = array($row['ID'], $row['USERNAME']);
        }
        mysqli_close($conn);
        return $users;
    }
    function getAllproducts()
    {
       $db = new myfuncs();
       $conn = $db->dbConnect();
       $sql = "SELECT productID, productName, productDescript, productImage FROM products";
       $products = array();
       $result = mysqli_query($conn, $sql);
       
       while($row = mysqli_fetch_array($result))
       {
            $products[] = array($row['ID'], $row['productName'], $row['productDescript'], $row['productImage']);    
       }
       mysqli_close($conn);
       return $products;
    }
}
?>