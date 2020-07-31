<?php
$name = 'Random';
require('./includes/topScripts.php');
?>

<!DOCTYPE html>
<!DOCTYPE html>
<html lang="en" dir="ltr">
  <?php require('includes/head.php') ?>
  <body>
    <div class="container">
      <?php include('includes/header.php') ?>
      <section>
        <h1>About</h1>
          <?php echo "<h1>What {$name}</h1>" ?>
      </section>

    </div>

  </body>
</html>
