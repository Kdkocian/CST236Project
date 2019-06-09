<?php
require_once '../database.php';
require_once '../functions.php';
$db= new funcs();
?>

<html>
    <head>
    	<title>Manage Users</title>
    </head>
    <body>
    <table>
    <tr>
    	<th>ID</th>
    	<th>Username</th>
    	<th>Delete/MakeAdmin</th>
	</tr>
    <?php
    $user = $db->getAllusers();
    for($id = 0;$id < count($user);$id++){
        echo "<form action = '../controllers/manageall.php' method = 'POST'>";
        echo "<tr>";
            echo "<td>".$user[$id][0]."</td>";
            echo "<td>".$user[$id][1]."</td>";
            echo '<td><input type = "hidden" name = "ID" value = "'.$user[$id][0].'">';
            echo '<input type="submit" name = "MakeAdmin" value="Make Admin" /></td>';
        echo "</form>";
        echo "<form action = '../controllers/manageall.php' method = 'POST'>";
        echo '<td><input type = "hidden" name = "ID" value = "'.$user[$id][0].'"><input type="submit" name = "Delete" value="Delete" /></td>';
        echo "</form></tr>";        
    }
    echo "<a href='../views/loginSuccessful.php'>Back to Login Success</a>";
    ?>
    </table>
    </body>
</html>

