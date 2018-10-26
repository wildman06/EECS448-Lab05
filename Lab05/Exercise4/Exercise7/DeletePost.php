<?php
$Posts = $_POST['Posts'];
$mysqli = new mysqli("mysql.eecs.ku.edu", "a516w489", "shiegh9E", "a516w489");

/* check connection */
if ($mysqli->connect_errno)
{
    printf("Connect failed: %s\n", $mysqli->connect_error);
    exit();
}

  foreach($Posts as $post_id)
  {
  $query = "DELETE FROM Posts where post_id = " . $post_id;
  $mysqli->query($query);
  echo "Post was deleted.";
  }

/* close connection */
$mysqli->close();
?>
