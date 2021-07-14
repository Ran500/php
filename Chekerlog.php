<?php
  
  include 'conn.php';

  $UserName = $_POST['user'];
  $pass = $_POST['pass'];

  $sql = "SELECT * FROM user WHERE UserName='$UserName' OR Email='$UserName'  AND pass='$pass'";
  $result = mysqli_query($conn, $sql);

  if ($UserName == 'admin' && $pass == '123' ) {
    header('Refresh:2; URL=Controller.php');
  }else{
      
  if (!$row = mysqli_fetch_assoc($result)) {
    echo "Your username or password is Erorr !";
    header('Refresh:2; URL=Login.php');
  } else {
    echo "You are logged in!";
    header('Refresh:2; URL=Login.php');
  }

}

?>