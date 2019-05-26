<?php
class myfuncs{
    function dbConnect() {
        $servername = 'us-cdbr-iron-east-02.cleardb.net';
        $username = 'b3737c91bea7fb';
        $password = '819b6359';
        $dbname = 'heroku_e887457b2ad9db9';
        //creates connection
        $conn =  new mysqli($servername, $username, $password, $dbname);
        //tests the connection
        if ($conn->connect_error){
            die("Connection failed: " . $conn->connect_error);
        }
        return $conn;
    }
}
?>