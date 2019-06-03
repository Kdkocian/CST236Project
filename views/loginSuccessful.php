<?php
include 'functions.php';
?>
<html>
<head>
</head>
<body>
<h2>Login was successful</h2>
<script type="text/javascript"> function logout(){ sessionStorage.clear(); window.location.href="login.html";}</script>
<input type = "button" value = "Log Out" onclick = "logout();">
<a href="viewAllProducts.php">View Products</a>
</body>
</html>