<?php
declare(strict_types = 1);
// include 'includes/autoloader.php';
 if(isset($_POST['submit'])) include('includes/calc.inc.php');
?>
<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Calculator</title>
    <link rel="stylesheet" href="/css/master.css">
  </head>
  <body>
    <form class="" action="calculator.php" method="post">
      <p>Php Calculator, Hooray!</p>
      <input type="number" name="num1" value="" placeholder="First Number">
        <select class="" name="oper">
          <option value="add">Addition</option>
          <option value="subtract">Subtraction</option>
          <option value="div">Division</option>
          <option value="mul">Multiplication</option>
        </select>
        <input type="number" name="num2" value="" placeholder="Second Number">
        <button type="submit" name="submit">Calculate</button>
    </form>
  </body>
</html>
