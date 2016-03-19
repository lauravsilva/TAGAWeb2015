<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
        <title><?php print ($title); ?></title></title>

    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.5.0/css/font-awesome.min.css">
    <link href="styles/stylesheets/styles.css" rel="stylesheet">

    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
<script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
<script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
<![endif]-->
    
    <link rel="icon" href="assets/taga2016.jpg">
    
<style>
    brand {
        margin: 0px;
    }

    div.navlink > a, li.navlink > a, #navdropdown a {
        color:white;
        display: table-cell;
        text-align: center;
        vertical-align: middle;
    }

    li.navlink > a:hover {
        background-color: $teal;
        color:white;
        text-decoration: none;
    }

    .dropdown-menu {
        background-color: $pink;
        color: white;
    }

    .dropdown-menu > li > a {
        color: white;
    }

    .dropdown-menu > li > a:hover {
        background-color:$teal;
    }

    .nav {
        height: 80px;
        margin: 0 auto;
    }
    
    .nav > li {
        width: 20%;
        height: 80px;
    }
        
    .navbar {
        background-color: $pink;
        width:auto;
        margin:auto;
        border:none;
        padding: 0;
    }

    .navigation .navbar-brand {
        max-width: 254px;
        display: block;
        height: 80px;
        padding: 15px;
    }

    .navbar-default .navbar-nav > li > a {
        color: white;
    }

    .navbar-default .navbar-nav > .open > a, .navbar-default .navbar-nav > .open > a:hover, .navbar-default .navbar-nav > .open > a:focus {
        background-color: $pink;
        color: white;
    }

    .navbar-default .navbar-nav > li:hover {
        background-color:$teal;
        text-decoration: underline;
    }

    .navbar-default .navbar-nav > li.active {
        background-color: $teal;
    }

    .navlink {
        width: 150px;
        height: 50px;
        font-family: "Open Sans", sans-serif;
        font-size: 18px;
        text-align:center;
        display: table;
        font-weight: 400;
    }
    
    .navlink:hover {
        text-decoration: none;
    }

    #navdropdown {
        //    margin-top: -29px;
    }

    .navigation .navbar-default .navbar-nav > li#navlogo:hover{
        background-color: none;
        padding-left: 0px;
        }   
        
    #tagalogo {
        width:32px;
        height:60px;
        background-color: $pink; 

    }
    </style>
    
    </head>

<body>
    <div class="navigation">
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
                <div class="navbar navbar-collapse collapse">
                    <ul class="nav navbar-nav">
                        <li <?=$active_page == "about" ? "class='active'": ""?>><div class="navlink"><a class="navlink"  href="members.php">MEMBERS</a></div></li>
                        <li <?=$active_page == "process" ? "class='active'": ""?>><div class="navlink"><a class="navlink" href="process.php">PROCESS</a></div></li>
                        <li id="navlogo"><div class="navbar-brand"><a class="navlink" href="index.php"><img src="assets/logo_desktop.png" id="tagalogo"></a></div></li>
                        <li <?= $active_page == "portfolio" ? "class='active'": ""?>><div class="navlink"><a class="navlink"  href="portfolio.php">PORTFOLIO</a></div></li>
                        <li <?= $active_page == "blog" ? "class='active'": ""?>><div class="navlink"><a class="navlink" href="https://rittaga.wordpress.com/" target="_blank">BLOG</a></div></li>
                    </ul>
                </div><!--/.nav-collapse -->
            </div>
        </nav>
    </div>