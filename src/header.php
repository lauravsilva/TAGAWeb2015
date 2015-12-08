<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <title><?php print ($title); ?></title></title>

    <link href="styles/stylesheets/styles.css" rel="stylesheet">

    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
  </head>
  
  <body>
      <nav class="navbar navbar-default navbar-static-top">
      <div class="container">
        <div class="navbar-header">
          <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
        </div>
        <div class="navbar">
          <ul class="nav navbar-nav">
              <li <?= $active_page == "home" ? "class='active'": ""?>><div class="navlink"><a href="index.php">HOME</a></div></li>
              <li <?= $active_page == "about" ? "class='active'": ""?>><div class="navlink"><a href="about.php">ABOUT</a></div></li>
              <li><div class="navbar-brand"><a href="index.php"><img src="assets/logo_desktop.png" id="tagalogo"></a></div></li>
              <li <?= $active_page == "portfolio" ? "class='active'": ""?>><div class="navlink"><a href="portfolio.php">WORK</a></div></li>
              <li <?= $active_page == "blog" ? "class='active'": ""?>><div class="navlink"><a href="blog.php">BLOG</a></div></li>
          </ul>
        </div><!--/.nav-collapse -->
      </div>
    </nav>