<?
   $html_title = "Cwalk | Home";
   $html_description = "C is fun! :)";
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

      <div class="jumbotron">
        <h1>Basics of C</h1>
        <p class="lead">Welcome to the Holberton School challenge. This will reinforce your knowledge of C Programming Basics.</p>
        <p><a class="btn btn-lg btn-success" href="basic_program.html" role="button">Start Challenge</a></p>
      </div>

      <div class="row marketing">
        <div class="col-lg-12">
          <h4>Instructions</h4>
          <ol>
            <li>Fill in each box with the expected data.</li>
            <li>Click the "Check" button.</li>
            <li>If correct, a next button will appear to move on.</li>
            <li>If incorrect, review your responses and check again when ready.</li>
          </ol>
        </div>
      </div>

      <? require_once('footer.php'); ?>
