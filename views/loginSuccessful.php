<?php
include '../functions.php';
require_once '../database.php';
$db = new funcs();
?>
<html>
<head>
</head>
<body>
<h2>Login was successful</h2>
<script type="text/javascript"> function logout(){ sessionStorage.clear(); window.location.href="login.html";}</script>
<input type = "button" value = "Log Out" onclick = "logout();">
<?php
    if($db->getUseradmin())
    {
        echo "<a href='management.php'>View Users</a>";
        echo "<a href='viewAllProducts.php'>ViewProducts</a>";
    } 
    else 
    {
        echo "<a href='viewAllProducts.php'>ViewProducts</a>";
    }

?>
</body>
</html>