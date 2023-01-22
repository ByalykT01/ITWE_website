<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Delete</title>
    <link rel="stylesheet" href="css/style.css" />
  </head>
  <body>
    <section>
      <div class="main-heading">
        <h1>Delete comment by its ID</h1>
        <form action="" method="post">

          <p>ID</p>
          <br>
          <input type="text" name="id" placeholder="id">
          <br>
          <input type="submit" value="Delete" name="delete" class="main-btn-post">
          <a href="index.php?id=4">
            <input type="button" value="Comments" class="main-btn-post">
          </a>
        </form>
      </div>
    </section>
  </body>
</html>
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