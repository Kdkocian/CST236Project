<?php
    function logOut()
    {
    session_close();
    header("Location: /views/login.html");
    }
?>