<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Delete comment</title>
  <link rel="stylesheet" href="css/style.css" />
</head>

<body>
<?php
$hostname = "localhost";
    $username = "byalykt";
    $password = "123qwe";
    $dbname = "byalykt";

    $conn = new mysqli($hostname, $username, $password, $dbname);
    if ($conn->connect_error) {
      die("Connection failed: " . $conn->connect_error);
    }
    if (isset($_POST['delete'])) {
      $id = $_POST['id'];
      $sql = "DELETE FROM `feedback` WHERE id='$id'";

      if ($conn->query($sql) === TRUE) {
        echo "Record deleted successfully";
      } else {
        echo "Error deleting record: " . $conn->error;
      }
}
$conn->close();
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