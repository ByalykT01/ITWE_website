<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>My Website</title>
    <link rel="stylesheet" href="css/style.css" />
  </head>
  <body>
    <section>
      <nav>
        <ul class="menu">
          <li>
            <a href="index.php?id=1">Home</a>
          </li>
          <li>
            <a href="index.php?id=2">About</a>
          </li>
          <li>
            <a href="index.php?id=3">Feedback</a>
          </li>
        </ul>
      </nav>
    </section>
    <article id="contents">
<?php
	 if(empty($_GET["id"])) $_GET["id"]=1;
	 if($_GET["id"]==1) include("home.php");
	 if($_GET["id"]==2) include("about.php");
	 if($_GET["id"]==3) include("feedback1.php");
   if($_GET["id"]==4) include("display.php");
   if($_GET["id"]==5) include("edit.php");
   if($_GET["id"]==6) include("delete.php");
   if($_GET["id"]==7) include("feedback.php");
   if($_GET["id"]==8) include("edit1.php");
   if($_GET["id"]==9) include("delete1.php");
?>
</article>
  </body>
</html>