<?php
echo "<table>";
echo "<tr><th>user_id</th><tr>";
$mysqli = new mysqli("mysql.eecs.ku.edu", "a516w489", "shiegh9E", "a516w489");

/* check connection */
if ($mysqli->connect_errno)
{
    printf("Connect failed: %s\n", $mysqli->connect_error);
    exit();
}


  $query = "SELECT user_id FROM Users";
  $user = $mysqli->query($query);
  while($row = $user->fetch_assoc())
  {
    $data= $row["user_id"];
    echo "<tr><td>$data</td></tr>";
  }
  echo "</table>";

/* close connection */
$user->free();
$mysqli->close();
?>
