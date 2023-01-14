<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
  <link rel="stylesheet" href="css/style.css" />
</head>
<body>
  <?php
$name = $_POST['name'];
$email = $_POST['email'];
$comment = $_POST['comment'];

$conn = new mysqli('localhost', 'root', '', 'project');
if ($conn->connect_error) {
  die('Connection failed: ' . $conn->connect_error);
} else {
  $stmt = $conn->prepare("INSERT INTO feedback(name, email, comment) VALUES(?,?,?)");
  $stmt->bind_param('sss', $name, $email, $comment);
  $stmt->execute();
  echo "Your comment was successfully sent!";
  $stmt->close();
  $conn->close();
}
?>
<nav><ul class="menu"><li><a href="index.html">Go home</a></li></ul></nav>

</body>
</html>


