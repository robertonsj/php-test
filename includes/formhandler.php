<?php
var_dump($_SERVER["REQUEST_METHOD"]);

if ($_SERVER["REQUEST_METHOD"] == "POST") {
  $firstName = htmlspecialchars($_POST["firstname"]);
  $lastName = htmlspecialchars($_POST["lastname"]);
  $favoriteTeam = htmlspecialchars($_POST["team"]);

  if (empty($firstName)) {
    header("Location: ../index.php");
    exit();
  }

  echo "<br>";
  echo "Good to see that your favorite brazilian team is ", $favoriteTeam, ", ", $firstName, " ", $lastName, ".";

  header("Location: ../index.php");
} else {
  header("Location: ../index.php");
}
