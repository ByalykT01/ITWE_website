<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Edit comment</title>
  <link rel="stylesheet" href="css/style.css" />
</head>

<body>

<?php
$conn = mysqli_connect("localhost", "byalykt", "123qwe", "byalykt");
$db = mysqli_select_db($conn, 'byalykt');
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}
if (isset($_POST['update'])) {
  $id = $_POST['id'];

  $query = "UPDATE `feedback` SET name='$_POST[name]',email='$_POST[email]',comment='$_POST[comment]' where id='$_POST[id]' ";
  $query_run = mysqli_query($conn, $query);

  if ($query_run) {
    echo "Your comment was successfully updated!";
  } else {
    die("Connection failed!" . mysqli_connect_error());
  }
}
?>
  <nav>
    <ul class="menu">
      <li>
        <a href="index.php?id=4">Comments</a>
      </li>
    </ul>
  </nav>
</body>

</html>