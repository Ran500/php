<?php 
    include 'conn.php';


$id = $_GET['id'];
$sql = "SELECT * FROM user WHERE ID=$id";
if($result = mysqli_query($conn, $sql)){
    if(mysqli_num_rows($result) > 0){
     
        while($row = mysqli_fetch_array($result)){

            $UserName = $row['UserName'];
            $FirstName = $row['FirstName'];
            $LastName = $row['LastName'];
            $Email = $row['Email'];
            $Phone = $row['phone'];
            $Pass = $row['pass'];
            $date = $row['date'];
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

<?php 

if (isset($_POST['submit'])) {

    $user = $_POST['Edit_UserName'];
    echo $user;
    
}


?>



<div id = "frm">  
<h1>Register</h1>  
<form action = "Edite.php"  method = "POST">  
    <p>  
        <label> UserName </label>  
        <input type = "text"  name  = "Edit_UserName" />  
    </p>  
    <p>  
        <label> FirstName </label>  
        <input type = "text" name  = "Edit_FirstName" />  
    </p>  
    <p>  
        <label> LastName  </label>  
        <input type = "text"  name  = "Edit_LastName" />  
    </p> 
    <p>  
        <label>  Email </label>  <br>
        <input type = "text"   name  = "Edit_Email" />  
    </p> 
    <p>  
        <label> PhoneNumber </label>  
        <input type ="text"   name = "Edit_PhoneNumber" />  
    </p> 
    <p>  
        <label> Password </label>  
        <input type = "password"  name  = "Edit_Password" />  
    </p> 
    <p>     
        <input type = "submit"   value = "Login" /> 
        <a href="Login.php">Login</a>
    </p>  
</form>  
</div>  


