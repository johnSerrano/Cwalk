<?

$page_title = 'Gcc\'s default executable output file name';
$html_title = $page_title . ' | cwalk';
$instructions = 'What is the default executable output file name of gcc?';
$html_description = "$page_title: $instructions";
require_once('header.php');

?>
<div class="instructions">
    <p><?= $instructions ?></p>
</div>

<div class="console">$ cat main.c
    int main (void) {
      int n;

      n = 98;
      return (0);
    }
$ gcc main.c
$ ls -a
.  ..  <input type="text" id="input_0" class="input-medium"/>  main.c
</div>
<div id="message"></div>
<div>
    <p>
        <a id="check" class="btn btn-lg btn-info" href="#" role="button" onclick="check();">Check Answer</a>
        <a id="continue" class="btn btn-lg btn-success" href="#" role="button" style="display:none;">Next Question</a>  
    </p>
</div>
<? require_once('footer.php'); ?>
