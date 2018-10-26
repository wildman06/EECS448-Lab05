<?php
$user_id = $_POST['user_id'];
$content = $_POST['content'];
$mysqli = new mysqli("mysql.eecs.ku.edu", "a516w489", "shiegh9E", "a516w489");

/* check connection */
if ($mysqli->connect_errno)
{
    printf("Connect failed: %s\n", $mysqli->connect_error);
    exit();
}

if($user_id != null)
{
  $userQ = "SELECT user_id FROM Users where user_id='$user_id'";
  $userSearch = $mysqli->query($userQ);
if($userSearch->fetch_assoc())
{
  $postQ = "INSERT INTO Posts (author_id, content) VALUES ('" . $user_id . "','" . $content . "')";
  $mysqli->query($postQ);
  echo "A post has been added by:";
  echo "<br>Username: ";
  echo $user_id;
}
else
{
  echo "Error: ";
  echo $user_id;
  echo " does not exist.";
}
}
else
{
  echo "you must enter a username.";
}
/* close connection */
$userSearch->free();
$mysqli->close();
?>
