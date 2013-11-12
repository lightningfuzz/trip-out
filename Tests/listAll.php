<!--
To change this template, choose Tools | Templates
and open the template in the editor.
-->

<?php require_once("../dbConnect.php"); ?>

<!DOCTYPE html>
<html>
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
        <link rel ="stylesheet" type ="text/css" href ="../css/bootstrap.css">
        <title></title>
    </head>
    <body padding-left="30px">
        <h2>Users</h2>
        <table class="table-bordered">
            <thead>
                <tr>
                    <th>Username</th>
                    <th>Email</th>
                </tr>
            </thead>
            <tbody>
                <?php require_once("../DAOs/registeredUserDAO.php"); 
                $users = dbConnect::getInstance()->query("SELECT * FROM registered_user");
                while($row = mysqli_fetch_array($users)):
                    echo "<tr><td>".$row['user_name']."</td>";
                    echo "<td>". $row['email'] . "</td>";
                    $id = $row['user_id'];
                ?>
                
                <td>
                    <form name="editUser" action="editUser.php" method="GET">
                        <input type="hidden" name="userID" value="<?php echo $id; ?>">
                        <input type="submit" name="editUser" value="Edit">
                    </form>
                </td>
                
                <td>
                    <form name="deleteUser" action="deleteUser.php" method="POST">
                        <input type="hidden" name="userID" value="<?php echo $id; ?>">
                        <input type="submit" name="editUser" value="Delete">
                    </form>
                </td>
                <?php 
                echo "</tr>";
                endwhile; ?>
            </tbody>
        </table>
        
        <?php
        // put your code here
        ?>
    </body>
</html>
