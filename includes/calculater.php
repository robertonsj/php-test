<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Calculator</title>

  <style>

  </style>
</head>

<body>

  <h3>Calculator</h3>
  <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" method="post">
    <input type="number" name="num01" placeholder="First Operand">

    <select name="operator">
      <option value="" selected disabled>Choose</option>
      <option value="add">+</option>
      <option value="subtract">-</option>
      <option value="multiply">*</option>
      <option value="divide">/</option>
    </select>

    <input type="number" name="num02" placeholder="Second Operand">

    <button>Calculate</button>

    <?php
    if ($_SERVER["REQUEST_METHOD"] == "POST") {

      //Grab data from inputs
      $num01 = filter_input(INPUT_POST, "num01", FILTER_SANITIZE_NUMBER_FLOAT);
      $num02 = filter_input(INPUT_POST, "num02", FILTER_SANITIZE_NUMBER_FLOAT);
      $operator = htmlspecialchars($_POST["operator"]);

      // Errors handlers
      if(is_numeric($num01) && is_numeric($num02) && !empty($operator)){
        
        if ($num02 == 0 && $operator == "divide") {
          echo "<p style='color: red';>Error. Division by zero.</p>";
  
        } else {
          // Calculate the numbers if no erros
          $result = match ($operator) {
            "add" => $num01 + $num02,
            "subtract" => $num01 - $num02,
            "multiply" => $num01 * $num02,
            "divide" => $num01 / $num02,
          };
          echo "<br><br>RESULT: ", $result;
        }

      }else {
        echo "<p style='color: red';>Set all fields properly.</p>";
      }

    }
    ?>

  </form>
</body>

</html>