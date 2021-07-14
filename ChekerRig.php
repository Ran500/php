<?php      
    include('conn.php');  
      
          
    $UserName = $_POST['UserName'];
    $FirstName = $_POST['FirstName'];
    $LastName = $_POST['LastName'];
    $Email =  $_POST['Email'];
    $phone = $_POST['PhoneNumber'];
    $pass =  $_POST['Password'];

      
 
        // Check connection
        if($conn === false){
            die("ERROR: Could not connect. " . mysqli_connect_error());
        }
         
        // Attempt insert query execution
        $sql = "INSERT INTO user (UserName, FirstName, LastName ,Email ,phone ,pass ) 
        VALUES ('$UserName', '$FirstName', '$LastName','$Email','$phone','$pass')";
        if(mysqli_query($conn, $sql)){
            echo "Records inserted successfully.";
        } else{
            echo "ERROR: Could not able to execute $sql. " . mysqli_error($conn);
        }
         
        // Close connection
        mysqli_close($conn);
    
    // echo $_POST['UserName'];
    // echo $_POST['FirstName'];
    // echo $_POST['LastName'];
    // echo $_POST['Email'];
    // echo $_POST['PhoneNumber'];
    // echo $_POST['Password'];


?>  