<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <meta name="description" content="<?= $html_description ?>">
    <meta name="author" content="Holberton School team">
    <link rel="icon" href="/images/favicon.ico">

    <title><?= $html_title ?></title>

    <!-- Bootstrap core CSS -->
    <link href="css/bootstrap.min.css" rel="stylesheet">

    <!-- IE10 viewport hack for Surface/desktop Windows 8 bug -->
    <link href="css/ie10-viewport-bug-workaround.css" rel="stylesheet">

    <!-- Custom styles for this template -->
    <link href="css/style.css" rel="stylesheet">
    <!-- Just for debugging purposes. Don't actually copy these 2 lines! -->
    <!--[if lt IE 9]><script src="../../assets/js/ie8-responsive-file-warning.js"></script><![endif]-->
    <script src="js/ie-emulation-modes-warning.js"></script>
    <script src="js/check.js"></script>

    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
  </head>

  <body onload="install_enter_on_inputs()">

    <div class="container">
<? require_once('progress_bar.php'); ?>
      <div class="header clearfix">
        <nav>
          <ul class="nav nav-pills pull-right">
	    <?
	       // Do not show the restart link/button on the homepage
	       if (basename($_SERVER['PHP_SELF']) != 'index.php') { ?>
            <li><a href="/0_basic_program.php">Restart Challenge</a></li>
	    <? } ?>
          </ul>
        </nav>
        <h3 class="text-muted"><?= $page_title ?></h3>

      </div>
