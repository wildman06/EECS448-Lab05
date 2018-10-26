<?php
$user_id = $_POST['user_id'];
$mysqli = new mysqli("mysql.eecs.ku.edu", "a516w489", "shiegh9E", "a516w489");

/* check connection */
if ($mysqli->connect_errno)
{
    printf("Connect failed: %s\n", $mysqli->connect_error);
    exit();
}

echo "<table>";
echo "<tr><th>post_id</th> <th>content</th> <th>author_id</th> <tr>";
  $query = "SELECT * FROM Posts where author_id='$user_id'";
  $post = $mysqli->query($query);
  while($row = $post->fetch_assoc())
  {
    $post_id= $row["post_id"];
    $content= $row["content"];
    $author_id= $row["author_id"];

    echo "<tr> <td>$post_id</td> <td>$content</td> <td>$author_id</td> </tr>";
  }
  echo "</table>";

/* close connection */
$post->free();
$mysqli->close();
?>
