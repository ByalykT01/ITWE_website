<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Comments</title>
    <link rel="stylesheet" href="css/style.css" />
  </head>
  <body>
    <div class="main-heading">
        <h1>Comments</h1>
        <p><?php
    $hostname = "localhost";
    $username = "byalykt";
    $password = "123qwe";
    $dbname = "byalykt";

    $con = mysqli_connect($hostname, $username, $password, $dbname);
    if(!$con)
    {
        die("Connection failed!" . mysqli_connect_error());
    }
    else 
    {
        echo "Successfully Connected! <br>";
    }

$sql = "SELECT * FROM feedback";
$result = mysqli_query($con, $sql);

if (mysqli_num_rows($result) > 0) {
echo '<table class="table1">';
    while ($row = mysqli_fetch_assoc($result)) {
           echo '<tr > <td>' . $row["id"] . '</td>
           <td>' . $row["name"] . '</td>
           <td> ' . $row["email"] . '</td>
           <td>' . $row["comment"] . '</td> </tr>';    }
echo '</table>';
}
else
{
    echo "0 results";
}

?></p>
<nav>
  <ul class="menu">
    <li>
      <a href="index.php?id=5" class="main-btn">Edit</a>
    </li>
  </ul>
</nav>
  </body>
</html>

