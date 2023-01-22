<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit</title>
    <link rel="stylesheet" href="css/style.css" />
  </head>
  <body>
    <section>
      <div class="main-heading">
        <h1>Edit</h1>
        <form action="" method="post">

          <p>ID</p>
          <br>
          <input type="text" name="id" placeholder="id">
          <br>
          <p>Your *changed* name</p>
          <br>
          <input type="text" name="name" placeholder="Name">
          <br>
          <p>Your *changed* email</p>
          <br>
          <input type="text" name="email" placeholder="Email">
          <br>
          <p>Your *changed* comment</p>
          <br>
          <textarea name="comment" rows="15" cols="20" placeholder="Comment"></textarea>
          <br>
          <input type="submit" value="Update" name="update" class="main-btn-post">
          <a href="index.php?id=4">
            <input type="button" value="Comments" class="main-btn-post">
          </a>
          <a href="index.php?id=6">
            <input type="button" value="Delete" name="delete" class="main-btn-post">
          </a>
        </form>
      </div>
    </section>
  </body>
</html>

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
    echo "Your comment was successfully sent!";
  } else {
    die("Connection failed!" . mysqli_connect_error());
  }
}
?>

