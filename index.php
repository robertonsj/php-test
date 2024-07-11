<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
</head>

<body>
  <?php if (true) { ?>
    // Here we output a string into the browser
    <!-- Hello, guys -->
    <p>Some HTML text.</p>
  <?php } ?>


  <h3>Select Your Favorite Brazilian Football Team</h3>
  <main>
    <form action="includes/formhandler.php" method="post">
      <label for="firstname">First name:</label>
      <input id="firstname" type="text" name="firstname" placeholder="First Name"><br>
      <label for="lastname">Last Name</label>
      <input id="lastname" type="text" name="lastname" placeholder="Last Name"><br><br>

      <label for="team">Choose a team:</label>
      <select id="team" name="team" required>
        <option value="" disabled selected> Select a Team </option>
        <option value="flamengo">Flamengo</option>
        <option value="palmeiras">Palmeiras</option>
        <option value="santos">Santos</option>
        <option value="saopaulo">São Paulo</option>
        <option value="corinthians">Corinthians</option>
        <option value="gremio">Grêmio</option>
        <option value="internacional">Internacional</option>
        <option value="cruzeiro">Cruzeiro</option>
        <option value="atleticomg">Atlético Mineiro</option>
        <option value="vasco">Vasco da Gama</option>
        <!-- Add more teams as needed -->
      </select>
      <br><br>
      <input type="submit" value="Submit">
    </form>

  </main>

</body>

</html>