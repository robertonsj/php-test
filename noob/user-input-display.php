<?php
  if(isset($_POST["submit"])){
    # Entering successful

  }else {
    echo "The name inserted was not accepted. He is quite ugly 😂😂";
  }
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" type="text/css" href="style.css">

  <title>Document</title>
</head>
<body>
  <h2 class="hero"><?php echo "The user's name is ", $_POST["name"]; ?>
     🚀🚀🗿🗿
  </h1>
  <div class="container">
    <div class="holder">
      <form action="user-input-display.php" method="post">
        <div class="wrapper">
          <input type="text" name="name" placeholder="Enter Username">
        </div>
        <br>
        <div class="wrapper">
          <input type="submit" name="submit" value="submit">
        </div>
      </form>
    </div>
  </div>
</body>
</html>