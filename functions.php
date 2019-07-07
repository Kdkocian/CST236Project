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
    function getUseradmin(){
        session_start();
        return $_SESSION["isadmin"];
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
       $sql = "SELECT productID, productName, productDescript, inStock, productPrice, productImage FROM products";
       $products = array();
       $result = mysqli_query($conn, $sql);
       
       while($row = mysqli_fetch_array($result))
       {
            $products[] = array($row['productID'], $row['productName'], $row['productDescript'], $row['inStock'], $row['productPrice'], $row['productImage']);    
       }
       mysqli_close($conn);
       return $products;
    }
    function getAllIncart()
    {
        $db = new myfuncs();
        $conn = $db->dbConnect();
        
        $sql = "SELECT productIDs, productNAme, productPrice FROM cart";
        $products = array();
        $result = mysqli_query($conn, $sql);
        
        while($row = mysqli_fetch_array($result))
        {
            $products[] = array($row['productIDs'], $row['productNAme'], $row['productPrice']);
        }
        mysqli_close($conn);
        return $products;
    }
    function couponCode()
    {
        include '../database.php';
        $db = new myfuncs();
        $conn = $db->dbConnect();
        
        $discount = rand(10, 50);
        
        $code = "takeit$discount";
        
        $sql = "INSERT into coupons(couponCode) VALUES($code)";
        
        mysqli_query($conn, $sql);
        mysqli_close($conn);
        return $code;
    }   
}
?>