<?php

  $query = mysql_query ("SELECT * FROM blogEntry WHERE username = 'bobjones' ORDER BY id DESC");

  while ($row = mysql_fetch_array ($query)) 
  {
      $id = $row['id']; 
      $username = $row['username'];
      $title = $row['title'];
      $date = $row['date'];
      $category = $row['category'];
      $content = $row['content'];


    ?>

<form method="post" action="editblogscript.php">
ID: <input type="text" name="id" value="<?php echo $id; ?>" /><br />
Username: <input type="text" name="username" value="<?php echo $_SESSION['username']; ?>" /><br />
Title: <input type="text" name="udtitle" value="<?php echo $title; ?>"/><br />
Date: <input type="text" name="date" value="<?php echo $date; ?>"/><br />
Message: <textarea name = "udcontent" cols="45" rows="5"><?php echo $content; ?></textarea><br />
<input type= "submit" name = "edit" value="Edit!">
</form>


<?php

mysql_connect ("localhost", "root", "");
mysql_select_db("blogass");

if (isset($_POST['edit'])) {

    $id = $_POST['id'];
    $udtitle = $_POST['udtitle'];
    $udcontent = $_POST['udcontent'];


    mysql_query("UPDATE blogEntry SET content = $udcontent, title = $udtitle WHERE id = $id");
}

header( 'Location: index.php' ) ;





?>