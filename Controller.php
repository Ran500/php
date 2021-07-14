
<?php

include 'conn.php';

 
// Attempt select query execution
$sql = "SELECT * FROM user";
if($result = mysqli_query($conn, $sql)){
    if(mysqli_num_rows($result) > 0){
        echo "<table border='2'>";
            echo "<tr>";
                echo "<th>ID</th>";
                echo "<th>UserName</th>";
                echo "<th>FirstName</th>";
                echo "<th>LastName</th>";
                echo "<th>Email</th>";
                echo "<th>Phone</th>";
                echo "<th>Pass</th>";
                echo "<th>date</th>";
            echo "</tr>";
        while($row = mysqli_fetch_array($result)){
            echo "<tr>";
                echo "<td>" . $row['ID'] . "</td>";
                echo "<td>" . $row['UserName'] . "</td>";
                echo "<td>" . $row['FirstName'] . "</td>";
                echo "<td>" . $row['LastName'] . "</td>";
                echo "<td>" . $row['Email'] . "</td>";
                echo "<td>" . $row['phone'] . "</td>";
                echo "<td>" . $row['pass'] . "</td>";
                echo "<td>" . $row['date'] . "</td>";
                ?>
                <td><a href="Deleted.php?id=<?php echo $row['ID'];?>">Deleted</a></td>
                <td><a href="Edite.php?id=<?php echo $row['ID'];?>"><input type="submit" value="Edite"></a></td>
            <?php 
                echo "</tr>";
        }
        echo "</table>";
        // Free result set
        mysqli_free_result($result);
    } else{
        echo "No records matching your query were found.";
    }
} else{
    echo "ERROR: Could not able to execute $sql. " . mysqli_error($conn);
}
 




?>