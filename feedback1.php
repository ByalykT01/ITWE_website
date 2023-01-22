<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Feedback</title>
    <link rel="stylesheet" href="css/style.css" />
  </head>
  <body>
    <section>
      <div class="main-heading">
        <h1>Your feedback</h1>
        <form action="feedback.php" method="post">
          <p>Your name</p>
          <br>
          <input type="text" name="name" placeholder="Name">
          <br>
          <p>Your email</p>
          <br>
          <input type="text" name="email" placeholder="Email">
          <br>
          <p>Your comment</p>
          <br>
          <textarea name="comment" rows="15" cols="20" placeholder="Comment"></textarea>
          <br>
          <input type="submit" value="Submit" class="main-btn-post">
          <a href="index.php?id=4">
            <input type="button" value="Comments" class="main-btn-post">
          </a>
        </form>
      </div>
    </section>
  </body>