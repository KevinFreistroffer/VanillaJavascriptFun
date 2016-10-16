<?php  $activePage = basename($_SERVER['PHP_SELF'], ".php"); ?>

<!doctype html>
<html class="no-js" lang="">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="x-ua-compatible" content="ie=edge">
        <title></title>
        <meta name="description" content="">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <link rel="apple-touch-icon" href="apple-touch-icon.png">
        <!-- Place favicon.ico in the root directory -->

        <link rel="stylesheet" href="css/normalize.css">
        <link rel="stylesheet" href="vendor/font-awesome-4.6.3/css/font-awesome.min.css">
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
        <link rel="stylesheet" href="css/main.css">
        <link href="https://fonts.googleapis.com/css?family=Trirong" rel="stylesheet" media="none" onload="if(media!='all')media='all'">
        <link href="https://fonts.googleapis.com/css?family=Lato" rel="stylesheet">
        <script src="js/vendor/modernizr-2.8.3.min.js"></script>
    </head>
    <body>
        <!--[if lt IE 9]>
            <p class="browserupgrade">This website is designed to work with Internet Explorer 10 and above. Please <a href="http://browsehappy.com/">upgrade your browser</a> to improve your experience.</p>
        <![endif]-->

        <header id="header">
            <h1 id="site-title"><a href="index.php">Sometitle</a></h1>

            <div id="main-menu-bars">
                <i class="fa fa-bars" onClick="toggleMainMenu()"></i>
            </div>

            <ul id="main-menu">
                <li><a href="index.php" class="<?= ($activePage == 'index') ? 'active-link':''; ?>">Home</a></li>
                <li><a href="about.php" class="<?= ($activePage == 'about') ? 'active-link':''; ?>">About</a></li>
                <li><a href="story.php" class="<?= ($activePage == 'story') ? 'active-link':''; ?>">Story</a></li>
                <li><a href="contact.php" class="<?= ($activePage == 'contact') ? 'active-link':''; ?>">Contact</a></li>
            </ul>

            <?php  include('./includes/mobile-main-menu.php'); ?>
        </header>