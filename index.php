<?
   $html_title = "Cwalk | Home";
   $html_description = "C is fun! :)";
<<<<<<< HEAD
   require_once('header.php');
?>
  <body>

    <div class="container">
      <div class="header clearfix">
        <nav>
          <ul class="nav nav-pills pull-right">
            <li role="presentation" class="active"><a href="index.html">Restart Challenge</a></li>
          </ul>
        </nav>
        <h3 class="text-muted">C Programming</h3>

      </div>

=======
   $page_title = "Let's go for a walk with C";
   require_once('header.php');
?>
>>>>>>> c9050ca44c4372a72104d673730bfb94f164d8f7
      <div class="jumbotron">
        <h1>Basics of C</h1>
        <p class="lead">Welcome to the Holberton School challenge. This will reinforce your knowledge of C Programming Basics.</p>
        <p><a class="btn btn-lg btn-info" href="basic_program.php" role="button">Start Challenge</a></p>
      </div>

      <div class="row marketing">
        <div class="col-lg-12">
          <h4>Instructions</h4>
          <ol start="0">
            <li>Fill in each box with the expected data.</li>
            <li>Click the "Check" button.</li>
            <li>If correct, a next button will appear to move on.</li>
            <li>If incorrect, review your responses and check again when ready.</li>
            <li>Have fun!</li>
          </ol>
        </div>
      </div>

      <div class="row marketing">
        <div class="col-lg-12">
	   <img src="images/home.png">
        </div>
      </div>

      <? require_once('footer.php'); ?>
