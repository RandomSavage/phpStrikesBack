<?php
$name = 'Random';
require('./includes/topScripts.php');
?>

<!DOCTYPE html>
<!DOCTYPE html>
<html lang="en" dir="ltr">
<head>
  <meta charset="utf-8">
  <title>Portfolio</title>
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="css/master.css">
</head>
  <body>
    <div class="container-background">
      <div class="page-background"></div>
      <div class="center-site">
        <div class="container">
          <nav class="navigation">
            <ul>
              <li><a href="/" class="<?php echo ($location == '/') ? 'active' : ''; ?>">Home</a></li>
              <li><a href="about.php" class="<?php echo ($location == '/about.php') ? 'active' : ''; ?>">About</a></li>
              <li><a href="projects.php" class="<?php echo ($location == '/projects.php') ? 'active' : ''; ?>">Projects</a></li>
              <li><a href="contact.php" class="<?php echo ($location == '/contact.php') ? 'active' : ''; ?>">Contact</a></li>
              <li><a href="portfolio.php" class="<?php echo ($location == '/portfolio.php') ? 'active' : ''; ?>">Portfolio</a></li>
            </ul>
          </nav>
          <div class="user-profile">

          </div>
          <div class="content-area">

          </div>
        </div>
      </div>
    </div>
  </body>
</html>
