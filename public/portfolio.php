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
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/gh/lykmapipo/themify-icons@0.1.2/css/themify-icons.css">
  <link href="https://fonts.googleapis.com/css2?family=Barlow:wght@100;300;400;500;700&display=swap" rel="stylesheet">
</head>
  <body>
    <div class="container-background">
      <div class="page-background"></div>
      <div class="center-site">
        <div class="container">
          <nav class="navigation active">
            <ul>
              <li><a href="/" class="<?php echo ($location == '/') ? 'active' : ''; ?>"><span class="ti-home"></span></a></li>
              <li><a href="about.php" class="<?php echo ($location == '/about.php') ? 'active' : ''; ?>"><span class="ti-user"></a></li>
              <li><a href="projects.php" class="<?php echo ($location == '/projects.php') ? 'active' : ''; ?>"><span class="ti-bookmark-alt"></a></li>
              <li><a href="contact.php" class="<?php echo ($location == '/contact.php') ? 'active' : ''; ?>"><span class="ti-email"></a></li>
              <li><a href="portfolio.php" class="<?php echo ($location == '/portfolio.php') ? 'active' : ''; ?>"><span class="ti-book"></a></li>
            </ul>
          </nav>
          <div class="user-profile">
            <div class="name">
              Random Savage
              <div class="menu-btn" onclick="myFunction()">
                <span class="ti-layout-grid3">
              </div>
            </div>

            <div class="border-img">
              <div class="user-img"></div>
            </div>
            <div class="title">
              Skills
            </div>
            <div class="user-skills">
              <div class="skill">
                HTML, JSX, PUG
              </div>
              <div class="skill">
                CSS, SCSS, Bootstrap
              </div>
              <div class="skill">
                Javascript, Node, React
              </div>
              <div class="skill">
                PHP, Laravel
              </div>
              <div class="skill">
                MYSQL
              </div>
              <div class="skill">
                Git
              </div>
            </div>
          </div>
          <div class="content-area">
            <div class="hire-status">
              <a href="contact.php" class="primary-button">
                Hire Me!
              </a>
            </div>
            <div class="container-about">
              <h2>About Me</h2>
              <p>I work in a warehouse. I live in a remote area. I travel nearly two hours everyday to work. I have two school aged children. I want a job programming. One where I can work a few days at an office with awesome developers and designers. Possibly some days work remotely. </p>
            </div>
            <div class="social-media">
              <div class="social">
                <div class="logo">
                  <span class="ti-github">
                </div>
                <div class="stats">
                  <span>1000</span>
                  followers
                </div>
              </div>
              <div class="social">
                <div class="logo">
                  <span class="ti-linkedin">
                </div>
                <div class="stats">
                  <span>1000</span>
                  followers
                </div>
              </div>
              <div class="social">
                <div class="logo">
                  <span class="ti-pulse">
                </div>
                <div class="stats">
                  <span>1000</span>
                  followers
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
    <script src="js/app.js"></script>
  </body>
</html>
