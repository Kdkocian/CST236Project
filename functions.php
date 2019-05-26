<?php
    function logOut()
    {
    sessionStorage.clear();
    header("Location: /views/login.html");
    }
?>