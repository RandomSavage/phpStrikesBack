<?php
$juice = 'You like the money';
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
        <h1>Home</h1>
          <?php echo "<h1>$juice</h1>" ?>
          <div class="img-container">
            <div class="img">

            </div>
          </div>
      </section>

    </div>

  </body>
</html>
