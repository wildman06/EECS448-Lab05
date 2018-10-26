<?php
$user_id = $_POST["user_id"];
$mysqli = new mysqli("mysql.eecs.ku.edu", "a516w489", "shiegh9E", "a516w489");

/* check connection */
if ($mysqli->connect_errno) {
    printf("Connect failed: %s\n", $mysqli->connect_error);
    exit();
}

if($user_id != null)
{
$query = "INSERT INTO Users (user_id) VALUES ('" . $user_id . "')";
if($mysqli->query($query) === true)
{
  echo "User has been added.";
  echo "<br>Username: ";
  echo $user_id;
}
else
{
  echo "Error: ";
  echo $user_id;
  echo " already exists.";
}
}
else
{
  echo "you must enter a username.";
}
/* close connection */
$mysqli->close();
?>
