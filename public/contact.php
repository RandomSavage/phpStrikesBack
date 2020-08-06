<?php
$name = 'Random';
require('./includes/topScripts.php');
include './includes/autoloader.php';
?>

<!DOCTYPE html>
<!DOCTYPE html>
<html lang="en" dir="ltr">
  <?php require('includes/head.php') ?>
  <body>
    <div class="container">
      <?php include('includes/header.php') ?>
      <section>
        <h1>Contact</h1>
          <?php
            $x = new Orders('Hello');
            echo $x->get_greet();
            echo "<br>";
           ?>
      </section>

    </div>

  </body>
</html>
